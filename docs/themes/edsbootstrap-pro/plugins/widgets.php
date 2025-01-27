<?php
//add_filter('deprecated_constructor_trigger_error', '__return_false');
class RandomPostWidget extends WP_Widget
{


	function __construct() {
	parent::__construct(
			// Base ID of your widget
			'feature_widget', 
		
			// Widget name will appear in UI
			__('EDS Icon,Text Widgets', 'edsbootstrap'), 
		
			// Widget description
			array( 'description' => __( 'Displays a icon Block & TEXT Widgets', 'edsbootstrap' ), ) 
		);
	}
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'content' => '' , 'icon' =>'' ,'buttontext' =>'','buttonurl' =>'') );
    $title = $instance['title'];
	$content = $instance['content'];
	$icon = $instance['icon'];
	$buttontext = $instance['buttontext'];
	$buttonurl = $instance['buttonurl'];
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: 
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('Content'); ?>">Content:
<textarea name="<?php echo $this->get_field_name('content'); ?>" cols="20" rows="5" class="widefat"><?php echo $content; ?></textarea>
</p>
<p><label for="<?php echo $this->get_field_id('icon'); ?>">Icon name: 
  <input class="widefat" id="<?php echo $this->get_field_id('icon'); ?>" name="<?php echo $this->get_field_name('icon'); ?>" type="text" value="<?php echo esc_attr($icon); ?>" /></label>
  <?php echo __('See 600+ Icon list: <a href="'.esc_url( __( 'http://fontawesome.io/icons/', 'edsbootstrap' )).'" target="_blank">fontawesome.io</a>.','edsbootstrap'); ?>
</p>
<p><label for="<?php echo $this->get_field_id('buttontext'); ?>">Button Text: 
  <input class="widefat" id="<?php echo $this->get_field_id('buttontext'); ?>" name="<?php echo $this->get_field_name('buttontext'); ?>" type="text" value="<?php echo esc_attr($buttontext); ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('buttonurl'); ?>">Button url: 
  <input class="widefat" id="<?php echo $this->get_field_id('buttonurl'); ?>" name="<?php echo $this->get_field_name('buttonurl'); ?>" type="text" value="<?php echo esc_attr($buttonurl); ?>" /></label></p>

<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['title'] = $new_instance['title'];
	$instance['content'] = $new_instance['content'];
	$instance['icon'] = $new_instance['icon'];
	$instance['buttontext'] = $new_instance['buttontext'];
	$instance['buttonurl'] = $new_instance['buttonurl'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget."<div class='feature'>";
    $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
	$icon = empty($instance['icon']) ? '' : apply_filters('widget_icon', $instance['icon']);
	$content = empty($instance['content']) ? '' : apply_filters('widget_content', $instance['content']);
	$buttontext = empty($instance['buttontext']) ? '' : apply_filters('widget_buttontext', $instance['buttontext']);
	$buttonurl = empty($instance['buttonurl']) ? '' : apply_filters('widget_buttonurl', $instance['buttonurl']);
	
	if (preg_match("/fa-/i", $icon)) {
		
		$icon=strtolower( trim($icon) );
	}else{
		if (!empty($icon)){
			$icon='fa-'.strtolower( trim($icon) );
		}
	}
	
 	 if (!empty($icon))
	 echo '<i class="icon fa '.$icon.'"></i>';
	 
    if (!empty($title))
      echo '<h3 class="title">'. $title . '</h3>';
 	
 
    // WIDGET CODE GOES HERE
    echo '<div class="description">'.$content.'</div>';
 	if($buttontext != "" && $buttonurl != ""){
		echo '<a class="btn btn-theme" href="'.$buttonurl.'">'.$buttontext.'</a>';
	}
	
	
    echo '</div>'.$after_widget;
  }
 
}



class eds_title_widgets extends WP_Widget
{

	function __construct() {
	parent::__construct(
			// Base ID of your widget
			'onepagetitle', 
		
			// Widget name will appear in UI
			__('EDS One Page Title', 'edsbootstrap'), 
		
			// Widget description
			array( 'description' => __( 'Displays Home Page Title', 'edsbootstrap' ), ) 
		);
	}
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'subtitle' => '','subtitle_pos' =>'0', 'align'=>'center' ) );
    $title = $instance['title'];
	$subtitle = $instance['subtitle'];
	$subtitle_pos = $instance['subtitle_pos'];
	$align = $instance['align'];
	
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: 
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('subtitle'); ?>">Sub title: 
  <input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo esc_attr($subtitle); ?>" /></label></p>


