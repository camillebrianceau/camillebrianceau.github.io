<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => __('EDS Theme options','edsbootstrap'),
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'eds-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => true,
  'framework_title' => __('EDS BOOTSTRAP','edsbootstrap').'<small>1.0</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_general_settings',
  'title'     => __('General Settings','edsbootstrap'),
  'icon'        => 'fa fa-tachometer',
  'sections' => array(
// -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'eds_global',
      'title'     => __('Global','edsbootstrap'),
      'icon'      => 'fa fa-check',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => __('This tab contains common setting options which will be applied to the whole theme.','edsbootstrap'),
        ),
	 array(
          'id'        => 'eds_logo_header',
          'type'      => 'image',
          'title'     => __('Header Logo','edsbootstrap'),
          'desc'      => 'Upload your logo using the Upload Button or insert image URL',
        ),
     array(
          'id'        => 'eds_logo_footer',
          'type'      => 'image',
          'title'     => __('Footer Logo','edsbootstrap'),
          'desc'      => 'Upload your logo using the Upload Button or insert image URL',
        ),
	 array(
          'id'        => 'eds_favicon',
          'type'      => 'upload',
          'title'     => __('Favicon','edsbootstrap'),
          'desc'      => __('Upload a 16 x 16 px image that will represent your website\'s favicon. You can refer to this link for more information on how to make it: <a href="'.esc_url( __( 'http://www.favicon.cc/', 'edsbootstrap' )).'" target="_blank">http://www.favicon.cc/</a>.','edsbootstrap')
        ),
	 
   				
	 array(
      'id'       => 'eds_header_code',
      'type'     => 'textarea',
      'title'    => 'Header Code',
      'desc'      => 'Enter the code which you need to place <strong>before closing  tag</strong>. (ex: Google Webmaster Tools verification, Bing Webmaster Center, BuySellAds Script, Alexa verification etc.)',
      'sanitize' => false,
     ),
	 array(
      'id'       => 'eds_footer_code',
      'type'     => 'textarea',
      'title'    => 'Footer Code',
      'desc'      => 'Enter the codes which you need to place in your footer. <strong>(ex: Google Analytics, Clicky, STATCOUNTER, Woopra, Histats, etc.)</strong>.',
      'sanitize' => false,
    ),
	array(
      'id'       => 'eds_copyrights_text',
      'type'     => 'textarea',
      'title'    => 'Copyrights Text',
      'desc'      => 'You can change or remove our link from footer and use your own custom text. (Link back is always appreciated)',
      'sanitize' => false,
	  'default'  => 'Theme by <a href="'.esc_url( __( 'https://edatastyle.com/', 'edsbootstrap' )).'">eDataStyle</a>.'
    ),
	
	
	
	 // end: fields
	 
	),
	
  ),
   // -----------------------------
    // begin: textarea options     -
    // -----------------------------
    array(
      'name'      => 'top_socail',
      'title'     => __('Top Bar & Social ','edsbootstrap'),
      'icon'      => 'fa fa-check',
      'fields'    => array(
 	array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => __('This tab contains common setting options which will be applied to the whole theme.','edsbootstrap'),
        ),
       array(
          'id'      => 'eds_top_location',
          'type'    => 'text',
          'title'     => __('Top Bar Location','edsbootstrap'),
		  'default'  => '988782, Our Street, S State.'
        ),
  	 array(
          'id'      => 'eds_top_email',
          'type'    => 'text',
          'title'     => __('Top Bar Email','edsbootstrap'),
		  'default'  => 'info@domain.com',
      	  'validate' => 'email',
        ),
	array(
          'id'      => 'eds_top_phone',
          'type'    => 'text',
          'title'     => __('Top Bar Phone','edsbootstrap'),
		  'default'  => '+1 234 567 186'
        ),
	array(
		  'id'      => 'eds_top_bar_social_button',
		  'type'    => 'switcher',
		  'title'     => __('Top Bar Social Button','edsbootstrap'),
		  'default' => true,
		),
	array(
		  'id'      => 'eds_footer_social_button',
		  'type'    => 'switcher',
		  'title'     => __('Footer Social Button','edsbootstrap'),
		  'default' => true,
		),
	array(
          'id'      => 'eds_fa-facebook',
          'type'    => 'text',
          'title'     => __('Facebook','edsbootstrap'),
        ),
	array(
	  'id'      => 'eds_fa-twitter',
	  'type'    => 'text',
	  'title'     => __('Twitter','edsbootstrap'),
	),
	array(
	  'id'      => 'eds_fa-google-plus',
	  'type'    => 'text',
	  'title'     => __('Google Plus','edsbootstrap'),
	),	
	array(
	  'id'      => 'eds_fa-pinterest',
	  'type'    => 'text',
	  'title'     => __('Pinterest','edsbootstrap'),
	),	
	array(
	  'id'      => 'eds_fa-linkedin',
	  'type'    => 'text',
	  'title'     => __('linkedin','edsbootstrap'),
	),	
	array(
	  'id'      => 'eds_fa-youtube',
	  'type'    => 'text',
	  'title'     => __('youtube','edsbootstrap'),
	),	
	array(
	  'id'      => 'eds_fa-instagram',
	  'type'    => 'text',
	  'title'     => __('instagram','edsbootstrap'),
	),	
	array(
	  'id'      => 'eds_fa-reddit',
	  'type'    => 'text',
	  'title'     => __('reddit','edsbootstrap'),
	),
	array(
	  'id'      => 'eds_fa-vimeo',
	  'type'    => 'text',
	  'title'     => __('vimeo','edsbootstrap'),
	),



      ),

    ), // end: textarea options
  
  ),
);

// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_module',
  'title'     => __('Extensions or Module','edsbootstrap'),
  'icon'        => 'fa fa-cogs',

  // begin: fields
  'fields'      => array(
	// begin: a field
	  array(
          'id'      => 'eds_breadcrumbs',
          'type'    => 'switcher',
          'title'     => __('Breadcrumbs','edsbootstrap'),
          'default' => true,
		  'desc'      => 'Breadcrumbs are a great way to make your site more user-friendly. You can enable them by checking this box.'
        ),
		 array(
          'id'      => 'eds_top_bar',
          'type'    => 'switcher',
          'title'     => __('Top Bar','edsbootstrap'),
          'default' => true,
        ),	
	  array(
          'id'      => 'eds_team',
          'type'    => 'switcher',
          'title'     => __('Team Module','edsbootstrap'),
          'default' => true,
        ),
			
	  array(
          'id'      => 'eds_portfolio',
          'type'    => 'switcher',
          'title'     => __('Portfolio Module','edsbootstrap'),
          'default' => true,
        ),	
	 array(
          'id'      => 'eds_testimonial',
          'type'    => 'switcher',
          'title'     => __('Testimonial  Module','edsbootstrap'),
          'default' => true,
        ),			
	 
	 // end: fields
  ),
);

// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_styling_options',
  'title'     => __('Styling Options','edsbootstrap'),
  'icon'        => 'fa fa-object-group',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => 'Control the visual appearance of your theme, such as colors, layout and patterns, from here.',
        ),
	 array(
          'id'      => 'eds_primary_color',
          'type'    => 'color_picker',
          'title'     => __('Primary Color Scheme','edsbootstrap'),
          'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','edsbootstrap'),
		  'default' => '#ff5555',
        ),
	array(
	  'id'      => 'eds_secondary_color',
	  'type'    => 'color_picker',
	  'title'     => __('Secondary Color Scheme ','edsbootstrap'),
	  'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','edsbootstrap'),
	  'default' => '#777',
	),
	array(
	  'id'      => 'eds_title_color',
	  'type'    => 'color_picker',
	  'title'     => __('Title Color Scheme ','edsbootstrap'),
	  'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.(H1,H2,H3,H4,H5,H6)','edsbootstrap'),
	  'default' => '#777',
	),
	
  	 array(
          'id'             => 'eds_nav_style',
          'type'           => 'select',
          'title'          => __('Navigation Style','edsbootstrap'),
          'options'        => array(
		 	'Default'        =>'Default',
            'navbar-fill'        =>'Fill',
            'navbar-underline'   =>'Underline',
          ),
        ),
		
	 array(
          'id'           => 'eds_page_layout',
          'type'         => 'image_select',
          'title'        =>  __('Page Layout Style','edsbootstrap'),
          'options'      => array(
			'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
			'left-sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
			'right-sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
			'both'    => get_template_directory_uri().'/assets/layout/both.png',
          ),
          'default'      => 'fullscreen',
		  'desc'    => 'Choose the <strong>default fullscreen</strong> for your site. The position of the sidebar for individual Page can be set in the Page editor.',
        ),
		 array(
          'id'    => 'eds_page_background',
          'type'  => 'background',
          'title' => __('Background Color or Image','edsbootstrap'),
          'desc'  => 'Pick a color for the site background color. or Upload your own custom background image or pattern.',
         
        ),
		 array(
		  'id'       => 'eds_custom_css',
		  'type'     => 'textarea',
		  'title'    => __('Custom CSS','edsbootstrap'),
		  'desc'      => 'You can enter custom CSS code here to further customize your theme. This will override the default CSS used on your site.',
		  'sanitize' => false,
		),

	 // end: fields
  ),
);


// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_homepage_options',
  'title'     => __('Homepage & Slider','edsbootstrap'),
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => 'From here, you can control the elements of the homepage( Static Front Page ).',
        ),
	array(
          'id'           => 'eds_static_page_layout',
          'type'         => 'image_select',
          'title'        => __('Static Front Page Layout','edsbootstrap'),
          'options'      => array(
			'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
			'left-sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
			'right-sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
			'both'    => get_template_directory_uri().'/assets/layout/both.png',
			
          ),
          'default'      => 'fullscreen',
		  'desc'    => 'Choose the <strong>default fullscreen</strong> for your site. The position of the sidebar for individual Page can be set in the Page editor.',
        ),	
	array(
          'id'             => 'eds_home_page_landing_type',
          'type'           => 'select',
          'title'          => __('Home Page landing Type','edsbootstrap'),
          'options'        => array(
            'slider'        =>'Slider',
            'video'          =>'Video',
			'image'          =>'Image',
            'none'          =>'None',
          ),
        ),	
	 
	 array(
          'id'              => 'eds_slider',
          'type'            => 'group',
          'title'           => __('Home Page Slider','edsbootstrap'),
          'button_title'    => __('Add New Slider','edsbootstrap'),
          'accordion_title' => __('Slider','edsbootstrap'),
		  'desc'      => __(' Upload your own custom background Image, Captions, Read more','edsbootstrap'),
		   'dependency'   => array( 'eds_home_page_landing_type', '==', 'slider' ),
          'fields'          => array(

				array(
				'id'        => 'slide_img',
				'type'      => 'image',
				'title'     => __('Image','edsbootstrap'),
				'desc'      => 'Upload your own custom background Image',
				),
				array(
				  'id'    => 'slide_title',
				  'type'  => 'text',
				  'title' => __('Title','edsbootstrap'),
				),
				array(
				  'id'    => 'slide_captions',
				  'type'  => 'textarea',
				  'title' => __('Captions Text','edsbootstrap'),
				),
				array(
				  'id'    => 'slide_button',
				  'type'  => 'text',
				  'title' => __('Button Text','edsbootstrap'),
				  'default' => __('Read More','edsbootstrap'),
				),
				array(
				  'id'    => 'slide_url',
				  'type'  => 'text',
				  'title' => __('Button URL','edsbootstrap'),
				  
				),
				array(
				  'id'             => 'slide_captions_position',
				  'type'           => 'select',
				  'title'          => __('Captions position','edsbootstrap'),
				  'options'        => array(
					'left'        =>'left',
					'right'       =>'right',
					'center'        =>'center',
				  ),
				),	
          ),
		
		  
        ),
		
	
		array(
          'id'             => 'eds_landing_video',
          'type'           => 'upload',
          'title'          => __('Upload Field with Video','edsbootstrap'),
          'settings'       => array(
            'upload_type'  => 'video',
            'button_title' => __('Upload Video','edsbootstrap'),
            'frame_title'  => __('Choose a Video','edsbootstrap'),
            'insert_title' => __('Use This Video','edsbootstrap'),
          ),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		  'desc'      => __(' Upload Only MP4 Video','edsbootstrap'),
        ),
		array(
			'id'        => 'eds_landing_poster',
			'type'      => 'image',
			'title'     => __('Video poster','edsbootstrap'),
			'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		),
		
		array(
		  'id'    => 'eds_landing_title',
		  'type'  => 'text',
		  'title' => __('Video Title','edsbootstrap'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		),
		array(
		  'id'    => 'eds_landing_captions',
		  'type'  => 'textarea',
		  'title' => __('Video Captions Text','edsbootstrap'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		),
		array(
		  'id'    => 'eds_landing_button',
		  'type'  => 'text',
		  'title' => __('Video Button Text','edsbootstrap'),
		  'default' => 'Read More',
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		),
		array(
		  'id'    => 'eds_landing_url',
		  'type'  => 'text',
		  'title' => __('Video Button URL','edsbootstrap'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		),
		array(
		  'id'             => 'eds_landing_position',
		  'type'           => 'select',
		  'title'          => __('Video Captions position','edsbootstrap'),
		  'options'        => array(
			'left'        =>'left',
			'right'       =>'right',
			'center'     =>'center',
		  ),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		),	

	 // end: fields
	 
		array(
			'id'        => 'eds_home_image',
			'type'      => 'image',
			'title'     => __('Choose A Backgorund Image','edsbootstrap'),
			'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		
		array(
		  'id'    => 'eds_home_title',
		  'type'  => 'text',
		  'title' => __('Image Title','edsbootstrap'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
		  'id'    => 'eds_home_captions',
		  'type'  => 'textarea',
		  'title' => __('Image Captions Text','edsbootstrap'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
		  'id'    => 'eds_home_button',
		  'type'  => 'text',
		  'title' => __('Image Button Text','edsbootstrap'),
		  'default' => 'Read More',
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
		  'id'    => 'eds_home_url',
		  'type'  => 'text',
		  'title' => __('Image Button URL','edsbootstrap'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
		  'id'             => 'eds_home_position',
		  'type'           => 'select',
		  'title'          => __('Image Captions position','edsbootstrap'),
		  'options'        => array(
			'left'        =>'left',
			'right'       =>'right',
			'center'     =>'center',
		  ),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),	

	 // end: fields
	 
	 
  ),
);


// ------------------------------
// backup                       -
// ------------------------------
$options[]      = array(
  'name'        => 'eds_blog_options',
  'title'     => __('Blog Options','edsbootstrap'),
  'icon'        => 'fa fa-cubes',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => __('From here, you can control the appearance and functionality of your posts page.','edsbootstrap'),
        ),
	
	
	 
	
	 array(
          'id'           => 'eds_blog_layout',
          'type'         => 'image_select',
          'title'        => __('Blog Layout Style','edsbootstrap'),
          'options'      => array(
            'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
			'left-sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
			'right-sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
			'both'    => get_template_directory_uri().'/assets/layout/both.png',
          ),
          'default'      => 'right-sidebar',
		  'desc'    => 'Choose the <strong>default Right sidebar position</strong> for your site. The position of the sidebar for individual posts can be set in the post editor.',
        ),
		
		array(
		'id'    => 'eds_blog_list_title',
		'type'  => 'text',
		'title' => __('Blog default Title','edsbootstrap'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Blog - Posts List ','edsbootstrap'),
		'desc'    =>__('Blog List Default Title Text ','edsbootstrap'),
		),
		array(
		'id'    => 'eds_blog_list_sub_title',
		'type'  => 'text',
		'title' => __('Blog default Sub Title','edsbootstrap'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Blog - Posts List Default Sub Title ','edsbootstrap'),
		'desc'    =>__('Blog List Default Sub Title Text ','edsbootstrap'),
		),
		
		 array(
          'id'      => 'eds_post_layout',
          'type'    => 'select',
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
          'id'      => 'eds_show_post',
          'type'    => 'select',
          'title'     => __('Blog Post Show','edsbootstrap'),
          'options' => array(
            'excerpt'   => __('excerpt','edsbootstrap'),
            'content'   => __('content','edsbootstrap'),
          ),
		  'attributes' => array(
				'style'    => 'width:200px',
			),
		  'default' => 'excerpt',
        ),
		
		
		array(
		'id'    => 'eds_read_more_btn',
		'type'  => 'text',
		'title' => __('Read More Button Text','edsbootstrap'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Continue Reading ','edsbootstrap'),
		),
		array(
          'id'       => 'eds_meta',
          'type'     => 'checkbox',
          'title'    => __('Meta Info to Show','edsbootstrap'),
          'options'  => array(
            'auth'   => __('Author Name','edsbootstrap'),
            'date'  => __('Date','edsbootstrap'),
            'cat' => __('Categories','edsbootstrap'),
			'comment' => __('Comment Count','edsbootstrap'),
          ),
		  'default'    => array( 'auth', 'date', 'cat', 'comment' ),
		  'desc'    => __('Choose What Meta Info to Show.','edsbootstrap'),
        ),
		
		
		 array(
          'id'      => 'eds_tag',
          'type'    => 'switcher',
          'title'     => __('Tag Links','edsbootstrap'),
          'default' => true,
		  'desc'    => __('Use this button if you want to show a tag cloud below the related posts.','edsbootstrap'),
        ),
		
		 array(
          'id'      => 'eds_related_posts',
          'type'    => 'switcher',
          'title'     => __('Related Posts','edsbootstrap'),
          'default' => true,
		  'desc'    => __('Use this button to show related posts with thumbnails below the content area in a post.','edsbootstrap'),
        ),
		array(
		'id'    => 'eds_related_posts_title',
		'type'  => 'text',
		'title' => __('Related posts default Title','edsbootstrap'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Related posts','edsbootstrap'),
		'desc'    =>__('Blog Single Post Default Title ','edsbootstrap'),
		),
		 array(
          'id'      => 'eds_related_num',
          'type'    => 'number',
          'title'     => __('Number of related posts','edsbootstrap'),
          'default' => '3',
		  'desc'    => __('Enter the number of posts to show in the related posts section.','edsbootstrap'),
        ),
		/* array(
          'id'      => 'eds_related_column',
          'type'    => 'select',
          'title'     => __('Related posts Column','edsbootstrap'),
          'options' => array(
            '6'   => __('2 Columns','edsbootstrap'),
			'4'   => __('3 Columns','edsbootstrap'),
			'3'   => __('4 Columns','edsbootstrap'),
          ),
		  'default' => '4',
		  'attributes' => array(
				'style'    => 'width:200px',
			),
			'desc'    => __('Select a Related posts Column Layout for the Blog posts. it will override this.','edsbootstrap'),
        ),*/
		array(
          'id'      => 'eds_author_bio',
          'type'    => 'switcher',
          'title'     => __('Author Box','edsbootstrap'),
          'default' => true,
		  'desc'    => __('Use this button if you want to display author information below the article.','edsbootstrap'),
        ),
		
		

	 // end: fields
  ),
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'eds_Portfolio',
  'title'    => 'Portfolio  page',
  'icon'     => 'fa fa-folder',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'success',
       'content' => __('From here, you can control the appearance and functionality of your Portfolio  page.','edsbootstrap'),
    ),

   	array(
          'id'      => 'eds_portfolio_column',
          'type'    => 'select',
          'title'     => __('Default Portfolio Columns','edsbootstrap'),
          'options' => array(
            '12'   => __('1 Columns','edsbootstrap'),
            '6'   => __('2 Columns','edsbootstrap'),
			'4'   => __('3 Columns','edsbootstrap'),
			'3'   => __('4 Columns','edsbootstrap'),
          ),
		  'default'        => '3',
		  'desc'    => __('Enter the number of Column to show in Portfolio.','edsbootstrap'),
        ),
		
		
	   array(
          'id'      => 'eds_portfolio_number',
          'type'    => 'number',
          'title'     => __('Default Portfolio Number Show','edsbootstrap'),
          'default' => '6',
		  'desc'    => __('Enter the number of posts to show in the Portfolio section.','edsbootstrap'),
        ),
 	
		array(
		  'id'    => 'eds_portfolio_description',
		  'type'  => 'text',
		  'title' => __('Default Project Description Text','edsbootstrap'),
		  'default' =>__('Project Description','edsbootstrap'),
		),
		array(
		  'id'    => 'eds_portfolio_details',
		  'type'  => 'text',
		  'title' => __('Default Project Details Text','edsbootstrap'),
		  'default' =>__('Project Details','edsbootstrap'),
		),
		array(
		  'id'    => 'eds_portfolio_client',
		  'type'  => 'text',
		  'title' => __('Default Client Text','edsbootstrap'),
		  'default' =>__('Client','edsbootstrap'),
		),
		array(
		  'id'    => 'eds_portfolio_start',
		  'type'  => 'text',
		  'title' => __('Default Start Date Text','edsbootstrap'),
		  'default' =>__('Start Date','edsbootstrap'),
		),
		array(
		  'id'    => 'eds_portfolio_end',
		  'type'  => 'text',
		  'title' => __('Default End Date Text','edsbootstrap'),
		  'default' =>__('End Date','edsbootstrap'),
		),
		array(
		  'id'    => 'eds_portfolio_web',
		  'type'  => 'text',
		  'title' => __('Default Web Site Text','edsbootstrap'),
		  'default' =>__('Web Site','edsbootstrap'),
		),
		array(
		  'id'    => 'eds_portfolio_tag',
		  'type'  => 'text',
		  'title' => __('Default Tag Text','edsbootstrap'),
		  'default' =>__('Tag','edsbootstrap'),
		),
		
		
		array(
		  'id'      => 'eds_portfolio_social',
		  'type'    => 'switcher',
		  'title'     => __('Show Social Media','edsbootstrap'),
		  'default' => true,
		),


  )
);


// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'eds_posts_social',
  'title'    => 'Posts Social Buttons',
  'icon'     => 'fa fa-users',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' => __('Enable or disable social sharing buttons on single posts using these buttons.','edsbootstrap'),
    ),

    array(
          'id'      => 'eds_social_media',
          'type'    => 'switcher',
          'title'     => __('Social Media Buttons','edsbootstrap'),
          'default' => true,
		  'desc'    => __('Check this box to show social sharing buttons after an article\'s content text.','edsbootstrap')
        ),
 	 
		array(
		  'id'      => 'eds_social_tw',
		  'type'    => 'switcher',
		  'title'     => __('Twitter','edsbootstrap'),
		  'default' => true,
		),
		array(
		  'id'      => 'eds_social_gooplus',
		  'type'    => 'switcher',
		  'title'     => __('Google Plus','edsbootstrap'),
		  'default' => true,
		),
		array(
		  'id'      => 'eds_social_fb',
		  'type'    => 'switcher',
		  'title'     => __('Facebook Like','edsbootstrap'),
		  'default' => true,
		),
		
		array(
		  'id'      => 'eds_social_su',
		  'type'    => 'switcher',
		  'title'     => __('StumbleUpon','edsbootstrap'),
		  'default' => true,
		),
		array(
		  'id'      => 'eds_social_pin',
		  'type'    => 'switcher',
		  'title'     => __('Pinterest','edsbootstrap'),
		  'default' => true,
		),
		array(
		  'id'      => 'eds_social_reddit',
		  'type'    => 'switcher',
		  'title'     => __('Reddit','edsbootstrap'),
		  'default' => true,
		),


  )
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'eds_typography',
  'title'    => 'Typography',
  'icon'     => 'fa fa-font',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' => __('From here, you can control the fonts used on your site. You can choose from 17 standard font sets, or from the Google Fonts Library containing 600+ fonts.','edsbootstrap'),
    ),
	 array(
          'id'        => 'eds_nav_font',
          'type'      => 'typography',
          'title'     => __('Navigation Font','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '13',
          ),
          'chosen'    => false,
        ),

 		array(
          'id'        => 'eds_article_title_font',
          'type'      => 'typography',
          'title'     => __('Article Title','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '25',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_article_font',
          'type'      => 'typography',
          'title'     => __('Content/Article Font','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '13',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_widgets_title_font',
          'type'      => 'typography',
          'title'     => __('Sidebar/Widget Title','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '20',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_widgets_fonts',
          'type'      => 'typography',
          'title'     => __('Sidebar/Widget Font','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_content_h1',
          'type'      => 'typography',
          'title'     => __('Content H1','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '30',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_content_h2',
          'type'      => 'typography',
          'title'     => __('Content H2','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '28',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_content_h3',
          'type'      => 'typography',
          'title'     => __('Content H3','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '22',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_content_h4',
          'type'      => 'typography',
          'title'     => __('Content H4','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '20',
          ),
          'chosen'    => false,
        ),

	 array(
          'id'        => 'eds_content_h5',
          'type'      => 'typography',
          'title'     => __('Content H5','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '18',
          ),
          'chosen'    => false,
        ),

	array(
          'id'        => 'eds_content_h6',
          'type'      => 'typography',
          'title'     => __('Content H6','edsbootstrap'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '16',
          ),
          'chosen'    => false,
        ),

   
  )
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'eds_ad_mangement',
  'title'    => 'Ad Management',
  'icon'     => 'fa fa-bar-chart-o',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' => __('You can save your current options. Download a Backup and Import.','edsbootstrap'),
    ),
	array(
      'id'       => 'eds_ad_top',
      'type'     => 'textarea',
      'title'    => __('Below Post Title','edsbootstrap'),
      'desc'      => __('Paste your Adsense, BSA or other ad code here to show ads below your article title on single posts.','edsbootstrap'),
      'sanitize' => false,
    ),
	array(
      'id'       => 'eds_ad_bottom',
      'type'     => 'textarea',
      'title'    => __('Below Post Content','edsbootstrap'),
      'desc'      => __('Paste your Adsense, BSA or other ad code here to show ads below the post content on single posts.','edsbootstrap'),
      'sanitize' => false,
    ),
  
  )
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => __('You can save your current options. Download a Backup and Import.','edsbootstrap'),
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

CSFramework::instance( $settings, $options );
