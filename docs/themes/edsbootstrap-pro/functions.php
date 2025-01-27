<?php
/**
 * edsBootstrap functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package edsBootstrap
 */

if ( ! function_exists( 'edsbootstrap_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function edsbootstrap_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on edsBootstrap, use a find and replace
	 * to change 'edsbootstrap' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'edsbootstrap', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'edsbootstrap' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'audio',
		'gallery',
		'video',
	) );
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'edsbootstrap_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	add_theme_support( 'custom-logo', array(
		'header-text' => array( 'site-title', 'site-description' ),
	) );
}
endif;
add_action( 'after_setup_theme', 'edsbootstrap_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function edsbootstrap_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'edsbootstrap_content_width', 900 );
}
add_action( 'after_setup_theme', 'edsbootstrap_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function edsbootstrap_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'edsbootstrap' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'edsbootstrap' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'edsbootstrap' ),
		'id'            => 'sidebar-left',
		'description'   => esc_html__( 'Add widgets here.', 'edsbootstrap' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'edsbootstrap' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'edsbootstrap' ),
		'before_widget' => '<div id="%1$s" class="col-md-3 col-xs-6 footer-col %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	
}
add_action( 'widgets_init', 'edsbootstrap_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function edsbootstrap_scripts() {
	wp_enqueue_style( 'edsbootstrap-raleway-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,300,600,500');
	wp_enqueue_style( 'edsbootstrap-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'edsbootstrap-bootstrap-theme', get_template_directory_uri().'/assets/css/bootstrap-theme.css');
	wp_enqueue_style( 'edsbootstrap-font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'edsbootstrap-owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css');
	wp_enqueue_style( 'edsbootstrap-owl-theme', get_template_directory_uri().'/assets/css/owl.theme.css');
	wp_enqueue_style( 'edsbootstrap-owl-transitions', get_template_directory_uri().'/assets/css/owl.transitions.css');
  	wp_enqueue_style( 'edsbootstrap-magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_enqueue_style( 'edsbootstrap-elegant-icons', get_template_directory_uri().'/assets/css/elegant-icons.css');
	wp_enqueue_style( 'edsbootstrap-animate', get_template_directory_uri().'/assets/css/animate.css');
	wp_enqueue_style( 'edsbootstrap-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'edsbootstrap-dynamic_css', get_template_directory_uri().'/assets/dynamic_css.php');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('edsbootstrap-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',0,0,true);
	wp_enqueue_script('edsbootstrap-owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.js',0,0,true);
	wp_enqueue_script('edsbootstrap-jquery-stellar', get_template_directory_uri().'/assets/js/jquery.stellar.js',0,0,true);
	wp_enqueue_script('edsbootstrap-magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.js',0,0,true);
	wp_enqueue_script('edsbootstrap-animateNumber', get_template_directory_uri().'/assets/js/jquery.animateNumber.js',0,0,true);
	
	
	wp_enqueue_script('edsbootstrap-general', get_template_directory_uri().'/assets/js/general.js',0,0,true);
	
	
	
	//wp_enqueue_script( 'edsbootstrap-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'edsbootstrap-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'edsbootstrap_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Calling in the admin area for the Welcome Page */
if ( is_admin() ) {
	require get_template_directory() . '/inc/wp-admin/edsbootstrap-admin-page.php';
}

/**
 * Load wp_bootstrap_navwalker file.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';


/**
 * Load Custom Comment Layout ity file.
 */
require get_template_directory() . '/inc/comment-helper.php';



/** Include the TGM Plugin Activation class **/
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Registers an editor stylesheet for the theme.
 */
function eds_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'eds_theme_add_editor_styles' );



if( ! function_exists( 'edsbootstrap_spirit' ) ) {
	function edsbootstrap_spirit( $text ){
		$text = trim($text);
		$array = explode( ' ' , $text );
		$counter = count( $array );
		if($counter > 1){
		$last_word = array_pop( $array );
		unset( $array[ $counter ] );
		return implode(' ', $array) . ' <span class="text-theme">'. $last_word. '</span>';
		}else{
			return $text;
		}
	}
}


if( ! function_exists( 'edsbootstrap_remove_thumbnail_dimensions' ) ) {
	function edsbootstrap_remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
		return $html;
	}
	add_filter( 'post_thumbnail_html', 'edsbootstrap_remove_thumbnail_dimensions', 10, 3 );
}


if( ! function_exists( 'edsbootstrap_oembed' ) ) {
	function edsbootstrap_oembed() {
		//global $post;
		if ( preg_match('~(?:https?://)?(?:www.)?(?:youtube.com|youtu.be)/(?:watch\?v=)?([^\s]+)~', get_the_content(), $match) ){
			$video = $match[0];
		} else if ( preg_match('~(?:https?://)?(?:www.)?(?:vimeo.com|player.vimeo.com)/?([^\s]+)~', get_the_content(), $match) ){
			$video = $match[0];
		}else if ( preg_match('~(?:https?://)?(?:www.)?(?:dailymotion.com|dai.ly)/(?:video)?([^\s]+)~', get_the_content(), $match) ){
			$video = $match[0];
		}else if ( preg_match('~(?:https?://)?(?:www.)?(?:soundcloud.com|w.soundcloud.com)/(?:video)?([^\s]+)~', get_the_content(), $match) ){
			$video = $match[0];
		}
		
		if( isset( $video ) && $video !="" ){
			echo '<div class="image">'. wp_oembed_get( $video ) .'</div>';
		}else{
			return false;	
		}
		
	}
	add_action( 'edsbootstrap_oembed','edsbootstrap_oembed');
}



if ( ! function_exists( 'edsbootstrap_filter_the_content_in_the_main_loop' ) ){
	add_filter( 'the_content', 'edsbootstrap_filter_the_content_in_the_main_loop' );
	 
	function edsbootstrap_filter_the_content_in_the_main_loop( $content ) {
		global $post;
		
		// Check if we're inside the main loop in a single post page.
		if ( is_single() && in_the_loop() && is_main_query() || $post->post_type == 'post') {
			
			if ( preg_match('~(?:https?://)?(?:www.)?(?:youtube.com|youtu.be)/(?:watch\?v=)?([^\s]+)~', get_the_content(), $match) ){
				$content = preg_replace( '/<\iframe[^>]*src\s*=\s*"?https?:\/\/[^\s"\/]*youtube.com(?:\/[^\s"]*)?"?[^>]*>.*?<\/iframe>/is', '', $content );
			} else if ( preg_match('~(?:https?://)?(?:www.)?(?:vimeo.com|player.vimeo.com)/?([^\s]+)~', get_the_content(), $match) ){
				$content = preg_replace( '/<\iframe[^>]*src\s*=\s*"?https?:\/\/[^\s"\/]*player.vimeo.com(?:\/[^\s"]*)?"?[^>]*>.*?<\/iframe>/is', '', $content );
			}else if ( preg_match('~(?:https?://)?(?:www.)?(?:dailymotion.com|dai.ly)/(?:video)?([^\s]+)~', get_the_content(), $match) ){
				$content = preg_replace( '/<\iframe[^>]*src\s*=\s*"?https?:\/\/[^\s"\/]*dailymotion.com(?:\/[^\s"]*)?"?[^>]*>.*?<\/iframe>/is', '', $content );
			}else if ( preg_match('~(?:https?://)?(?:www.)?(?:soundcloud.com|w.soundcloud.com)/(?:video)?([^\s]+)~', get_the_content(), $match) ){
				$content = preg_replace( '/<\iframe[^>]*src\s*=\s*"?https?:\/\/[^\s"\/]*soundcloud.com(?:\/[^\s"]*)?"?[^>]*>.*?<\/iframe>/is', '', $content );
			
			}
			
		}
		return $content;
	}
}



add_action( 'tgmpa_register', 'edsbootstrap_register_required_plugins' );

/**
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function edsbootstrap_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'      => 'Page Builder by SiteOrigin',
			'slug'      => 'siteorigin-panels',
			'required'  => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Subtitles',
			'slug'      => 'subtitles',
			'required'  => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'SiteOrigin Widgets Bundle',
			'slug'      => 'so-widgets-bundle',
			'required'  => false,
		),
		
		
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Bootstrap Shortcodes',
			'slug'      => 'bootstrap-3-shortcodes',
			'required'  => false,
		),
		
		
		
		
		
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'edsbootstrap',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}

/**
 * Load wp_bootstrap_navwalker file.
 */
require get_template_directory() . '/framework/cs-framework.php';




/*$menu_exists = wp_get_nav_menu_object(2);
$menu_locations = get_nav_menu_locations();
$menu_locations['primary'];*/


/**
 * Load One page Function file.
 */
require get_template_directory() . '/inc/onepage.php';


/**
 * Load Widgets Function file.
 */
require get_template_directory() . '/plugins/widgets.php';


/**
 * Load Skill File.
 */
require get_template_directory() . '/plugins/skt-skill-bar/sktskillbar.php';

/**
 * Load One page Function file.
 */
require get_template_directory() . '/inc/post_type.php';


add_post_type_support( 'edsproject', 'subtitles' );
add_post_type_support( 'edsproject', 'wps_subtitle' );



/**
 * Load Skill File.
 */
require get_template_directory() . '/plugins/shortcode.php';







/*-----------------------------------------------------------------------------------*/
/*	Post Thumbnail Support
/*-----------------------------------------------------------------------------------*/
if ( function_exists( 'add_theme_support' ) ) { 
add_image_size( 'project-size', 353, 247,true );
add_image_size( 'project', 751, 350,true );
add_image_size( 'related', 251, 139,true );
}
function subtitles_mod_supported_views() {
   return false; 
} // end function subtitles_mod_supported_views
add_filter( 'subtitle_view_supported', 'subtitles_mod_supported_views' );


add_action("template_redirect", 'my_template_redirect');
function my_template_redirect()
{
	global $wp_query, $post, $posts;
	
	if (isset($wp_query->query_vars['edsproject']) && $wp_query->query_vars['edsproject']!="")
	{
		// Let's look for the property.php template file in the current theme
		include(TEMPLATEPATH . '/edsproject-single.php');
		die();
	}
}


add_filter('widget_title','eds_widget_title'); 
function eds_widget_title($t)
{
	$t=( function_exists('edsbootstrap_spirit') && !empty($t) ) ? edsbootstrap_spirit( $t ) :$t;
    return $t;
}



if (!function_exists('eds_social_buttons')) {
    function eds_social_buttons() {
        global $post;
		
        if ( cs_get_option('eds_social_media') == true ) { ?>
    		<!-- Start Share Buttons -->
    		<div class="shareit header-social single-social  <?php echo cs_get_option('eds_share_btn_pos'); ?>">
                <ul class="rrssb-buttons clearfix">
                    <?php if(cs_get_option('eds_social_fb') == true) { ?>
                        <li class="facebook">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="popup">
                                <span class="icon"><i class="fa fa-facebook"></i></span>
                                <span class="text">Facebook</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(cs_get_option('eds_social_gooplus') == true) { ?>
                        <li class="googleplus">
                            <a target="_blank" href="//plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="popup">
                                <span class="icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(cs_get_option('eds_social_tw') == true) { ?>
                        <li class="twitter">
                            <a target="_blank" href="https://twitter.com/share?url=<?php the_permalink() ?>&amp;text=<?php the_title() ?>" class="popup">
                                <span class="icon"><i class="fa fa-twitter"></i></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(cs_get_option('eds_social_reddit') == true) { ?>
                        <li class="reddit">
                            <a target="_blank" href="http://www.reddit.com/submit?url=<?php the_permalink() ?>">
                                <span class="icon"><i class="fa fa-reddit"></i></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(cs_get_option('eds_social_pin') == true) { ?>
                        <li class="pinterest">
                            <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&amp;media=<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' ); echo $thumb[0];  ?>&amp;description=<?php the_title() ?>">
                                <span class="icon"><i class="fa fa-pinterest"></i></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(cs_get_option('eds_social_su') == true) { ?>
                        <li class="stumbleupon">
                            <a target="_blank" href="https://www.stumbleupon.com/submit?url=<?php the_permalink() ?>">
                                <span class="icon"><i class="fa fa-stumbleupon"></i></span>
                            </a>
                        </li>
                    <?php } ?>
                    
                </ul>
            </div>
    		<!-- end Share Buttons -->
    	<?php }
    }
}




/**
 * Load Skill File.
 */
require get_template_directory() . '/plugins/breadcrumbs.php';


/**
 * Load Adding Social Media Information to the User Profile.
 */

function add_to_author_profile( $contactmethods ) {
       
        $contactmethods['rss_url'] = __('RSS URL', 'edsbootstrap');
        $contactmethods['google_profile'] = __('Google Profile URL', 'edsbootstrap');
        $contactmethods['twitter_profile'] = __('Twitter Profile URL', 'edsbootstrap');
        $contactmethods['facebook_profile'] = __('Facebook Profile URL', 'edsbootstrap');
        $contactmethods['linkedin_profile'] = __('Linkedin Profile URL', 'edsbootstrap');
       
        return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);



//add_action( 'import_end','saiful' );




function eds_import_end(){
	
	 wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('About', 'edsbootstrap'),
            'menu-item-classes' => 'smooth-scroll',
            'menu-item-url' => '#about-us',
            'menu-item-status' => 'publish'));
	wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Portfolio', 'edsbootstrap'),
            'menu-item-classes' => 'smooth-scroll',
            'menu-item-url' => '#portfolio',
            'menu-item-status' => 'publish'));
	wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Testimonial', 'edsbootstrap'),
            'menu-item-classes' => 'smooth-scroll',
            'menu-item-url' => '#testimonial',
            'menu-item-status' => 'publish'));
	wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Team', 'edsbootstrap'),
            'menu-item-classes' => 'smooth-scroll',
            'menu-item-url' => '#our-team',
            'menu-item-status' => 'publish'));
	wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Contact Us', 'edsbootstrap'),
            'menu-item-classes' => 'smooth-scroll',
            'menu-item-url' => '#contact-us',
            'menu-item-status' => 'publish'));				
	
	$home = get_page_by_title( 'eHome' );
	update_option( 'page_on_front', $home->ID );
	update_option( 'show_on_front', 'page' );
	// Set the blog page
	$blog   = get_page_by_title('Blog - Posts List');
	update_option('page_for_posts',$blog->ID);
}