<p><label for="<?php echo $this->get_field_id('subtitle_pos'); ?>">Sub Title: 
	<select class="widefat" id="<?php echo $this->get_field_id('subtitle_pos'); ?>" name="<?php echo $this->get_field_name('subtitle_pos'); ?>">
    	<option value="0" <?php echo ($subtitle_pos==0)? 'selected="selected"' : '';?>>Before title</option>
        <option value="1" <?php echo ($subtitle_pos==1)? 'selected="selected"' : '';?>>After title</option>
    </select></p>
<p><label for="<?php echo $this->get_field_id('align'); ?>">Text Align: 
	<select class="widefat" id="<?php echo $this->get_field_id('align'); ?>" name="<?php echo $this->get_field_name('align'); ?>">
    	<option value="left" <?php echo ($align=='left')? 'selected="selected"' : '';?>>Left</option>
        <option value="center" <?php echo ($align=='center')? 'selected="selected"' : '';?>>Center</option>
        <option value="right" <?php echo ($align=='right')? 'selected="selected"' : '';?>>Right</option>
    </select></p>

<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['title'] = $new_instance['title'];
	$instance['subtitle'] = $new_instance['subtitle'];
	$instance['subtitle_pos'] = $new_instance['subtitle_pos'];
	$instance['align'] = $new_instance['align'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
	$subtitle = empty($instance['subtitle']) ? ' ' : apply_filters('widget_subtitle', $instance['subtitle']);
	$subtitle_pos = empty($instance['subtitle_pos']) ? ' ' : apply_filters('widget_subtitle_pos', $instance['subtitle_pos']);
	$align = empty($instance['align']) ? '' : apply_filters('widget_align', $instance['align']);
	
    if (!empty($title)){
		$before=($instance['subtitle_pos']==0) ? '<span>'.$instance['subtitle'].'</span>':'';
		$after=($instance['subtitle_pos']==1) ? '<span>'.$instance['subtitle'].'</span>':'';
		echo '<h2 class="one-page-title" style="text-align:'.$align.';">'.$before .$title. $after.'</h2>';
	}
 	
    echo $after_widget;
  }
 
}



class portfolio_title_widgets extends WP_Widget
{

	function __construct() {
	parent::__construct(
			// Base ID of your widget
			'edsportfolio', 
		
			// Widget name will appear in UI
			__('EDS Project & Portfolio', 'edsbootstrap'), 
		
			// Widget description
			array( 'description' => __( 'Displays a Project & portfolio  Widgets', 'edsbootstrap' ), ) 
		);
	}

  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'shownumber' => '6', 'columns' => '4', 'orderby' => 'id','order' =>'DESC', 'categories_orderby'=>'' ) );
    $shownumber = $instance['shownumber'];
	$orderby = $instance['orderby'];
	$order = $instance['order'];
	$columns = $instance['columns'];
	
	$categories_orderby = $instance['categories_orderby'];
	
?>
<p><label for="<?php echo $this->get_field_id('shownumber'); ?>">Show number: 
  <input class="widefat" id="<?php echo $this->get_field_id('shownumber'); ?>" name="<?php echo $this->get_field_name('shownumber'); ?>" type="text" value="<?php echo esc_attr($shownumber); ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('columns'); ?>">Columns: 
	<select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>">
    	<option value="6" <?php echo ($columns=='6')? 'selected="selected"' : '';?>><?php echo  __('2 Columns','edsbootstrap');?></option>
        <option value="4" <?php echo ($columns=='4')? 'selected="selected"' : '';?>><?php echo  __('3 Columns','edsbootstrap');?></option>
        <option value="3" <?php echo ($columns=='3')? 'selected="selected"' : '';?>><?php echo  __('4 Columns','edsbootstrap');?></option>
</select>

