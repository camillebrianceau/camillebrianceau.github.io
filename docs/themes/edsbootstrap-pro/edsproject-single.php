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

get_header(); if ( have_posts() ) : ?>
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
    </div>
</section>
<!-- /Section: Page Header -->
<!-- Main -->
<main class="main-container">
    <div class="container">
    	
        
        <div class="row">
			<?php  while ( have_posts() ) : the_post(); ?>
                <!-- Project Images -->
                <div class="col-md-8">


                    <div  id="projects-list" class="project-carousel owl-carousel owl-theme">
						<?php 
						$project_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'project' );
						$full = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
						if($full != ""):?>
                            <div class="item">
                                <a href="<?php echo $full[0];?>" class="image-popup">
                                    <div class="gallery-image">
                                        <img src="<?php echo $project_img[0];?>">
                                    </div>
                                </a>
                            </div>
                        <?php endif;?>
						<?php 
						 $gallery = get_post_meta( get_the_ID(), '_edsproject_gallery', true );
						
						if( ! empty( $gallery ) ):
						 $ids = explode( ',', $gallery['eds_project_gallery']);
						foreach ( $ids as $id ):
						$attachment = wp_get_attachment_image_src( $id, 'full' );
						$project = wp_get_attachment_image_src( $id, 'project' );
							if($attachment[0]!=""){
						?>
                        <div class="item">
                            <a href="<?php echo $attachment[0];?>" class="image-popup">
                                <div class="gallery-image">
                                    <img src="<?php echo $project[0];?>">
                                </div>
                            </a>
                        </div>
						<?php } endforeach; endif;?>
                       

                    </div>


                </div>
                <!-- /Project Images -->

                <!-- Project Information -->
                <div class="col-md-4 project-information">

                    <h3 class="title"><?php echo cs_get_option( 'eds_portfolio_description' );?></h3>
                  
                       <?php the_content();?>
                   

                    <h3 class="title"><?php echo cs_get_option( 'eds_portfolio_details' );?></h3>
                    <ul class="details">
                    	<?php $meta = get_post_meta( get_the_ID(), '_edsproject_info', true ); ?>
      <?php $client = (cs_get_option( 'eds_portfolio_client' )!="")?'Client':cs_get_option( 'eds_portfolio_client' );?>          
            <li><?php echo ($meta['_edsproject_client'] != "") ? '<span>'.$client.': </span>'.$meta['_edsproject_client'] : '';?></li>
      
       <?php $start = (cs_get_option( 'eds_portfolio_start' ) != "")?'Start Date':cs_get_option( 'eds_portfolio_start' );?>      
            <li><?php echo ($meta['_edsproject_stated_date'] != "") ? '<span>'.$start.': </span>'.$meta['_edsproject_stated_date'] : '';?></li>
      
	  <?php $end = (cs_get_option( 'eds_portfolio_end' )!="")?'End Date':cs_get_option( 'eds_portfolio_end' );?>     
           <li><?php echo ($meta['_edsproject_end_date'] != "") ? '<span>'.$end.': </span>'.$meta['_edsproject_end_date'] : '';?></li>
          
         <?php $web = (cs_get_option( 'eds_portfolio_web' ) !="" )?'Web Site':cs_get_option( 'eds_portfolio_web' );?>   
            <li><?php echo ($meta['_edsproject_url'] != "") ? '<span>'.$web.': </span>'.$meta['_edsproject_url'] : '';?></li>
            
         <?php $tag = (cs_get_option( 'eds_portfolio_tag' ) != "" )?'Tag':cs_get_option( 'eds_portfolio_tag' );?>  
                <li><?php echo ($meta['_edsproject_project_tag'] != "") ? '<span>'.$tag.': </span>'.$meta['_edsproject_project_tag'] : '';?></li>    
                    </ul>

				<?php if(cs_get_option( 'eds_portfolio_social' )!="" && cs_get_option( 'eds_portfolio_social' ) == 1):?>
                    <ul class="social-share">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-fw fa-facebook"></i> </a></li>
                        <li><a href="https://twitter.com/share?url=<?php the_permalink() ?>&amp;text=<?php the_title() ?>" target="_blank"><i class="fa fa-fw fa-twitter"></i> </a></li>
                        <li><a href="//plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a></li>
                        <li><a href="http://www.reddit.com/submit?url=<?php the_permalink() ?>" target="_blank"><i class="fa fa-fw fa-reddit"></i></a></li>
                        <li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&amp;media=<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' ); echo $thumb[0];  ?>&amp;description=<?php the_title() ?>" target="_blank"><i class="fa fa-fw fa-pinterest"></i> </a></li>
                    </ul>
				<?php endif;?>
                </div>
                <!-- /Project Information -->

            </div>
        <?php endwhile;?>
		
    </div>
</main>
<!-- /Main -->
<?php endif; ?>
<?php
get_footer();