add_action( 'import_end', 'eds_import_end', 10, 2);	






if ( ! function_exists( 'cs_wp_enqueue_scripts' ) ) {
  function cs_wp_enqueue_scripts() {

    $enqueue_fonts  = array();
    $google_fonts   = array();
	$google_fonts[] = cs_get_option( 'eds_nav_font' );
	$google_fonts[] = cs_get_option( 'eds_article_title_font' );
	$google_fonts[] = cs_get_option( 'eds_article_font' );
	$google_fonts[] = cs_get_option( 'eds_widgets_title_font' );
	$google_fonts[] = cs_get_option( 'eds_widgets_fonts' );
	$google_fonts[] = cs_get_option( 'eds_content_h1' );
	$google_fonts[] = cs_get_option( 'eds_content_h2' );
	$google_fonts[] = cs_get_option( 'eds_content_h3' );
	$google_fonts[] = cs_get_option( 'eds_content_h4' );
	$google_fonts[] = cs_get_option( 'eds_content_h5' );
	$google_fonts[] = cs_get_option( 'eds_content_h6' );
    if ( $google_fonts != "" ) {
      foreach ( $google_fonts as $font ) {
        if( isset( $font['font'] ) && $font['font'] == 'google' ) {
          $variant = ( isset( $font['variant'] ) && $font['variant'] !== 'regular' ) ? ':'. $font['variant'] : '';
          $enqueue_fonts[] = $font['family'] . $variant;
        }
      }
    }

    if ( ! empty( $enqueue_fonts ) ) {
      wp_enqueue_style( 'cs-google-fonts', esc_url( add_query_arg( 'family', urlencode( implode( '|', $enqueue_fonts ) ) , '//fonts.googleapis.com/css' ) ), array(), null );
    }

  }
  add_action( 'wp_enqueue_scripts', 'cs_wp_enqueue_scripts' );
}


function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }
  
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
  
    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
  
    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
  
    return $trimmed_text;
}

if( !function_exists('ng_get_the_category')){
	/**
	 * Get get_categories.
	 *
	 * @since 1.0.0
	 *
	 * @return array $arr.
	 */
	function ng_get_the_category(){
		$arr = array();
		$cats = get_categories(array('echo'=> 0,'order'=>'ASC','orderby'=>'name'));
		
		$arr[ ] = esc_html__( 'Choose Category', 'newsgreen' );
		if( count ( $cats ) ){
			foreach ($cats as $row){
			$arr[ $row->cat_ID ] = $row->cat_name;
			}
		}
		return $arr;
	}
}


require get_template_directory().'/theme-updates/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://eds.edatastyle.com/product/eds/eds.json',
	__FILE__,
	'edsbootstrap-pro'
);
