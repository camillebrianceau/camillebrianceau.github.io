<?php
add_action('after_setup_theme', 'onepage_default_menu',99);
/**
 * function to setup default theme menu
 */
function onepage_default_menu() {

    $menuname = 'OnePage Front Page Menu';
    $menulocation = 'primary';
	// Does the menu exist already?
	$menu_exists = wp_get_nav_menu_object($menuname);
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menuname);
		// Grab the theme locations and assign our newly-created menu
		// to the OnePage Theme front Page menu location.
		$locations = get_theme_mod('nav_menu_locations');
		$locations[$menulocation] = $menu_id;
		set_theme_mod('nav_menu_locations', $locations);
    }
	
}
if(!function_exists('row_style_groups')){
	function row_style_groups($groups) {
		$groups['onepage_elements'] = array(
			'name' => __('One Page Elements', 'edsbootstrap'),
			'priority' => 1
		);
		return $groups;
	}
	add_filter( 'siteorigin_panels_row_style_groups', 'row_style_groups' );
}
if(!function_exists('row_style_fields')){
	function row_style_fields($fields) {
		unset($fields['id']);
		$fields['menuname'] = array(
				'name' => __('Menu Name', 'edsbootstrap'),
				'type' => 'text',
				'group' => 'onepage_elements',
				'description' => __('A custom Menu Title. It\'s Only for Home page', 'edsbootstrap'),
				'priority' => 4,
			);
		$fields['id'] = array(
				'name' => __('Row ID', 'edsbootstrap'),
				'type' => 'text',
				'group' => 'onepage_elements',
				'description' => __('A custom ID used for this row And Menu (#) tag. please use lowercase letters and without spaces', 'edsbootstrap'),
				'priority' => 4,
			);
		$menu_exists = wp_get_nav_menu_object('OnePage Front Page Menu');
			
		
		return $fields;
		
		
	}
	add_filter( 'siteorigin_panels_row_style_fields', 'row_style_fields', 20 );
}


if(!function_exists('edsbootstrap_set_one_page_menu')){
	function edsbootstrap_set_one_page_menu() {
		global $post;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( empty( $_POST['_sopanels_nonce'] ) || !wp_verify_nonce( $_POST['_sopanels_nonce'], 'save' ) ) return;
		if ( !current_user_can( 'edit_post', $post->ID ) ) return;
		if ( !isset( $_POST['panels_data'] ) ) return;
		
		//global $post;
		//	$panels_data = get_post_meta( $post->ID, '_wp_page_template', true );
		$panels_data = json_decode( wp_unslash( $_POST['panels_data'] ), true);
		
	
		$arr=$panels_data["grids"];
		if( count($arr) > 0){
			$i=0;
			foreach( $arr as $row ){$i++;
				$val=$row["style"];
				if( isset( $val['menuname'] ) && $val['menuname'] != ""){
					
					if( !isset( $val['id'] ) && $val['id'] == "" ){
						$nav[$i]['menuname']=$val['menuname'];
						$nav[$i]['url']='#'.strtolower(trim(str_replace(' ',"_",$val['menuname'])));
						
					}else{
						$nav[$i]['menuname']=$val['menuname'];
						$nav[$i]['url']='#'.trim(str_replace(' ',"_",$val['id']));
					}
					update_post_meta($post->ID, 'edsbootstrap_one_page_menu',  maybe_serialize($nav));
					
				}
			}
		}
		//exit;
		//var_dump($panels_data["grids"]);
	}
add_action('save_post', 'edsbootstrap_set_one_page_menu');
}




function edsbootstrap_afterPostUpdated($meta_id, $post_id, $meta_key='', $meta_value=''){
    if($meta_key=='_edit_lock') {
        if($_GET['message']==1) {
        	$menu_exists = wp_get_nav_menu_object('OnePage Front Page Menu');
				if ($menu_exists && get_post_meta( $post_id,'edsbootstrap_one_page_menu', true)!="") {
			   $unserialize=get_post_meta( $post_id,'edsbootstrap_one_page_menu', true);
			   $meta=maybe_unserialize($unserialize);
			   if(count($meta)>0){
				   foreach ($meta as $key => $val){
					  $run_once = get_post_meta($meta_id, 'eds_one_'.md5($val['menuname']),$val['menuname'],true);
					 
						  if (!$run_once){
							wp_update_nav_menu_item($menu_exists->term_id, 0, array(
							'menu-item-title' =>$val['menuname'],
							'menu-item-classes' => 'smooth-scroll',
							'menu-item-url' => $val['url'],
							'menu-item-status' => 'publish'));
							 update_post_meta($meta_id, 'eds_one_'.md5($val['menuname']),$val['menuname']);
						  }
				   }
			   }
			}
		   
        }
    }
}
add_action('updated_post_meta', 'edsbootstrap_afterPostUpdated', 10, 4);


