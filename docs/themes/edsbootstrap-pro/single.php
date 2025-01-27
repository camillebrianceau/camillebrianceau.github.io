<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package edsBootstrap
 */

get_header();
$page_layout=cs_get_option( 'eds_blog_layout' ); ?>
<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">
			
            <!-- Page Title -->
            <div class="col-md-8">
                    <h1 class="title"><?php echo get_the_title();?></h1>
                    <?php if ( function_exists( 'the_subtitle' ) ) { ?>
                    	<div class="subtitle"><?php the_subtitle();?></div>
                    <?php }?>
                   
            </div>
            <!-- /Page Title -->
           
                <div class="col-md-4">
                   <?php dimox_breadcrumbs(); ?>
                </div>
          

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
        
            <!-- Blog Content -->
				<?php if($page_layout == 'fullscreen') :?>
                <div class="col-md-12">
                <?php elseif($page_layout == 'right-sidebar' || $page_layout == 'left-sidebar'):?>
                <div class="col-md-9">
                <?php else:?>
                <div class="col-md-6">
                <?php endif;?>
        
            	
                 <?php echo (cs_get_option('eds_ad_top')!="")? cs_get_option('eds_ad_top'):'';?>
				<?php
                while ( have_posts() ) : the_post();
        			
					  
                    get_template_part( 'template-parts/single', get_post_format() );
        			
					if( cs_get_option('eds_author_bio')==1){
						get_template_part( 'views/author', 'view' );
					}
        			if( function_exists('eds_related_post') && cs_get_option('eds_related_posts')==1){eds_related_post();}
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
        
                endwhile; // End of the loop.
                ?>
              
               <?php echo (cs_get_option('eds_ad_bottom')!="")? cs_get_option('eds_ad_bottom'):'';?>
            </div>
            <!-- /Blog Content -->
            
            <!-- Blog Sidebar -->
			<?php if($page_layout == 'right-sidebar' || $page_layout == 'both'): ?>
                <div class="col-md-3">
                    <?php get_sidebar();?>
                </div>
             <?php endif; ?>
            <!-- /Blog Sidebar -->
            
            
            
            
            
        </div>
    </div>
</main>
<!-- /Main -->

<?php

get_footer();
