<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edsBootstrap
 */

get_header();
$page_layout=cs_get_option( 'eds_blog_layout' );
 ?>

	<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-7">
				<?php
					the_archive_title( '<h1 class="page-title title">', '</h1>' );
					the_archive_description( '<div class="archive-description subtitle">', '</div>' );
                ?>
                 
            </div>
            <!-- /Page Title -->
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
        
            <!-- Blog Content -->
				<?php if($page_layout == 'fullscreen') :?>
                <div class="col-md-12">
                <?php elseif($page_layout == 'right-sidebar' || $page_layout == 'left-sidebar'):?>
                <div class="col-md-9">
                <?php else:?>
                <div class="col-md-6">
                <?php endif;?>
        
            	 <?php if( cs_get_option( 'eds_post_layout' ) !="" ) {
					 echo ' <div class="row" id="columns">';
				 }?>
                
				<?php
                if ( have_posts() ) : 
				
                
				if($page_layout == 'fullscreen' && cs_get_option( 'eds_post_layout' )!=12){
					$video = 'fullvideoforce';
				}else{
					if(cs_get_option( 'eds_post_layout' )!=12){
					$video = ($page_layout == 'left-sidebar' || $page_layout == 'right-sidebar') ? 'videoforce':'';
					}else{
						$video ='';
					}
				}
				echo '<div class="posts-list">';
                /* Start the Loop */
				$i=0;
                while ( have_posts() ) : the_post();
					$i++;
					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					if( cs_get_option( 'eds_post_layout' ) !="" ) {
					 echo '<div class="col-xs-'.cs_get_option( 'eds_post_layout' ).'  '.$video.'" >';
				 	}
					get_template_part( 'template-parts/content', get_post_format() );
					
					if( cs_get_option( 'eds_post_layout' ) !="" ) {
					 echo '</div>';
				 	}
					if($i==2){
						echo '<div class="clearfix"></div>';
						$i=0;
					}
                
                endwhile;
				echo ' </div>';
				
              	echo '<div class="clearfix"></div>';
				if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
					the_posts_navigation();
				else :
					the_posts_pagination( array(
						'format' => '/page/%#%',
						'type' => 'list',
						'mid_size' => 2,
						'prev_text' => __( 'Previous', 'edsbootstrap' ),
						'next_text' => __( 'Next', 'edsbootstrap' ),
						'screen_reader_text' => __( '&nbsp;', 'edsbootstrap' ),
					) );
				endif;
                
                else :
                
                get_template_part( 'template-parts/content', 'none' );
                
                endif; ?>
                <?php if( cs_get_option( 'eds_post_layout' ) !="" ) {
					 echo '</div>';
				 }?>
               
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
