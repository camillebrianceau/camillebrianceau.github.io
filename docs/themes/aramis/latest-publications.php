<?php
/*
Template Name: latest-publications
*/
?>

<?php get_header(); ?>

<main id="main-container" role="main">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="entry-content-page">
                <?php the_content(); ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>



        <?php
        // TO SHOW THE POSTS
        $args = array(
          'post_type'      => 'publication',
          'post_status'    => 'publish',
          'posts_per_page' => 20,
          'orderby'        => 'publication_date',
          'order'          => 'DESC',
        );

        $posts = get_posts( $args );
        ?>

        <?php if( $posts ): ?>
          <div class="row">
          	<?php foreach( $posts as $post ):
        		setup_postdata( $post );
            $keywords = get_field('keywords', $post->ID);
        		?>
              <div class="col-md-12">
                  <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                  <p style="font-size:13px;">By <?php the_field("authors"); ?></p>
                  <p>
                    <?php if( $keywords ): ?>

                        <?php foreach( $keywords as $k): ?>
                    		<span class="keyword-tag"><?php echo esc_html( $k->name ); ?></span>
                        <?php endforeach; ?>
                    <?php endif; ?>
                  </p>

              <hr>
              </div>



          	 <?php endforeach; ?>
          	<?php wp_reset_postdata(); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
