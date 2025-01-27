<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edsBootstrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
			
			
	<div class="entry-content content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
    
     <?php if(cs_get_option( 'eds_tag' )!="" && cs_get_option( 'eds_tag' )==1):?>
    <div class="row information">
        <div class="col-md-12">
            <div class="tags">
                <?php 
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', esc_html__( ', ', 'edsbootstrap' ) );
					if ( $tags_list ) {
						printf( esc_html__( ' %1$s', 'edsbootstrap' ) , $tags_list ); // WPCS: XSS OK.
					}
				
				 ?>
            </div>
        </div>
    </div>
    <?php endif;?>
    
    
    <?php if(function_exists('eds_social_buttons')){eds_social_buttons();}?>
    <div class="single-prev-next">
        <?php previous_post_link('%link', '<i class="fa fa-long-arrow-left"></i> '.__('Prev Article','mythemeshop')); ?>
        <?php next_post_link('%link', __('Next Article','mythemeshop').' <i class="fa fa-long-arrow-right"></i>'); ?>
    </div>
    <div class="clearfix"></div>
</article><!-- #post-## -->