<p><label for="<?php echo $this->get_field_id('orderby'); ?>">Order by: 
	<select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>">
    	<option value="id" <?php echo ($orderby=='id')? 'selected="selected"' : '';?>>ID</option>
        <option value="title" <?php echo ($orderby=='title')? 'selected="selected"' : '';?>>Title</option>
        <option value="name" <?php echo ($orderby=='name')? 'selected="selected"' : '';?>>Name</option>
        <option value="date" <?php echo ($orderby=='date')? 'selected="selected"' : '';?>>Date</option>
        <option value="rand" <?php echo ($orderby=='rand')? 'selected="selected"' : '';?>>Rand</option>
    </select></p>
<p><label for="<?php echo $this->get_field_id('order'); ?>">Order: 
	<select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
    	<option value="DESC" <?php echo ($order=='DESC')? 'selected="selected"' : '';?>>DESC</option>
        <option value="ASC" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>ASC</option>
        <option value="rand" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>RAND</option>
    </select></p>
    
  <p><label for="<?php echo $this->get_field_id('categories_orderby'); ?>">Categories order by: 
	<select class="widefat" id="<?php echo $this->get_field_id('categories_orderby'); ?>" name="<?php echo $this->get_field_name('categories_orderby'); ?>">
    	<option value="id" <?php echo ($categories_orderby=='id')? 'selected="selected"' : '';?>>ID</option>
        <option value="title" <?php echo ($categories_orderby=='title')? 'selected="selected"' : '';?>>Title</option>
        <option value="name" <?php echo ($categories_orderby=='name')? 'selected="selected"' : '';?>>Name</option>
        <option value="date" <?php echo ($categories_orderby=='date')? 'selected="selected"' : '';?>>Date</option>
        <option value="rand" <?php echo ($categories_orderby=='rand')? 'selected="selected"' : '';?>>Rand</option>
    </select></p>  
    

<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['shownumber'] = $new_instance['shownumber'];
	$instance['orderby'] = $new_instance['orderby'];
	$instance['order'] = $new_instance['order'];
	$instance['categories_orderby'] = $new_instance['categories_orderby'];
	$instance['columns'] = $new_instance['columns'];
	
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $shownumber = empty($instance['shownumber']) ? '' : apply_filters('widget_shownumber', $instance['shownumber']);
	$orderby = empty($instance['orderby']) ? '' : apply_filters('widget_orderby', $instance['orderby']);
	$order = empty($instance['order']) ? '' : apply_filters('widget_order', $instance['order']);
	$categories_orderby = empty($instance['categories_orderby']) ? '' : apply_filters('widget_categories_orderby', $instance['categories_orderby']);
	
  $columns = empty($instance['columns']) ? '' : apply_filters('widget_columns', $instance['columns']);
  
		$shownumber = empty($shownumber) ?'':' shownumber="'.$shownumber.'" ';
		$orderby = empty($orderby) ?'':' orderby="'.$orderby.'" ';
		$order = empty($order) ?'':' order="'.$order.'" ';
		$categories_orderby = empty($categories_orderby) ?'':' categories_orderby="'.$categories_orderby.'" ';
		
		$columns = empty($columns) ?'':' column="'.$columns.'" ';
		
		if($shownumber!=""){
			echo do_shortcode('[edsproject '.$shownumber.' '.$orderby.' '.$order.' '.$categories_orderby.' '.$columns.' ]');	
		}
 
    echo $after_widget;
  }
 
}





class edstestimonial_widgets extends WP_Widget
{

 
 function __construct() {
parent::__construct(
		// Base ID of your widget
		'edstestimonial', 
	
		// Widget name will appear in UI
		__('EDS Testimonial', 'edsbootstrap'), 
	
		// Widget description
		array( 'description' => __( 'Displays a Project & portfolio  Widgets', 'edsbootstrap' ), ) 
	);
}
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'shownumber' => '6', 'orderby' => 'id','order' =>'DESC') );
    $shownumber = $instance['shownumber'];
	$orderby = $instance['orderby'];
	$order = $instance['order'];
	
	
?>
<p><label for="<?php echo $this->get_field_id('shownumber'); ?>">Show number: 
  <input class="widefat" id="<?php echo $this->get_field_id('shownumber'); ?>" name="<?php echo $this->get_field_name('shownumber'); ?>" type="text" value="<?php echo esc_attr($shownumber); ?>" /></label></p>



