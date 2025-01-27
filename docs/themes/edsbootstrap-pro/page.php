<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edsBootstrap
 */

get_header(); ?>
<?php 
if(is_front_page()): ?>
<?php get_template_part( 'views/landing', 'view' );
$page_layout=cs_get_option( 'eds_static_page_layout' );
$panels_data = count(get_post_meta( get_the_ID(), 'panels_data', true ));

?>

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
<?php	
else:
$page_layout=cs_get_option( 'eds_page_layout' );
?>
<!-- Section: Page Header -->
<section class="section-page-header page">
    <div class="container">
        <div class="row">
             <!-- Page Title -->
            <div class="col-md-7">
                <?php the_title( '<h1 class="title">', '</h1>' ); ?>
                <?php if ( function_exists( 'the_subtitle' ) ) { ?>
                <div class="subtitle"><?php the_subtitle();?></div>
                <?php }?>
            </div>
            <!-- /Page Title -->
            <div class="col-md-5">
                <?php (cs_get_option( 'eds_breadcrumbs' )==1) ? dimox_breadcrumbs() :''; ?>
            </div>
            </div>
            <!-- /Page Title -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->
<!-- Main -->
<main class="main-container">
    <div class="container">
    	<div class="row">
        
        <?php if ( $page_layout == 'left-sidebar' || $page_layout == 'both') { ?>
            <!-- Blog Sidebar -->
             <?php get_sidebar('left');?>
         <?php } ?>
			
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
        
        <!-- Blog Sidebar -->
        
       	<?php if($page_layout == 'right-sidebar' || $page_layout == 'both'): ?>
        <!-- Blog Sidebar -->
        <div class="col-md-3">
        	<?php get_sidebar();?>
        </div>
         <?php endif; ?>
        <!-- Blog Sidebar -->
        
		</div>
    </div>
</main>
<!-- /Main -->
<?php
endif;
get_footer();
