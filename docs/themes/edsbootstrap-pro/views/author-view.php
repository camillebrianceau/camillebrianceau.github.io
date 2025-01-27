<!--BEGIN .author-bio-->
<div class="author-bio">
<?php echo get_avatar( get_the_author_meta('email'), '90' ); ?>
<div class="author-info">
        <h3 class="author-title">Written by <?php the_author_link(); ?></h3>
        <p class="author-description"><?php the_author_meta('description'); ?></p>
        <p>Website: <a href="<?php the_author_meta('user_url');?>"><?php the_author_meta('user_url');?></a></p>
        <ul class="icons">
                <?php
                        $rss_url = get_the_author_meta( 'rss_url' );
                        if ( $rss_url && $rss_url != '' ) {
                                echo '<li class="rss"><a href="' . esc_url($rss_url) . '"><i class="fa fa-rss"></i></a></li>';
                        }
                       
                        $google_profile = get_the_author_meta( 'google_profile' );
                        if ( $google_profile && $google_profile != '' ) {
                                echo '<li class="google"><a href="' . esc_url($google_profile) . '" rel="author"><i class="fa fa-google-plus"></i></a></li>';
                        }
                       
                        $twitter_profile = get_the_author_meta( 'twitter_profile' );
                        if ( $twitter_profile && $twitter_profile != '' ) {
                                echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';
                        }
                       
                        $facebook_profile = get_the_author_meta( 'facebook_profile' );
                        if ( $facebook_profile && $facebook_profile != '' ) {
                                echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook"></i></a></li>';
                        }
                       
                        $linkedin_profile = get_the_author_meta( 'linkedin_profile' );
                        if ( $linkedin_profile && $linkedin_profile != '' ) {
                                echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin"></i></a></li>';
                        }
                ?>
        </ul>
        
       
</div>
 <div class="clearfix"></div>
<!--END .author-bio-->
</div>