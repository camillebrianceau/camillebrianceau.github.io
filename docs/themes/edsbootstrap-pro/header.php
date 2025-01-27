<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edsBootstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php if(cs_get_option('eds_favicon') != ""):?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo cs_get_option('eds_favicon');?>">
<?php endif;?>

<?php wp_head(); ?>
<?php  echo (cs_get_option('eds_header_code') != "")? cs_get_option( 'eds_header_code') : ''; ?>
<?php if(cs_get_option('eds_custom_css')!=""){?>
<style>
	<?php echo cs_get_option('eds_custom_css');?>
</style>
<?php }?>
</head>
<body <?php body_class(); ?>>

<!-- Preloader -->
<!--<div id="preloader">
    <div class="loader"></div>
</div>-->
<!-- /Preloader -->
<!-- Header -->
<header id="home" class="header">

    <!-- Navigation -->
    <nav id="navigation" class="navbar affix <?php echo (cs_get_option('eds_nav_style') != "")? cs_get_option( 'eds_nav_style'): '';?> ">
		<?php if(cs_get_option('eds_top_bar') == 1):?>
        <!-- Company Information -->
        <div class="information hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                	<!-- Feedback -->
					  
                    <div class="col-md-7">
						<?php
                        echo (cs_get_option('eds_top_location') != "")? '<span><i class="icon icon_pin_alt"></i> '.cs_get_option( 'eds_top_location').'</span>' : '';
                        echo (cs_get_option('eds_top_email') != "")? '<span><i class="icon icon_mail_alt"></i> '.cs_get_option( 'eds_top_email').'</span>' : '';
                        echo (cs_get_option('eds_top_phone') != "")? '<span><i class="icon icon_phone"></i> '.cs_get_option( 'eds_top_phone').'</span>' : '';
                        ?>
                    </div>
                   
                    <!-- /Feedback -->
                    
					<?php if(cs_get_option('eds_top_bar_social_button') == 1):?>
                    <!-- Social -->
                    <div class="col-md-5 pull-right">
                        <ul class="social">
                        	<?php get_template_part( 'views/socialbtn', 'view' );?>
                        </ul>
                    </div>
                    <!-- /Social -->
                  	<?php endif; ?>

                </div>
            </div>
        </div>
        <!-- /Company Information -->
		<?php endif; ?>
       
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <!-- Navigation Header -->
                    <div class="navbar-header">

                        <!-- Toggle Button -->
                        <button type="button"
                                class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#main-menu"
                                aria-expanded="false"
                                aria-controls="main-menu">

                            <span class="sr-only"> <?php echo esc_html__( 'Toggle Navigation', 'edsbootstrap' );?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                        <!-- /Toggle Button -->

                        <!-- Brand -->
                       
                        
                         <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
							<?php
							if(cs_get_option( 'eds_logo_header' )){
								 $image = wp_get_attachment_image_src( cs_get_option( 'eds_logo_header' ), 'full' ); 
								?>
                                    <!-- Logo Big -->
                                    <img class="logo-big" src="<?php echo $image[0];?>">
                                    <!-- /Logo Big -->
                                    <!-- Logo Small -->
                                    <img class="logo-small" src="<?php echo $image[0];?>">
                                    <!-- /Logo Small -->
                                <?php
							}elseif (has_custom_logo()) {
                                 the_custom_logo();
                            } else { ?>
                                <h1 class='logo_text'><?php bloginfo( 'name' ) ?></h1>
                                <?php
                                $description = get_bloginfo( 'description' );
                                if ( $description ) {
                                    echo '<p class="site-description">' . $description . '</p>';
                                }
                            }
                            ?>
                            
                       </a>
                        <!-- /Brand -->

                    </div>
                    <!-- /Navigation Header -->

                    <!-- Navigation -->
					<?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'navbar-collapse collapse',
                            'container_id'      => 'main-menu',
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
                    <!-- /Navigation -->

                </div>
            </div>

        </div>
    </nav>
    <!-- /Navigation -->

</header>
<!-- /Header -->