<p><label for="<?php echo $this->get_field_id('orderby'); ?>">Order by: 
	<select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>">
    	<option value="id" <?php echo ($orderby=='id')? 'selected="selected"' : '';?>>ID</option>
        <option value="title" <?php echo ($orderby=='title')? 'selected="selected"' : '';?>>Title</option>
        <option value="name" <?php echo ($orderby=='name')? 'selected="selected"' : '';?>>Name</option>
        <option value="date" <?php echo ($orderby=='date')? 'selected="selected"' : '';?>>Date</option>
        <option value="rand" <?php echo ($orderby=='rand')? 'selected="selected"' : '';?>>Rand</option>
    </select></p>
<p><label for="<?php echo $this->get_field_id('order'); ?>">Order: 
	<select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
    	<option value="DESC" <?php echo ($order=='DESC')? 'selected="selected"' : '';?>>DESC</option>
        <option value="ASC" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>ASC</option>
        <option value="rand" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>RAND</option>
    </select></p>
    
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['shownumber'] = $new_instance['shownumber'];
	$instance['orderby'] = $new_instance['orderby'];
	$instance['order'] = $new_instance['order'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $shownumber = empty($instance['shownumber']) ? '' : apply_filters('widget_shownumber', $instance['shownumber']);
	$orderby = empty($instance['orderby']) ? '' : apply_filters('widget_orderby', $instance['orderby']);
	$order = empty($instance['order']) ? '' : apply_filters('widget_order', $instance['order']);
	
  
		$shownumber = empty($shownumber) ?'':' shownumber="'.$shownumber.'" ';
		$orderby = empty($orderby) ?'':' orderby="'.$orderby.'" ';
		$order = empty($order) ?'':' order="'.$order.'" ';
		
		if($shownumber!=""){
			echo do_shortcode('[edstestimonial '.$shownumber.' '.$orderby.' '.$order.']');	
		}
 
    echo $after_widget;
  }
 
}




class edsteam_widgets extends WP_Widget
{

  function __construct() {
parent::__construct(
		// Base ID of your widget
		'edsteam', 
	
		// Widget name will appear in UI
		__('EDS Team', 'edsbootstrap'), 
	
		// Widget description
		array( 'description' => __( 'Displays a Team  Widgets', 'edsbootstrap' ), ) 
	);
}
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'shownumber' => '4', 'orderby' => 'id', 'order' =>'DESC') );
    $shownumber = $instance['shownumber'];
	$orderby = $instance['orderby'];
	$order = $instance['order'];
	
	
?>
<p><label for="<?php echo $this->get_field_id('shownumber'); ?>">Show number: 
  <input class="widefat" id="<?php echo $this->get_field_id('shownumber'); ?>" name="<?php echo $this->get_field_name('shownumber'); ?>" type="text" value="<?php echo esc_attr($shownumber); ?>" /></label></p>



<p><label for="<?php echo $this->get_field_id('orderby'); ?>">Order by: 
	<select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>">
    	<option value="id" <?php echo ($orderby=='id')? 'selected="selected"' : '';?>>ID</option>
        <option value="title" <?php echo ($orderby=='title')? 'selected="selected"' : '';?>>Title</option>
        <option value="name" <?php echo ($orderby=='name')? 'selected="selected"' : '';?>>Name</option>
        <option value="date" <?php echo ($orderby=='date')? 'selected="selected"' : '';?>>Date</option>
        <option value="rand" <?php echo ($orderby=='rand')? 'selected="selected"' : '';?>>Rand</option>
    </select>
</p>
<p><label for="<?php echo $this->get_field_id('order'); ?>">Order: 
	<select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
    	<option value="DESC" <?php echo ($order=='DESC')? 'selected="selected"' : '';?>>DESC</option>
        <option value="ASC" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>ASC</option>
    </select>
 </p>
    
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['shownumber'] = $new_instance['shownumber'];
	$instance['orderby'] = $new_instance['orderby'];
	$instance['order'] = $new_instance['order'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $shownumber = empty($instance['shownumber']) ? '' : apply_filters('widget_shownumber', $instance['shownumber']);
	$orderby = empty($instance['orderby']) ? '' : apply_filters('widget_orderby', $instance['orderby']);
	$order = empty($instance['order']) ? '' : apply_filters('widget_order', $instance['order']);
	
  
		$shownumber = empty($shownumber) ?'':' shownumber="'.$shownumber.'" ';
		$orderby = empty($orderby) ?'':' orderby="'.$orderby.'" ';
		$order = empty($order) ?'':' order="'.$order.'" ';
		
		if($shownumber!=""){
			echo do_shortcode('[edsteam '.$shownumber.' '.$orderby.' '.$order.']');	
		}
 
    echo $after_widget;
  }
 
}





