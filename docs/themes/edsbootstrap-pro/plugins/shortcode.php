<?php

// [edsproject shownumber="0" orderby="ID" order="DESC" categories_orderby="name"]
function pull_edsproject( $atts ) {
    $output = '';
	$shownumber = (cs_get_option( 'eds_portfolio_number' )!= "") ? cs_get_option('eds_portfolio_number'):'5000';
	$shownumber = ($shownumber != "") ? $shownumber : 5000;
    $data = shortcode_atts( array(
        'shownumber' =>$shownumber,
		'orderby' =>'ID',
		'order' =>'DESC',
		'categories_orderby' =>'name',
		'column' => ''
    ), $atts );
 	
	$args= array( 
		'post_type' =>'edsproject',
		'order' =>$data['order'],
		'orderby' =>$data['orderby'],
		'posts_per_page'=>(int)$data['shownumber'],
		'suppress_filters' => true
	);
	$categories = get_categories( array(
	  'taxonomy' => 'edsproject-categories',
	  'show_count' => 0,
	  'pad_counts' => 0,
	  'orderby' =>$data['categories_orderby'],
	  'hierarchical' => 1,
	  'suppress_filters' => true
	) );
	if( count($categories) > 0){
		$output .='<div class="row">
		<div class="col-md-12">
		<ul id="filter" class="filter">
		<li><a data-filter="*" class="btn btn-default btn-sm active" role="button">'.__('All', 'edsbootstrap').'</a></li>
		';
		foreach ( $categories as $cat ) {
		 $output .='<li><a data-filter=".'.$cat->slug.'" class="btn btn-default btn-sm" role="button">'.$cat->name.'</a></li>';
		}
		$output .='</ul>
		</div>
		</div>';
	}
	
	
	$second_query = new WP_Query( $args );
	if ($second_query->have_posts()) :
		$output .='
		<div class="col-md-12">
		<article id="filtercontainer" class="isotope">';
			while ($second_query->have_posts()) : $second_query->the_post();
			$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'project-size' );
			$terms=wp_get_post_terms( get_the_ID(),'edsproject-categories');
			if( count($terms) > 0){
				$class = '';
				foreach ($terms as $term){
				 $class .= $term->slug . '  ';
				}
			}
			if($data['column']==""){
				$column = (cs_get_option( 'eds_portfolio_column' )!= " ") ? ' col-md-'.cs_get_option( 'eds_portfolio_column' ) : 'col-md-4';
				$column = ($column != "") ? $column : 'col-md-4';
			}else{
				$column =' col-md-'.$data['column'];
			}
			if($image[0]!=""){
			 $output .=' <div class="item '.$class.'  '.$column.' col-xs-6" data-category="'.$class.'">
                <figure class="item-figure">
                    <img src="'.$image[0].'" class="img-responsive" alt="img">
                    <figcaption class="overlay">
                        <p>'.get_the_title().'</p>
                        <a href="'.esc_url( get_permalink(get_the_ID()) ).'" class="ajax-popup-link"></a>
                    </figcaption>
                </figure>
            </div>';
			}
			endwhile; wp_reset_postdata();
		$output .='</article>
		</div>
		';
	endif; wp_reset_query();
			
			
  
 
    return $output;
 
}
add_shortcode( 'edsproject', 'pull_edsproject' );

//[edstestimonial shownumber="0" orderby="ID" orderby="DESC"]
function eds_testimonial( $atts ) {
	$data = shortcode_atts( array(
        'shownumber' =>'5000',
		'orderby' =>'ID',
		'order' =>'DESC',
    ), $atts );
	$args= array( 
		'post_type' =>'eds_testimonial',
		'order' =>$data['order'],
		'orderby' =>$data['orderby'],
		'posts_per_page'=>(int)$data['shownumber'],
		'suppress_filters' => true
	);
	$second_query = new WP_Query( $args );
	$output = '';
	if ($second_query->have_posts()) :
		$output .='
		<div class="col-md-12">
		<div id="testimonial-slider" class="owl-carousel">';
		 while ($second_query->have_posts()) : $second_query->the_post();
		 $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
		 $meta = get_post_meta( get_the_ID(), '_eds_testimonial', true );
			$output .='<div class="testimonial">
                    <div class="pic">
                        <img src="'.$image[0].'" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="description">
                            '.get_the_content().'
                        </div>
                        <h3 class="testimonial-title">'.get_the_title().'</h3>
                        <small class="post">/ '.$meta['_eds_des'].'</small>
                    </div>
                </div>';
			
	     endwhile; wp_reset_postdata();
		$output .='</div>
		</div>
		';
	endif; wp_reset_query();
	return $output;	
}
add_shortcode( 'edstestimonial', 'eds_testimonial' );


