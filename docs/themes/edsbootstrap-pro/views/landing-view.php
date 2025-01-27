<?php 
if(cs_get_option( 'eds_home_page_landing_type' ) == 'slider'):
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
                            <a href="<?php echo ($slide[ 'slide_url' ] != "") ? $slide[ 'slide_url' ] : '';?>" class="smooth-scroll btn btn-theme"><?php echo ($slide[ 'slide_button' ] != "") ? $slide[ 'slide_button' ]:'';?>
							</a>
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

<?php elseif(cs_get_option( 'eds_home_page_landing_type' ) == 'video'): ?>
<?php if( cs_get_option('eds_landing_video' ) != "" ):?>
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
<?php elseif(cs_get_option( 'eds_home_page_landing_type' ) == 'image'): 
$img_ids =(cs_get_option('eds_home_image' )== "") ? '' : cs_get_option('eds_home_image' );
$img = wp_get_attachment_image_src( $img_ids, 'full' );
if($img!=""){
?>


<div id="videowrp" style="height:88vh; background:url( <?php echo $img[0];?>) no-repeat center center; background-size:cover; -webkit-background-size:cover; -moz-background-size:cover;">
    
        <div class="container display-table">
        <div class="row vertical-center">
            <div class="col-sm-6 col-md-6 pull-<?php echo cs_get_option('eds_home_position');?> ">
            <div class="vertical-middle">
                <h1 class="text-white"><?php echo ( function_exists('edsbootstrap_spirit') ) ? edsbootstrap_spirit( cs_get_option('eds_home_title' )) : cs_get_option('eds_home_title' ) ;?></h1>
                <div class="text-white caption-text">
                   <?php echo (cs_get_option('eds_home_captions' )== "") ? '' : cs_get_option('eds_home_captions' );?>
                </div>
                <a href="<?php echo (cs_get_option('eds_home_url' ) != "") ? cs_get_option('eds_home_url' ) : '';?>" class="smooth-scroll btn btn-theme"><?php echo (cs_get_option('eds_home_button' ) != "") ? cs_get_option('eds_home_button' ):'';?>
                </a>
            </div>
            </div>
        </div>
        </div>
    
    
    
</div>
<?php }?>
<?php endif;?>