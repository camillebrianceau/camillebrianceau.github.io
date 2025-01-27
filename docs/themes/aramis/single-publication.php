<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<main id="main-container" role="main">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row publication-row">
          <?php
          if ( have_posts() ) {

              while ( have_posts() ) {
                  the_post();
                  get_template_part( 'content-publication', get_post_type() );
              }
          }

          ?>
        </div>
      </div>
    </div>
  </div>
</main><!-- #site-content -->

<?php get_footer(); ?>