class edsrecent_widgets extends WP_Widget
{
 
  function __construct() {
parent::__construct(
		// Base ID of your widget
		'edsrecent', 
	
		// Widget name will appear in UI
		__('EDS Recent Post', 'edsbootstrap'), 
	
		// Widget description
		array( 'description' => __( 'Displays a latest post  Widgets', 'edsbootstrap' ), ) 
	);
}
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title'=>'','shownumber' => '4', 'orderby' => 'id', 'order' =>'DESC') );
    $title = $instance['title'];
    $shownumber = $instance['shownumber'];
	$orderby = $instance['orderby'];
	$order = $instance['order'];
	
	
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: 
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
  
<p><label for="<?php echo $this->get_field_id('shownumber'); ?>">Show number: 
  <input class="widefat" id="<?php echo $this->get_field_id('shownumber'); ?>" name="<?php echo $this->get_field_name('shownumber'); ?>" type="text" value="<?php echo esc_attr($shownumber); ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('orderby'); ?>">Order by: 
	<select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>">
    	<option value="id" <?php echo ($orderby=='id')? 'selected="selected"' : '';?>>ID</option>
        <option value="title" <?php echo ($orderby=='title')? 'selected="selected"' : '';?>>Title</option>
        <option value="name" <?php echo ($orderby=='name')? 'selected="selected"' : '';?>>Name</option>
        <option value="date" <?php echo ($orderby=='date')? 'selected="selected"' : '';?>>Date</option>
        <option value="rand" <?php echo ($orderby=='rand')? 'selected="selected"' : '';?>>Rand</option>
    </select>
</p>
<p><label for="<?php echo $this->get_field_id('order'); ?>">Order: 
	<select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
    	<option value="DESC" <?php echo ($order=='DESC')? 'selected="selected"' : '';?>>DESC</option>
        <option value="ASC" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>ASC</option>
        <option value="rand" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>RAND</option>
    </select>
 </p>
    
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	 $instance['title'] = $new_instance['title'];
	$instance['shownumber'] = $new_instance['shownumber'];
	$instance['orderby'] = $new_instance['orderby'];
	$instance['order'] = $new_instance['order'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
	$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
    $shownumber = empty($instance['shownumber']) ? '' : apply_filters('widget_shownumber', $instance['shownumber']);
	$orderby = empty($instance['orderby']) ? '' : apply_filters('widget_orderby', $instance['orderby']);
	$order = empty($instance['order']) ? '' : apply_filters('widget_order', $instance['order']);
	
  
	 if (!empty($title)){
		echo '<h3 class="title">';
			echo $title;
		echo '</h3>';
	 }
		$args = array(
			'numberposts' => (int)$shownumber,
			'orderby' => $orderby,
			'order' => $order,
			'post_status' => 'publish',
			'suppress_filters' => true
		);
		$readmore=(cs_get_option( 'eds_read_more_btn' )!="")? cs_get_option( 'eds_read_more_btn' ) :__('Read More', 'edsbootstrap');
		$recent_posts = wp_get_recent_posts( $args);
		foreach( $recent_posts as $recent ){
			//var_dump($recent->post_title );
			$image = wp_get_attachment_image_src( get_post_thumbnail_id($recent['ID']), 'thumbnail' );
			echo '<div class="media post">';
				if($image[0]!=""):
                  echo '<div class="media-left">
                        <div class="image">
                            <img src="'.$image[0].'">
                        </div>
                    </div>';
				endif;
              echo   '<div class="media-body">
                        <p class="text">
                            '.$recent['post_title'].'
                        </p>
                        <a href="'.esc_url( get_permalink($recent['ID']) ).'">'.$readmore.'</a>
                    </div>
                </div>';
		}
 
    echo $after_widget;
  }
 
}




