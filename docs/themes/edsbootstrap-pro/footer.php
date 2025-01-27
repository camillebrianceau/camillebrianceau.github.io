<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edsBootstrap
 */
$edsbootstrap_options = get_theme_mod( 'edsbootstrap_theme_options' );

?>
<!-- Footer -->
<footer class="footer section-small">
    <div class="container">
    	<?php if ( is_active_sidebar( 'footer' ) ) { ?>
        <div class="row">
			<?php dynamic_sidebar( 'footer' ); ?>
        </div>
        <?php } ?>
        <div class="row">
       		 <div class="col-md-12 text-align-center">
				
                <hr>
                <!-- Footer Logo -->
                <div class="logo">
                    	<?php
							if(cs_get_option( 'eds_logo_footer' )){
								 $image = wp_get_attachment_image_src( cs_get_option( 'eds_logo_footer' ), 'full' ); 
								?>
                                    <!-- Logo Big -->
                                    <img class="logo-big" src="<?php echo $image[0];?>">
                                    <!-- /Logo Big -->
                                   
                                <?php
                            }
                            ?>
                </div>
                <!-- /Footer Logo -->
               

                <!-- /Footer Text -->


                <!-- Copyright -->
                <p class="copyright">
                   <?php  echo (cs_get_option('eds_copyrights_text') != "")? cs_get_option( 'eds_copyrights_text') : ''; ?>
                	
                </p>
                <!-- /Copyright -->
				<?php if(cs_get_option('eds_footer_social_button')!=""):?>
                <!-- Footer Social -->
                <ul class="social-inline">
                   <?php get_template_part( 'views/socialbtn', 'view' );?>
                </ul>
                <!-- /Footer Social -->
				<?php endif;?>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Scroll To Top -->
<div id="scroll-to-top" class="scroll-to-top">
    <i class="icon fa fa-angle-up"></i>
</div>
<!-- /Scroll To Top -->
	




<?php wp_footer(); ?>
<?php  echo (cs_get_option('eds_footer_code') != "")? cs_get_option( 'eds_footer_code') : ''; ?>

</body>
</html>
