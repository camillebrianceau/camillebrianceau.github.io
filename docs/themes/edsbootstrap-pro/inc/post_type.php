<?php
add_action('init', 'edsbootstrap_post_type_html5'); // Add our HTML5 Blank Custom Post Type
function edsbootstrap_post_type_html5(){
	

//register_taxonomy( 'members-categories', 'members', array( 'hierarchical' => true, 'label' => __('Categories'),'query_var' => true, 'rewrite' => true ) ); 


if(cs_get_option('eds_portfolio') == true):
	$labels = array(
			'name' => __( 'Project & portfolio', 'edsbootstrap' ), // Tip: _x('') is used for localization
			'singular_name' => __( 'Project & portfolio', 'edsbootstrap' ),
			'add_new' => __( 'Add Project & portfolio', 'edsbootstrap' ),
			'add_new_item' => __( 'Add Project & portfolio Item' ,'edsbootstrap'),
			'edit_item' => __( 'Edit Project & portfolio'  ,'edsbootstrap'),
			'new_item' => __( 'Add New Project & portfolio'  ,'edsbootstrap'),
			'view_item' => __( 'View All'  ,'edsbootstrap'),
			'search_items' => __( 'Search Item'  ,'edsbootstrap'),
			'not_found' =>  __( 'No Latest Item' ,'edsbootstrap' ),
			'not_found_in_trash' => __( 'No Latest Project Found in trash' ,'edsbootstrap' ),
			'parent_item_colon' => ''
	
		);
	
		// Create an array for the $args
	
	$args = array( 'labels' => $labels, /* NOTICE: the $labels variable is used here... */
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'menu_position' => 22,
				'menu_icon' => 'dashicons-format-image',
				'supports' => array( 'title','editor','thumbnail' )
		); 
	register_post_type( 'edsproject', $args ); /* Register it and move on */
    register_taxonomy( 'edsproject-categories', 'edsproject', array( 'hierarchical' => true, 'label' => __('Project Categories', 'edsbootstrap'),'query_var' => true, 'rewrite' => true ) ); 
endif;

if(cs_get_option('eds_team') == true):
	$labels = array(
			'name' => __( 'Team', 'edsbootstrap' ), // Tip: _x('') is used for localization
			'singular_name' => __( 'Team', 'edsbootstrap' ),
			'add_new' => __( 'Add Members', 'edsbootstrap' ),
			'add_new_item' => __( 'Add Members Item' ,'edsbootstrap'),
			'edit_item' => __( 'Edit Members'  ,'edsbootstrap'),
			'new_item' => __( 'Add New Members'  ,'edsbootstrap'),
			'view_item' => __( 'View All'  ,'edsbootstrap'),
			'search_items' => __( 'Search Item'  ,'edsbootstrap'),
			'not_found' =>  __( 'No Latest Item' ,'edsbootstrap' ),
			'not_found_in_trash' => __( 'No Latest Team Members Found in trash' ,'edsbootstrap' ),
			'parent_item_colon' => ''
	
		);
	
		// Create an array for the $args
	
	$args = array( 'labels' => $labels, /* NOTICE: the $labels variable is used here... */
				'public' => false,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'menu_position' => 22,
				'menu_icon' => 'dashicons-businessman',
				'supports' => array( 'title','editor','thumbnail' )
		); 
	register_post_type( 'eds_team', $args ); /* Register it and move on */
endif;	
if(cs_get_option('eds_testimonial') == true):	
	$labels = array(
			'name' => __( 'Testimonial', 'edsbootstrap' ), // Tip: _x('') is used for localization
			'singular_name' => __( 'Testimonial', 'edsbootstrap' ),
			'add_new' => __( 'Add Testimonial', 'edsbootstrap' ),
			'add_new_item' => __( 'Add Testimonial Item' ,'edsbootstrap'),
			'edit_item' => __( 'Edit Testimonial'  ,'edsbootstrap'),
			'new_item' => __( 'Add New Testimonial'  ,'edsbootstrap'),
			'view_item' => __( 'View All'  ,'edsbootstrap'),
			'search_items' => __( 'Search Item'  ,'edsbootstrap'),
			'not_found' =>  __( 'No Latest Item' ,'edsbootstrap' ),
			'not_found_in_trash' => __( 'No Latest Testimonial Found in trash' ,'edsbootstrap' ),
			'parent_item_colon' => ''
	
		);
	
		// Create an array for the $args
	
	$args = array( 'labels' => $labels, /* NOTICE: the $labels variable is used here... */
				'public' => false,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'menu_position' => 22,
				'menu_icon' => 'dashicons-format-quote',
				'supports' => array( 'title','editor','thumbnail' )
		); 
	register_post_type( 'eds_testimonial', $args ); /* Register it and move on */
endif;
}

add_action('do_meta_boxes', 'replace_featured_image_box');  
function replace_featured_image_box()  
{  
	remove_meta_box( 'postimagediv', 'edsproject', 'side' );  
	add_meta_box('postimagediv', __('Project Default Image','edsbootstrap'), 'post_thumbnail_meta_box', 'edsproject', 'side', 'low'); 
	
	remove_meta_box( 'postimagediv', 'eds_testimonial', 'side' );  
	add_meta_box('postimagediv', __('Profile Picture','edsbootstrap'), 'post_thumbnail_meta_box', 'eds_testimonial', 'side', 'low'); 
	
	remove_meta_box( 'postimagediv', 'eds_team', 'side' );  
	add_meta_box('postimagediv', __('Profile Picture','edsbootstrap'), 'post_thumbnail_meta_box', 'eds_team', 'side', 'low');  
}  