function eds_related_post(){
	?>
<div class="relatedposts">

<?php echo (cs_get_option('eds_related_posts_title')!="")? '<h4 class="comments-title">'. cs_get_option('eds_related_posts_title').'</h4>':'';?>
<div class="row">
<div class="projects-carousel" style="display: block;">
<div class="owl-wrapper-outer">
<?php
$posts_per_page = (cs_get_option('eds_related_num')!="")? cs_get_option('eds_related_num'):'3';
  $orig_post = $post;
  global $post;
  $tags = wp_get_post_tags($post->ID);
   
  if ($tags) {
	  
  $tag_ids = array();
  foreach($tags as $individual_tag) { $tag_ids[] = $individual_tag->term_id; }
	  $args=array(
		  'tag__in' => $tag_ids,
		  'post__not_in' => array($post->ID),
		  'posts_per_page'=>$posts_per_page, // Number of related posts to display.
		  'caller_get_posts'=>1
	  );
  $my_query = new wp_query( $args );
 
  while( $my_query->have_posts() ) {
	  $my_query->the_post();
	  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}
	  $time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
	  
  ?>
   
   
		<?php if(get_post_format( get_the_ID() ) == 'video' || get_post_format( get_the_ID() ) == 'audio'){?>
            <div class="col-md-4">
            <div class="item recent-project">
           		  <a href="<?php echo esc_url( get_permalink(get_the_ID()) )?>">
                <div class="gallery-image">
                    <?php echo eds_related_oembed(get_the_content());?>
                </div>
                </a>
                <a class="info" href="<?php echo esc_url( get_permalink(get_the_ID()) )?>">
                    <h4 class="title"><?php the_title();  ?></h4>
                    <p class="description"># <?php echo $time_string;?></p>
                </a>
             </div>
             </div>
		<?php }elseif ( has_post_thumbnail() ){ ?>
        	 <div class="col-md-4">
             <div class="item recent-project">
            	<a href="<?php echo esc_url( get_permalink(get_the_ID()) )?>">
                <div class="gallery-image">
                     <?php the_post_thumbnail('related'); ?>
                </div>
                </a>
                <a class="info" href="<?php echo esc_url( get_permalink(get_the_ID()) )?>">
                    <h4 class="title"><?php the_title();  ?></h4>
                    <p class="description"># <?php echo $time_string;?></p>
                </a>
             </div>
             </div>
        <?php }else{
			$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent=' .get_the_ID() );
  	  		if (!empty($images)) {
				$image = reset($images);
        		$img = wp_get_attachment_image( $image->ID, 'related', false, $attr );
			?>
            <div class="col-md-4">
            <div class="item recent-project">
           		<a href="<?php echo esc_url( get_permalink(get_the_ID()) )?>">
                <div class="gallery-image">
                     <?php echo $img;?>
                </div>
                </a>
                <a class="info" href="<?php echo esc_url( get_permalink(get_the_ID()) )?>">
                    <h4 class="title"><?php the_title();  ?></h4>
                    <p class="description"># <?php echo $time_string;?></p>
                </a>
             </div>
             </div>
        <?php }
		}?>
        
   
  <?php }
  }
  $post = $orig_post;
  wp_reset_query();
  ?>
   </div>
  <div class="clearfix"></div>
  </div>
</div></div>
    <?php
}

function eds_related_oembed($content) {
		//global $post;
		if ( preg_match('~(?:https?://)?(?:www.)?(?:youtube.com|youtu.be)/(?:watch\?v=)?([^\s]+)~', $content, $match) ){
			$video = $match[0];
		} else if ( preg_match('~(?:https?://)?(?:www.)?(?:vimeo.com|player.vimeo.com)/?([^\s]+)~', $content, $match) ){
			$video = $match[0];
		}else if ( preg_match('~(?:https?://)?(?:www.)?(?:dailymotion.com|dai.ly)/(?:video)?([^\s]+)~', $content, $match) ){
			$video = $match[0];
		}else if ( preg_match('~(?:https?://)?(?:www.)?(?:soundcloud.com|w.soundcloud.com)/(?:video)?([^\s]+)~', $content, $match) ){
			$video = $match[0];
		}
		
		if( isset( $video ) && $video !="" ){
			echo '<div class="image">'. wp_oembed_get( $video ) .'</div>';
		}else{
			return false;	
		}
		
	}