if(!function_exists( 'edsbootstrap_panels_render' )){
	function edsbootstrap_panels_render( $post_id = false, $enqueue_css = true, $panels_data = false ) {
		if( empty($post_id) ) $post_id = get_the_ID();
	
		global $siteorigin_panels_current_post;
		$old_current_post = $siteorigin_panels_current_post;
		$siteorigin_panels_current_post = $post_id;
	
		// Try get the cached panel from in memory cache.
		global $siteorigin_panels_cache;
		if(!empty($siteorigin_panels_cache) && !empty($siteorigin_panels_cache[$post_id]))
			return $siteorigin_panels_cache[$post_id];
	
		if( empty($panels_data) ) {
			if( strpos($post_id, 'prebuilt:') === 0) {
				list($null, $prebuilt_id) = explode(':', $post_id, 2);
				$layouts = apply_filters('siteorigin_panels_prebuilt_layouts', array());
				$panels_data = !empty($layouts[$prebuilt_id]) ? $layouts[$prebuilt_id] : array();
			}
			else if($post_id == 'home'){
				$page_id = get_option( 'page_on_front' );
				if( empty($page_id) ) $page_id = get_option( 'siteorigin_panels_home_page_id' );
	
				$panels_data = !empty($page_id) ? get_post_meta( $page_id, 'panels_data', true ) : null;
	
				if( is_null($panels_data) ){
					// Load the default layout
					$layouts = apply_filters('siteorigin_panels_prebuilt_layouts', array());
					$prebuilt_id = siteorigin_panels_setting('home-page-default') ? siteorigin_panels_setting('home-page-default') : 'home';
	
					$panels_data = !empty($layouts[$prebuilt_id]) ? $layouts[$prebuilt_id] : current($layouts);
				}
			}
			else{
				if ( post_password_required($post_id) ) return false;
				$panels_data = get_post_meta( $post_id, 'panels_data', true );
			}
		}
	
		$panels_data = apply_filters( 'siteorigin_panels_data', $panels_data, $post_id );
		if( empty( $panels_data ) || empty( $panels_data['grids'] ) ) return '';
	
		// Filter the widgets to add indexes
		if ( !empty( $panels_data['widgets'] ) ) {
			$last_gi = 0;
			$last_ci = 0;
			$last_wi = 0;
			foreach ( $panels_data['widgets'] as $wid => &$widget_info ) {
	
				if ( $widget_info['panels_info']['grid'] != $last_gi ) {
					$last_gi = $widget_info['panels_info']['grid'];
					$last_ci = 0;
					$last_wi = 0;
				}
				elseif ( $widget_info['panels_info']['cell'] != $last_ci ) {
					$last_ci = $widget_info['panels_info']['cell'];
					$last_wi = 0;
				}
				$widget_info['panels_info']['cell_index'] = $last_wi++;
			}
		}
	
		// Create the skeleton of the grids
		$grids = array();
		if( !empty( $panels_data['grids'] ) && !empty( $panels_data['grids'] ) ) {
			foreach ( $panels_data['grids'] as $gi => $grid ) {
				$gi = intval( $gi );
				$grids[$gi] = array();
				for ( $i = 0; $i < $grid['cells']; $i++ ) {
					$grids[$gi][$i] = array();
				}
			}
		}
	
		// We need this to migrate from the old $panels_data that put widget meta into the "info" key instead of "panels_info"
		if( !empty( $panels_data['widgets'] ) && is_array($panels_data['widgets']) ) {
			foreach ( $panels_data['widgets'] as $i => $widget ) {
				if( empty( $panels_data['widgets'][$i]['panels_info'] ) ) {
					$panels_data['widgets'][$i]['panels_info'] = $panels_data['widgets'][$i]['info'];
					unset($panels_data['widgets'][$i]['info']);
				}
	
				$panels_data['widgets'][$i]['panels_info']['widget_index'] = $i;
			}
		}
	
		if( !empty( $panels_data['widgets'] ) && is_array($panels_data['widgets']) ){
			foreach ( $panels_data['widgets'] as $widget ) {
				// Put the widgets in the grids
				$grids[ intval( $widget['panels_info']['grid']) ][ intval( $widget['panels_info']['cell'] ) ][] = $widget;
			}
		}
	
		ob_start();
	
		// Add the panel layout wrapper
		$panel_layout_classes = apply_filters( 'siteorigin_panels_layout_classes', array(), $post_id, $panels_data );
		$panel_layout_attributes = apply_filters( 'siteorigin_panels_layout_attributes', array(
			'class' => implode( ' ', $panel_layout_classes ) ,
			'id' => 'pl-' . $post_id
		),  $post_id, $panels_data );
		echo '<div';
		foreach ( $panel_layout_attributes as $name => $value ) {
			if ($value) {
				echo ' ' . $name . '="' . esc_attr($value) . '"';
			}
		}
		echo '>';
	
		global $siteorigin_panels_inline_css;
		if( empty($siteorigin_panels_inline_css) ) $siteorigin_panels_inline_css = array();
	
		if( $enqueue_css && !isset($siteorigin_panels_inline_css[$post_id]) ) {
			wp_enqueue_style('siteorigin-panels-front');
			$siteorigin_panels_inline_css[$post_id] = siteorigin_panels_generate_css($post_id, $panels_data);
		}
	
		echo apply_filters( 'siteorigin_panels_before_content', '', $panels_data, $post_id );
	
		foreach ( $grids as $gi => $cells ) {
			
			$grid_classes = apply_filters( 'siteorigin_panels_row_classes', array( 'panel-grid' ), $panels_data['grids'][$gi] );
			$grid_id = !empty($panels_data['grids'][$gi]['style']['id']) ? sanitize_html_class( $panels_data['grids'][$gi]['style']['id'] ) : false;
	
			$grid_attributes = apply_filters( 'siteorigin_panels_row_attributes', array(
				'class' => implode( ' ', $grid_classes ) .'  scrollwatcher',
				'id' => !empty($grid_id) ? $grid_id : 'pg-' . $post_id . '-' . $gi,
			), $panels_data['grids'][$gi] );
	
			// This allows other themes and plugins to add html before the row
			echo apply_filters( 'siteorigin_panels_before_row', '', $panels_data['grids'][$gi], $grid_attributes );
	
			echo '<div ';
			foreach ( $grid_attributes as $name => $value ) {
				echo $name.'="'.esc_attr($value).'" ';
			}
			echo '>';
			
			
	
			$style_attributes = array();
			if( !empty( $panels_data['grids'][$gi]['style']['class'] ) ) {
				$style_attributes['class'] = array('panel-row-style-'.$panels_data['grids'][$gi]['style']['class']);
			}
	
			// Themes can add their own attributes to the style wrapper
			$row_style_wrapper = siteorigin_panels_start_style_wrapper( 'row', $style_attributes, !empty($panels_data['grids'][$gi]['style']) ? $panels_data['grids'][$gi]['style'] : array() );
			if( !empty($row_style_wrapper) ) echo $row_style_wrapper;
	
			$collapse_order = !empty( $panels_data['grids'][$gi]['style']['collapse_order'] ) ? $panels_data['grids'][$gi]['style']['collapse_order'] : ( !is_rtl() ? 'left-top' : 'right-top' );
	
			if( $collapse_order == 'right-top' ) {
				$cells = array_reverse( $cells, true );
			}
			echo "<div class='container'><div class='row'>";
	
			foreach ( $cells as $ci => $widgets ) {
				$cell_classes = array('panel-grid-cell');
				if( empty( $widgets ) ) {
					$cell_classes[] = 'panel-grid-cell-empty';
				}
				if( $ci == count( $cells ) - 2 && count( $cells[ $ci + 1 ] ) == 0 ) {
					$cell_classes[] = 'panel-grid-cell-mobile-last';
				}
				// Themes can add their own styles to cells
				$cell_classes = apply_filters( 'siteorigin_panels_row_cell_classes', $cell_classes, $panels_data );
				$cell_attributes = apply_filters( 'siteorigin_panels_row_cell_attributes', array(
					'class' => implode( ' ', $cell_classes ),
					'id' => 'pgc-' . $post_id . '-' . ( !empty($grid_id) ? $grid_id : $gi )  . '-' . $ci
				), $panels_data );
	
				echo '<div ';
				foreach ( $cell_attributes as $name => $value ) {
					echo $name.'="'.esc_attr($value).'" ';
				}
				echo '>';
				
	
				$cell_style_wrapper = siteorigin_panels_start_style_wrapper( 'cell', array(), !empty($panels_data['grids'][$gi]['style']) ? $panels_data['grids'][$gi]['style'] : array() );
				if( !empty($cell_style_wrapper) ) echo $cell_style_wrapper;
	
				foreach ( $widgets as $pi => $widget_info ) {
					// TODO this wrapper should go in the before/after widget arguments
					$widget_style_wrapper = siteorigin_panels_start_style_wrapper( 'widget', array(), !empty( $widget_info['panels_info']['style'] ) ? $widget_info['panels_info']['style'] : array() );
					siteorigin_panels_the_widget( $widget_info['panels_info'], $widget_info, $gi, $ci, $pi, $pi == 0, $pi == count( $widgets ) - 1, $post_id, $widget_style_wrapper );
				}
	
				if( !empty($cell_style_wrapper) ) echo '</div>';
				echo '</div>';
			}
	
			echo '</div>';
			//isis
			echo '</div></div>';
			// Close the
			if( !empty($row_style_wrapper) ) echo '</div>';
	
			// This allows other themes and plugins to add html after the row
			echo apply_filters( 'siteorigin_panels_after_row', '', $panels_data['grids'][$gi], $grid_attributes );
		}
	
		echo apply_filters( 'siteorigin_panels_after_content', '', $panels_data, $post_id );
	
		echo '</div>';
	
		do_action( 'siteorigin_panels_after_render', $panels_data, $post_id );
	
		$html = ob_get_clean();
	
		// Reset the current post
		$siteorigin_panels_current_post = $old_current_post;
	
		return apply_filters( 'siteorigin_panels_render', $html, $post_id, !empty($post) ? $post : null );
	}
}