//[edsteam shownumber="4" orderby="ID" orderby="DESC"]
function eds_team( $atts ) {
	$data = shortcode_atts( array(
        'shownumber' =>'5000',
		'orderby' =>'ID',
		'order' =>'DESC',
    ), $atts );
	$args= array( 
		'post_type' =>'eds_team',
		'order' =>$data['order'],
		'orderby' =>$data['orderby'],
		'posts_per_page'=>(int)$data['shownumber'],
		'suppress_filters' => true
	);
	$second_query = new WP_Query( $args );
	$output = '';
	if ($second_query->have_posts()) :
		$output .='
		<div class="col-md-12">
		<div class="our-team">';
		 while ($second_query->have_posts()) : $second_query->the_post();
		 $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
		 $meta = get_post_meta( get_the_ID(), '_eds_team', true );
		 $fb = ($meta['_eds_facebook'] != "")? '<li><a href="'.$meta['_eds_facebook'].'"><i class="fa fa-fw fa-facebook"></i></a></li>':'';
		 $tw = ($meta['_eds_twitter'] != "")? '<li><a href="'.$meta['_eds_twitter'].'"><i class="fa fa-fw fa-twitter"></i></a></li>':'';	
		$goo = ($meta['_eds_google'] != "")? '<li><a href="'.$meta['_eds_google'].'"><i class="fa fa-fw fa-google-plus"></i></a></li>':'';	
		$youtube =($meta['_eds_youtube'] != "")? '<li><a href="'.$meta['_eds_youtube'].'"><i class="fa fa-fw fa-youtube"></i></a></li>':'';
		$print = ($meta['_eds_pinterest'] != "")? '<li><a href="'.$meta['_eds_pinterest'].'"><i class="fa fa-fw fa-pinterest"></i></a></li>':'';
			$output .='
				<div class="col-md-3 col-xs-6 team-member">
            <div class="image">
                <img src="'.$image[0].'">
            </div>
            <h4 class="name">'.get_the_title().'</h4>
            <span class="post">'.$meta['_eds_job'].'</span>
            <div class="text">
                '.get_the_content().'
            </div>
            <ul class="social-share">
				'.$fb.'
				'.$tw.'
				'.$goo.'
				'.$youtube.'
				'.$print.'
            </ul>
        </div>
				
				';
			
	     endwhile; wp_reset_postdata();
		$output .='</div>
		</div>
		';
	endif; wp_reset_query();
	return $output;	
}
add_shortcode( 'edsteam', 'eds_team' );



remove_shortcode('gallery');
function eds_gallery($atts){
	extract( shortcode_atts( array(
		'size' => '',
		'ids' => '',
	), $atts ) );
	$html = '';
	if(!empty($ids)){
		$array = explode( ',' , $ids );
		$html .= '<div class="postGallery  owl-carousel owl-theme">';
		foreach ($array as $id){
			
			$full = wp_get_attachment_image_src( $id, 'full' );
			$html .= '<div class="item">
			<a href="'.$full[0].'" class="image-popup">
			<div class="gallery-image">
				<img src="'.$full[0].'">
			</div>
			</a>
			</div>';
		}
		
		$html .= '</div>';
		
		if(get_post_format()=='gallery' && is_single()):
		$html .='<ul class="list-inline meta">'.edsbootstrap_posted_on_return().edsbootstrap_entry_footer_return().'</ul>';
		endif;
	
	}
	return $html;
}
add_shortcode( 'gallery', 'eds_gallery' );

add_shortcode( 'eds_grid_posts', 'eds_blog_post' );
function eds_blog_post($atts) {
	global $wp_query, $post, $posts;
	extract( shortcode_atts( array(
		'colunm' => '2',
		'post_type' => 'post',
		'posts_per_page' => '5',
		'orderby' =>'ID',
		'pagination' =>1,
		'order' =>'DESC',
		'post_category' =>0,
		
	), $atts ) );
	if($colunm==2){
		$colunm='6';	
	}elseif($colunm==3){
		$colunm==4;
	}else{
		$colunm==12;
	}
	$page_layout=get_post_meta( $post->ID, '_wp_page_template', true );
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => $post_type,
		'posts_per_page' =>$posts_per_page,
		'paged' => $paged,
		'order' =>$order,
		'orderby' =>$orderby,
		'suppress_filters' => true
	);
	if ( absint( $post_category ) > 0 ) {
		$args['cat'] = absint( $post_category );
	}
			
	// the query
	$the_query = new WP_Query( $args );
	
	// Pagination fix
	$temp_query = $wp_query;
	$wp_query   = NULL;
	$wp_query   = $the_query;
	if ( $the_query->have_posts() ) :
	
	
	$video = ($page_layout == 'template/left-sidebar-page.php' || $page_layout == 'template/right-sidebar-page.php') ? 'videoforce':'';
	if($page_layout == 'template/no-sidebar-page.php' && $colunm !=12){
		$video = 'fullvideoforce';
	}
	 ob_start();
		 echo ' <div class="row" id="columns">';		
	echo '<div class="posts-list">';
		$i=0;
		while ( $the_query->have_posts() ) : $the_query->the_post();$i++;
		 echo '<div class="col-md-'.$colunm.'  '.$video.'" >';
		 	get_template_part( 'template-parts/content', get_post_format() );
			
		 echo '</div>';
		 if($page_layout == 'template/no-sidebar-page.php' && $i==3){
			 echo '<div class="clearfix"></div>';	
		 }
		endwhile;
	echo ' </div>';	
		echo ' </div>';	
		if($pagination==1){
	echo '<div class="clearfix"></div>';	
	if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
		the_posts_navigation();
	else :
		the_posts_pagination( array(
			'format' => '/page/%#%',
			'type' => 'list',
			'mid_size' => 2,
			'prev_text' => __( 'Previous', 'edsbootstrap' ),
			'next_text' => __( 'Next', 'edsbootstrap' ),
			'screen_reader_text' => __( '&nbsp;', 'edsbootstrap' ),
		) );
		endif;
		}
		$page = ob_get_contents();
   ob_end_clean();
    wp_reset_postdata();  
	endif;	wp_reset_query();
	return $page;
}