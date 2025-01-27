<?php /* Template Name: Home Page Slider  */
get_header(); 

$page_layout=cs_get_option( 'eds_static_page_layout' );
$panels_data = count(get_post_meta( get_the_ID(), 'panels_data', true ));


$eds_slider_options = cs_get_option( 'eds_slider' ) ;
if(count($eds_slider_options) > 0):?>
 
<!-- Slider -->
<div class="slider owl-carousel owl-theme">
	<?php if ( is_array($eds_slider_options) && count($eds_slider_options) > 0) :?>
    <!-- Slide -->
    <?php foreach($eds_slider_options as $slide):
	
	?>
		<?php if( $slide[ 'slide_img' ] != "") :
		 $image = wp_get_attachment_image_src( $slide[ 'slide_img' ], 'full' ); 
		?>
        <div class="item mask" style="background: url(<?php echo $image[0];?>) no-repeat center top / cover;" data-stellar-background-ratio="0.4">
    
            <div class="container height-100p">
                <div class="row height-100p">
    
                    <div class="col-sm-6 col-md-6 height-100p pull-<?php echo $slide['slide_captions_position'];?>">
                        <div class="vertical-middle">
                            <h1 class="text-white"><?php echo ( function_exists('edsbootstrap_spirit') ) ? edsbootstrap_spirit( $slide[ 'slide_title' ] ) : $slide[ 'slide_title' ] ;?></h1>
                            <div class="text-white caption-text">
                               <?php echo $description= ($slide[ 'slide_captions' ]== "") ? '' : $slide[ 'slide_captions' ];?>
                            </div>
                            <?php if( $slide[ 'slide_url'] != "" ) :?>
                            <a href="<?php echo ($slide[ 'slide_url' ] != "") ? $slide[ 'slide_url' ] : '';?>" class="smooth-scroll btn btn-theme"><?php echo ($slide[ 'slide_button' ] != "") ? $slide[ 'slide_button' ]:'';?>
							</a>
                            <?php endif;?>
                        </div>
                    </div>
    
    
                </div>
            </div>
    
        </div>
        <?php endif;?>
    <!-- /Slide -->
   <?php endforeach;?>
   
   <?php endif;?>

</div>
<!-- /Slider -->
<?php endif; ?>


<!-- Main -->
<main class="main-container">
	<?php if($panels_data < 0 && $page_layout != 'fullscreen'):?>
    <div class="container">
    <?php endif;?>
    	<?php if( $page_layout != 'fullscreen'  || $page_layout != 'right-sidebar' ) :?>
    	<div class="row">
        <?php if ( $page_layout == 'left-sidebar' || $page_layout == 'both') { ?>
     	<!-- Blog Sidebar -->
       	 <?php get_sidebar('left');?>
        <?php } ?>
        <?php endif; ?>
        <!-- Blog Sidebar -->
        <?php if($page_layout == 'fullscreen') :?>
		 <div class="col-md-12">
         <?php elseif($page_layout == 'right-sidebar' || $page_layout == 'left-sidebar'):?>
          <div class="col-md-9">
        <?php else:?>
      	<div class="col-md-6">
        <?php endif;?>
       
		
			<?php
			
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
        
        
       <?php if( $page_layout != 'fullscreen' || $page_layout != 'left-sidebar' ) :?>
       	<?php if($page_layout == 'right-sidebar' || $page_layout == 'both'): ?>
        <!-- Blog Sidebar -->
        <div class="col-md-3">
        	<?php get_sidebar();?>
        </div>
         <?php endif; ?>
        <!-- Blog Sidebar -->
         <?php endif; ?>
		</div>
		<?php if($panels_data < 0 && $page_layout != 'fullscreen'):?>
        	</div>
        <?php endif; ?>


</main>
<!-- /Main -->

<?php get_footer(); ?>