<?php /* Template Name: Home Page Video  */
get_header(); 

$page_layout=cs_get_option( 'eds_static_page_layout' );
$panels_data = count(get_post_meta( get_the_ID(), 'panels_data', true ));

if( cs_get_option('eds_landing_video' ) != "" ):?>
<div id="videowrp">
    <video autoplay loop poster="<?php echo cs_get_option('eds_landing_poster' );?>" id="background">
        <source src="<?php echo cs_get_option('eds_landing_video' );?>" type="video/mp4">
        
    </video>
   
        <div class="container display-table">
        <div class="row vertical-center">
            <div class="col-sm-6 col-md-6 pull-<?php echo cs_get_option('eds_landing_position');?> ">
            <div class="vertical-middle">
                <h1 class="text-white"><?php echo ( function_exists('edsbootstrap_spirit') ) ? edsbootstrap_spirit( cs_get_option('eds_landing_title' )) : cs_get_option('eds_landing_title' ) ;?></h1>
                <div class="text-white caption-text">
                   <?php echo (cs_get_option('eds_landing_captions' )== "") ? '' : cs_get_option('eds_landing_captions' );?>
                </div>
                <a href="<?php echo (cs_get_option('eds_landing_url' ) != "") ? cs_get_option('eds_landing_url' ) : '';?>" class="smooth-scroll btn btn-theme"><?php echo (cs_get_option('eds_landing_button' ) != "") ? cs_get_option('eds_landing_button' ):'';?>
                </a>
            </div>
            </div>
        </div>
        </div>
    
    
    
</div>
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