<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------


$options[]     = array(
  'shortcodes' => array(
	  // begin: shortcode
    array(
      'name'          => 'skillwrapper',
      'title'         => 'Skill Shortcode',
      'view'          => 'clone',
      'clone_id'      => 'skill',
      'clone_title'   => 'Add New Skill',
      'fields'        => array(

       
		array(
		  'id'      => 'track_color',
		  'type'    => 'color_picker',
		  'title'   => 'Track Color',
		  'default' => '#dddddd',
		),
		array(
		  'id'      => 'chart_color',
		  'type'    => 'color_picker',
		  'title'   => 'Chart Color',
		  'default' => '#ff5555',
		),
		array(
		  'id'      => 'chart_size',
		  'type'    => 'number',
		  'title'   => 'Chart Size',
		  'default' => '150',
		  'after'   => ' <i class="cs-text-muted">PX</i>',
		),

      ),
      'clone_fields'  => array(

		array(
		  'id'      => 'percent',
		  'type'    => 'number',
		  'title'   => 'Percent',
		  'default' => '0',
		  'after'   => ' <i class="cs-text-muted">0% - 100%</i>',
		),
		array(
		  'id'      => 'title',
		  'type'    => 'text',
		  'title'   => 'Title',
		  'default' => 'Web Research',
		),
      )
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'edsproject',
      'title'     => 'Project & Portfolio Shortcode',
      'fields'    => array(
		array(
          'id'         => 'column',
          'type'       => 'select',
          'title'      => 'Portfolio Columns',
         'options' => array(
            '12'   => __('1 Column','edsbootstrap'),
            '6'   => __('2 Column','edsbootstrap'),
			'4'   => __('3 Column','edsbootstrap'),
			'3'   => __('4 Column','edsbootstrap'),
          ),
		  'default'        => '3',
        ),
        array(
		  'id'      => 'shownumber',
		  'type'    => 'number',
		  'title'   => 'Show number',
		  'default' => '6',
		),
         array(
          'id'         => 'orderby',
          'type'       => 'select',
          'title'      => 'Order by',
          'options'    => array(
            'title'      => 'Title',
            'name' => 'Name',
            'date'     => 'Date',
            'rand'  => 'Rand'
          )
        ),

 		array(
          'id'         => 'order',
          'type'       => 'select',
          'title'      => 'Order',
          'options'    => array(
            'DESC'      => 'DESC',
            'ASC' => 'ASC',
          )
        ),
		
		array(
          'id'         => 'categories_orderby',
          'type'       => 'select',
          'title'      => 'Categories order by',
          'options'    => array(
            'title'      => 'Title',
            'name' => 'Name',
            'date'     => 'Date',
            'rand'  => 'Rand'
          )
        ),

       

      ),
    ),
    // end: shortcode

   
   
    // begin: shortcode
    array(
      'name'      => 'edstestimonial',
      'title'     => 'Testimonial Shortcode',
      'fields'    => array(

        array(
		  'id'      => 'shownumber',
		  'type'    => 'number',
		  'title'   => 'Show number',
		  'default' => '6',
		),

         array(
          'id'         => 'orderby',
          'type'       => 'select',
          'title'      => 'Order by',
          'options'    => array(
            'title'      => 'Title',
            'name' => 'Name',
            'date'     => 'Date',
            'rand'  => 'Rand'
          )
        ),

 		array(
          'id'         => 'order',
          'type'       => 'select',
          'title'      => 'Order',
          'options'    => array(
            'DESC'      => 'DESC',
            'ASC' => 'ASC',
          )
        ),
		
		
		

      ),
    ),
    // end: shortcode


 // begin: shortcode
    array(
      'name'      => 'edsteam',
      'title'     => 'Team Shortcode',
      'fields'    => array(

        array(
		  'id'      => 'shownumber',
		  'type'    => 'number',
		  'title'   => 'Show number',
		  'default' => '6',
		),

         array(
          'id'         => 'orderby',
          'type'       => 'select',
          'title'      => 'Order by',
          'options'    => array(
            'title'      => 'Title',
            'name' => 'Name',
            'date'     => 'Date',
            'rand'  => 'Rand'
          )
        ),

 		array(
          'id'         => 'order',
          'type'       => 'select',
          'title'      => 'Order',
          'options'    => array(
            'DESC'      => 'DESC',
            'ASC' => 'ASC',
          )
        ),
		

      ),
    ),
    // end: shortcode
 


 // begin: shortcode
    array(
      'name'      => 'eds_grid_posts',
      'title'     => 'Grid Posts Shortcode',
      'fields'    => array(

    
         array(
          'id'         => 'colunm',
          'type'       => 'select',
           'title'     => __('Blog posts Column','edsbootstrap'),
          'options' => array(
            '12'   => __('1 Columns','edsbootstrap'),
            '6'   => __('2 Columns','edsbootstrap'),
			'4'   => __('3 Columns','edsbootstrap'),
          ),
		  'attributes' => array(
				'style'    => 'width:200px',
			),
			'desc'    => __('Select a posts Column Layout for the Blog posts. it will override this.','edsbootstrap'),
        ),

	array(
		  'id'      => 'posts_per_page',
		  'type'    => 'number',
		  'title'   => 'Posts Per Page',
		  'default' => '8',
		),
		 array(
          'id'         => 'orderby',
          'type'       => 'select',
          'title'      => 'Order by',
          'options'    => array(
            'title'      => 'Title',
            'name' => 'Name',
            'date'     => 'Date',
            'rand'  => 'Rand'
          )
        ),
 		array(
          'id'         => 'order',
          'type'       => 'select',
          'title'      => 'Order',
          'options'    => array(
            'DESC'      => 'DESC',
            'ASC' => 'ASC',
          )
        ),
		array(
          'id'         => 'pagination',
          'type'       => 'select',
          'title'      => 'Show pagination',
          'options'    => array(
            '1'      => 'yes',
            '0' => 'no',
          )
        ),
		array(
          'id'         => 'post_category',
          'type'       => 'select',
          'title'      => 'Select Category :',
          'options'    =>  ng_get_the_category()
        ),

      ),
    ),
    // end: shortcode
   


  ),
);


CSFramework_Shortcode_Manager::instance( $options );