if(!function_exists('edsbootstrap_panels_filter_content') && function_exists('siteorigin_panels_filter_content')){
remove_filter( 'the_content', 'siteorigin_panels_filter_content' );
add_filter( 'the_content', 'edsbootstrap_panels_filter_content' );
	function edsbootstrap_panels_filter_content( $content ) {
		global $post;
	
		if ( empty( $post ) ) return $content;
		if ( !apply_filters( 'siteorigin_panels_filter_content_enabled', true ) ) return $content;
	
		// Check if this post has panels_data
		$panels_data = get_post_meta( $post->ID, 'panels_data', true );
		if ( !empty( $panels_data ) ) {
			$panel_content = edsbootstrap_panels_render( $post->ID );
	
			if ( !empty( $panel_content ) ) {
				$content = $panel_content;
	
				if( !is_singular() ) {
					// This is an archive page, so try strip out anything after the more text
	
					if ( preg_match( '/<!--more(.*?)?-->/', $content, $matches ) ) {
						$content = explode( $matches[0], $content, 2 );
						$content = $content[0];
						$content = force_balance_tags( $content );
						if ( ! empty( $matches[1] ) && ! empty( $more_link_text ) ) {
							$more_link_text = strip_tags( wp_kses_no_null( trim( $matches[1] ) ) );
						}
						else {
							$more_link_text = __('Read More', 'edsbootstrap');
						}
	
						$more_link = apply_filters( 'the_content_more_link', ' <a href="' . get_permalink() . "#more-{$post->ID}\" class=\"more-link\">$more_link_text</a>", $more_link_text );
						$content .= '<p>' . $more_link . '</p>';
					}
				}
			}
		}
	
		return $content;
	}
}
?>