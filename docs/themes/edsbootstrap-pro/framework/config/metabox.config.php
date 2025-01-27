<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();



// -----------------------------------------
// Project Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_edsproject_gallery',
  'title'     => 'Project Gallery',
  'post_type' => 'edsproject',
  'context'   => 'side',
  'priority'  => 'low',
  'sections'  => array(

    array(
      'name'   => 'eds_project_gallery',
      'fields' => array(
			array(
			  'id'          => 'eds_project_gallery',
			  'type'        => 'gallery',
			  'title'       => '',
			),
      ),
    ),

  ),
);

// -----------------------------------------
// Project Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_edsproject_info',
  'title'     => 'Information',
  'post_type' => 'edsproject',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(
			array(
			  'id'    => '_edsproject_client',
			  'type'  => 'text',
			  'title' => 'Client',
			),
			array(
			  'id'    => '_edsproject_stated_date',
			  'type'  => 'text',
			  'title' => 'Stated Date',
			),
			array(
			  'id'    => '_edsproject_end_date',
			  'type'  => 'text',
			  'title' => 'End date',
			),
			array(
			  'id'    => '_edsproject_url',
			  'type'  => 'text',
			  'title' => 'Project Url',
			),
			array(
			  'id'    => '_edsproject_project_tag',
			  'type'  => 'textarea',
			  'title' => 'Project Tags',
			),
			
      ),
    ),

  ),
);

// -----------------------------------------
// Testimonial Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_eds_testimonial',
  'title'     => 'Profile',
  'post_type' => 'eds_testimonial',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'eds_testimonial',
      'fields' => array(
			
			array(
			  'id'    => '_eds_des',
			  'type'  => 'text',
			  'title' => 'job description',
			),
      ),
    ),

  ),
);

// -----------------------------------------
// Testimonial Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_eds_team',
  'title'     => 'Profile Information',
  'post_type' => 'eds_team',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'eds_team',
      'fields' => array(
			
			array(
			  'id'    => '_eds_job',
			  'type'  => 'text',
			  'title' => 'job description',
			),
			array(
			  'id'    => '_eds_facebook',
			  'type'  => 'text',
			  'title' => 'Facebook',
			),
			array(
			  'id'    => '_eds_twitter',
			  'type'  => 'text',
			  'title' => 'Twitter',
			),
			array(
			  'id'    => '_eds_google',
			  'type'  => 'text',
			  'title' => 'Google Plus',
			),
			array(
			  'id'    => '_eds_youtube',
			  'type'  => 'text',
			  'title' => 'Youtube',
			),
			array(
			  'id'    => '_eds_pinterest',
			  'type'  => 'text',
			  'title' => 'Pinterest',
			),
			
      ),
    ),

  ),
);


CSFramework_Metabox::instance( $options );