class eds_block_posts extends WP_Widget
{

  function __construct() {
parent::__construct(
		// Base ID of your widget
		'edsteam', 
	
		// Widget name will appear in UI
		__('EDS Gird Posts', 'edsbootstrap'), 
	
		// Widget description
		array( 'description' => __( 'Displays a Gird Posts  Widgets', 'edsbootstrap' ), ) 
	);
}
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'posts_per_page' => '3', 'orderby' => 'id', 'order' =>'DESC','colunm' =>'4','post_category'=>0) );
    $posts_per_page = $instance['posts_per_page'];
	$orderby = $instance['orderby'];
	$order = $instance['order'];
	$colunm = $instance['colunm'];
	$post_category = $instance['post_category'];
	
	
?>
<p><label for="<?php echo $this->get_field_id('posts_per_page'); ?>">Show number: 
  <input class="widefat" id="<?php echo $this->get_field_id('posts_per_page'); ?>" name="<?php echo $this->get_field_name('posts_per_page'); ?>" type="text" value="<?php echo esc_attr($posts_per_page); ?>" /></label></p>



<p><label for="<?php echo $this->get_field_id('orderby'); ?>">Order by: 
	<select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>">
    	<option value="id" <?php echo ($orderby=='id')? 'selected="selected"' : '';?>>ID</option>
        <option value="title" <?php echo ($orderby=='title')? 'selected="selected"' : '';?>>Title</option>
        <option value="name" <?php echo ($orderby=='name')? 'selected="selected"' : '';?>>Name</option>
        <option value="date" <?php echo ($orderby=='date')? 'selected="selected"' : '';?>>Date</option>
        <option value="rand" <?php echo ($orderby=='rand')? 'selected="selected"' : '';?>>Rand</option>
    </select>
</p>
<p><label for="<?php echo $this->get_field_id('order'); ?>">Order: 
	<select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
    	<option value="DESC" <?php echo ($order=='DESC')? 'selected="selected"' : '';?>>DESC</option>
        <option value="ASC" <?php echo ($order=='ASC')? 'selected="selected"' : '';?>>ASC</option>
    </select>
 </p>
 
 <p><label for="<?php echo $this->get_field_id('colunm'); ?>">colunm: 
	<select class="widefat" id="<?php echo $this->get_field_id('colunm'); ?>" name="<?php echo $this->get_field_name('colunm'); ?>">
    	<option value="6" <?php echo ($colunm=='6')? 'selected="selected"' : '';?>>2 Columns</option>
        <option value="4" <?php echo ($colunm=='4')? 'selected="selected"' : '';?>>3 Columns</option>
          <option value="3" <?php echo ($colunm=='3')? 'selected="selected"' : '';?>>4 Columns</option>
    </select>
 </p>

 
 <p><label for="<?php echo $this->get_field_id('post_category'); ?>">colunm: 
	<select class="widefat" id="<?php echo $this->get_field_id('post_category'); ?>" name="<?php echo $this->get_field_name('post_category'); ?>">
    	<?php foreach( ng_get_the_category() as $key => $val ) :?>
    	<option value="<?php echo key;?>" <?php echo ($post_category=='6')? 'selected="selected"' : '';?>><?php echo val;?></option>
        <?php endforeach;?>
        
    </select>
 </p>
    
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['posts_per_page'] = $new_instance['posts_per_page'];
	$instance['orderby'] = $new_instance['orderby'];
	$instance['order'] = $new_instance['order'];
	$instance['colunm'] = $new_instance['colunm'];
	$instance['post_category'] = $new_instance['post_category'];
	
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
	
    $posts_per_page = empty($instance['posts_per_page']) ? '' : apply_filters('widget_posts_per_page', $instance['posts_per_page']);
	$orderby = empty($instance['orderby']) ? '' : apply_filters('widget_orderby', $instance['orderby']);
	$order = empty($instance['order']) ? '' : apply_filters('widget_order', $instance['order']);
	$colunm = empty($instance['colunm']) ? '' : apply_filters('widget_colunm', $instance['colunm']);
	$post_category = empty($instance['post_category']) ? '' : apply_filters('widget_post_category', $instance['post_category']);
  
	$args = array(
		'post_type' => 'post',
		'posts_per_page' =>$posts_per_page,
		'order' =>$order,
		'orderby' =>$orderby,
		'suppress_filters' => true
	);
	if($colunm==2){
		$colunm='6';	
	}elseif($colunm==3){
		$colunm==4;
	}else{
		$colunm==12;
	}
	if ( absint( $post_category ) > 0 ) {
		$args['cat'] = absint( $post_category );
	}
	// the query
	$the_query = new WP_Query( $args );
	
	
	if ( $the_query->have_posts() ) :
	
	
	$video = ($page_layout == 'template/left-sidebar-page.php' || $page_layout == 'template/right-sidebar-page.php') ? 'videoforce':'';
	if($page_layout == 'template/no-sidebar-page.php' && $colunm !=12){
		$video = 'fullvideoforce';
	}
	
		 echo ' <div class="row" id="columns">';		
	echo '<div class="posts-list">';
		$i=0;
		while ( $the_query->have_posts() ) : $the_query->the_post();$i++;
		 echo '<div class="col-md-'.$colunm.'  '.$video.'" >';
		 	?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
            
        <?php if(get_post_format()=='gallery'):
		
		echo get_post_gallery();
		?>
        
        <?php elseif(get_post_format()=='audio'):?>
        	<?php do_action('edsbootstrap_oembed');?>
        <?php elseif(get_post_format()=='video'):?>
           <?php do_action('edsbootstrap_oembed');?>
            <?php elseif ( has_post_thumbnail() ) :?>
    <!-- Post Image -->
    <div class="image">
    	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );  ?>
        <a href="<?php echo $image[0];?>" class="image-popup">
            <div class="gallery-image">
                <?php the_post_thumbnail();?>
            </div>
        </a>
    </div>
    <?php else: ?>
    	<?php 
		$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent=' .get_the_ID() );
  	  if (!empty($images)) {
        $image = reset($images);
        $img = wp_get_attachment_image( $image->ID, $size, false, $attr );
   		$image = wp_get_attachment_image_src( $image->ID, 'full' );
	?>
    	<div class="image">
    	
         <a href="<?php echo $image[0];?>" class="image-popup">
            <div class="gallery-image">
                <?php echo $img;?>
            </div>
        </a>
        </div>
       <?php  };?>
    <!-- /Post Image -->
     <?php endif;?>
     
     
     
     <?php
	 if ( 'post' === get_post_type() ) : ?>
         <!-- Post Metadata -->
            <ul class="list-inline meta">
                <?php edsbootstrap_posted_on(); ?>
                <?php edsbootstrap_entry_footer(); ?>
            </ul>
           <!-- /Post Metadata -->
		<?php
		endif; ?>
        
        
        <?php echo strip_shortcodes(trim_text(get_the_content(),200));?>
            <br />
<br />

           
            <!-- Read More Button -->
        <div>
             <a href="<?php echo esc_url( get_permalink()); ?>" class="btn btn-theme"><?php echo (cs_get_option( 'eds_read_more_btn' )!="")? cs_get_option( 'eds_read_more_btn' ) :__('Continue Reading', 'edsbootstrap');
			?> <i class="fa fa-fw fa-angle-double-right"></i></a>
        </div>
    <!-- /Read More Button --> 
            
            </article>
            
            <?php
		
		 echo '</div>';
		 if($page_layout == 'template/no-sidebar-page.php' && $i==3){
			 echo '<div class="clearfix"></div>';	
		 }
		endwhile;
	echo ' </div>';	
		echo ' </div>';	
		
    wp_reset_postdata();  
	endif;	wp_reset_query();
	
 
    echo $after_widget;
  }
 
}


// Register and load the widget
function hamzahshop_load_widget() {
	register_widget( 'RandomPostWidget');
	register_widget( 'eds_title_widgets');
	register_widget( 'portfolio_title_widgets');
	register_widget( 'edstestimonial_widgets');
	register_widget( 'edsteam_widgets');
        register_widget( 'edsrecent_widgets');
	register_widget( 'eds_block_posts');

}
add_action( 'widgets_init', 'hamzahshop_load_widget' );

