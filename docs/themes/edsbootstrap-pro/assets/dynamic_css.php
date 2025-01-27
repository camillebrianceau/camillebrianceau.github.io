<?php
	header("Content-type: text/css");
	$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
	$wp_load = $absolute_path[0] . 'wp-load.php';
	require_once($wp_load);
	
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color providedli.menu-item-has-children a i.eds-arrows::after, li.menu-item-has-children .eds-arrows-back::after
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2]+2 . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2]+2 . $color[2]+2 );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}
?>
<?php if( cs_get_option( 'eds_primary_color' )!="" ):?>
.btn {
    border-color:<?php echo cs_get_option( 'eds_primary_color' );?> !important;
    background-color:<?php echo cs_get_option( 'eds_primary_color' );?> !important;
}
.list li::before {
	border: solid 1px <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.list li:hover::before {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.breadcrumb a:hover {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.page-numbers li a:hover,
.page-numbers li span:hover,
.page-numbers li a.hover,
.page-numbers li span.hover,
.page-numbers li a:focus,
.page-numbers li span:focus,
.page-numbers li a.focus,
.page-numbers li span.focus {
  background: <?php echo cs_get_option( 'eds_primary_color' );?> !important;
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?> !important;
}
.page-numbers li a.current,
.page-numbers li span.current {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.progress .progress-bar {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.panel.panel-theme .panel-heading a:not(.collapsed) {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.tagcloud a:hover,
.tags a:hover{
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border: solid 1px <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.social-inline li a {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.social-inline li a:hover {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.social-share li a:hover {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
a {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
blockquote {
  border-left: solid 1px <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.text-theme{
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.scroll-to-top {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}

label.error {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.gallery-image::after {
	background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar .information a:hover {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar .information .social li a:hover {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar .nav li a:hover,
.navbar .nav li a.hover,
.navbar .nav li a:focus,
.navbar .nav li a.focus,
.navbar .nav li.active > a {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar .nav li.dropdown .dropdown-menu {
  border-top: solid 1px <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar .navbar-toggle:hover {
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar .navbar-toggle:hover .icon-bar {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar.navbar-underline .nav li a:hover,
.navbar.navbar-underline .nav li a.hover,
.navbar.navbar-underline .nav li a:focus,
.navbar.navbar-underline .nav li a.focus,
.navbar.navbar-underline .nav li.active > a {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border-bottom-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.navbar.navbar-underline .nav li.active a {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border-bottom-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.feature .icon {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border: solid 1px <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.feature:hover .icon {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.feature:hover .title {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.more-feature:hover .icon,
.more-feature:hover .title {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.project-item:hover {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.stat .number {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.stat:hover .icon {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.stat:hover .title {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.testimonial .pic:after{
    background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.clients-carousel .owl-controls .owl-buttons div {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.team-member .post {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.result-icon .icon-border .icon {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.footer {
  border-top: solid 2px <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.footer .menu li:hover a {
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.footer .menu li:hover::before {
  background-color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.blog-post .image .image-overlay .icon-wr {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.blog-post .entry-title a:hover{
	color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.widget .widget-title::after,
h4.comments-title::after,
h3.comment-reply-title::after,
.widget  h3.title::after,
.footer-col h3.title::after,
.footer-col h3.widget-title::after{
	background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
#secondary .widget ul a:hover,
#left-sidebar .widget ul a:hover{
  color: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.project-information .title::after {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.projects-carousel .recent-project:hover .info {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.projects-carousel .owl-controls .owl-buttons div {
  background: <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.search-submit{
	background-color: <?php echo cs_get_option( 'eds_primary_color' );?>!important;
    border-color: <?php echo cs_get_option( 'eds_primary_color' );?> !important;
    border-radius: 3px;
    color: #fff !important;
    font-family: inherit;
    padding: 9px 10px;
    transition: all 0.3s ease-in-out 0s;
	border:none;
}
.filter li .btn{
	border:1px solid <?php echo cs_get_option( 'eds_primary_color' );?>;
}
.single-prev-next a {
	background:<?php echo cs_get_option( 'eds_primary_color' );?>;
}

.btn:hover,
.btn.hover {
  border-color: <?php echo cs_get_option( 'eds_primary_color' );?> !important;
  background-color: <?php echo cs_get_option( 'eds_primary_color' );?> !important;
}
.btn:active,
.btn.active {
  border-color: <?php echo hex2rgba(cs_get_option( 'eds_primary_color' ),0.7);?> !important;
  background-color: <?php echo hex2rgba(cs_get_option( 'eds_primary_color' ),0.7);?> !important;
}

ul.icons li a{
	background:<?php echo cs_get_option( 'eds_primary_color' );?>;
	color:#FFF;
}
ul.icons li:hover a{
	background:#FFF;
	color:<?php echo cs_get_option( 'eds_primary_color' );?>;
}
<?php endif;?>


<?php if( cs_get_option( 'eds_secondary_color' ) !="" ):?>
body {
	color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.breadcrumb a {
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.page-numbers li a,
.page-numbers li span {
	color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.tagcloud a,
.tags a{
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
a:hover,
a.hover,
a:focus,
a.focus {
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.navbar .information a ,.navbar .information span{
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.navbar .nav li a {
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.navbar .navbar-toggle {
  border: solid 1px <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.navbar .navbar-toggle .icon-bar {
  background: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.project-item .info .description {
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.project-item .info .social {
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.footer .menu li a {
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.footer .menu li::before {
  background: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.blog-post .meta li time{
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;	
}
#secondary .widget ul a,
#left-sidebar .widget ul a {
  color: <?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.project-carousel .owl-controls .owl-buttons .owl-prev,
.project-carousel .owl-controls .owl-buttons .owl-next,
.postGallery .owl-controls .owl-buttons .owl-prev,
.postGallery .owl-controls .owl-buttons .owl-next {
  color:<?php echo cs_get_option( 'eds_secondary_color' );?>;
}
.projects-carousel .recent-project .info {
  color:<?php echo cs_get_option( 'eds_secondary_color' );?>;
}

.testimonial .description{
    color:<?php echo cs_get_option( 'eds_secondary_color' );?>;
}

<?php endif;?>

<?php if( cs_get_option( 'eds_title_color' )!="" ):?>
.section-page-header .title {
  color:<?php echo cs_get_option( 'eds_title_color' );?>;
}
.h1,
h1,
.h2,
h2,
.h3,
h3,
.h4,
h4,
.h5,
h5,
.h6,
h6,
.panel-grid-cell h3.widget-title{
  color:<?php echo cs_get_option( 'eds_title_color' );?>;
}
.blog-post .entry-title a{
	color: <?php echo cs_get_option( 'eds_title_color' );?>;
}
<?php endif;?>

<?php if( cs_get_option( 'eds_page_background' )!="" ):?>
<?php $bg=cs_get_option( 'eds_page_background' );?>
body{
	background:<?php echo (!empty($bg['image']))?'url('.$bg['image'].')':'';?>  <?php echo (!empty($bg['color']))?$bg['color']:'#fff';?>;
    <?php echo (!empty($bg['position']))? 'background-position:'.$bg['position'].';':'';?>
    <?php echo (!empty($bg['position']))? 'background-repeat:'.$bg['position'].';':'';?>
    <?php echo (!empty($bg['attachment']))? 'background-attachment:'.$bg['attachment'].';':'';?>
    <?php echo (!empty($bg['repeat']))? 'background-repeat:'.$bg['repeat'].';':'';?>
    <?php if(!empty($bg['size'])){?>
	-webkit-background-position:<?php echo $bg['size'];?>;
	-moz-background-position:<?php echo $bg['size'];?>;
	background-repeat:<?php echo $bg['size'];?>;
    <?php } ?>
}
<?php endif;?>



<?php if( !empty(cs_get_option( 'eds_article_font' )) ):
	$fonts = cs_get_option( 'eds_article_font' );
 ?>
body{
	
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
      
}
<?php endif;?>

<?php if( !empty(cs_get_option( 'eds_nav_font' )) ):
	$fonts = cs_get_option( 'eds_nav_font' );
 ?>
.navbar{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
      
}
<?php endif;?>
<?php if( !empty(cs_get_option( 'eds_article_title_font' )) ):
$fonts = cs_get_option( 'eds_article_title_font' );
?>
.blog-post .entry-title, .blog-post .entry-title a{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>

<?php if( !empty(cs_get_option( 'eds_widgets_title_font' )) ):
$fonts = cs_get_option( 'eds_widgets_title_font' );
?>
.widget .widget-title, h4.comments-title, h3.comment-reply-title{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>
<?php if( !empty(cs_get_option( 'eds_widgets_fonts' )) ):
$fonts = cs_get_option( 'eds_widgets_fonts' );
?>
#secondary .widget-area,
#left-sidebar .widget-area{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>
<?php if( cs_get_option( 'eds_content_h1' )!=""  ):
$fonts = cs_get_option( 'eds_content_h1' );
?>
.h1, h1,.section-page-header .title{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>
<?php if( !empty(cs_get_option( 'eds_content_h2' )) ):
$fonts = cs_get_option( 'eds_content_h2' );
?>
h2,.h2,.panel-grid-cell h3.widget-title{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}

<?php endif;?>
<?php if( cs_get_option( 'eds_content_h3' )!="" ):
$fonts = cs_get_option( 'eds_content_h3' );
?>
h3,.h3{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>

<?php if( cs_get_option( 'eds_content_h4' )!="" ):
$fonts = cs_get_option( 'eds_content_h4' );
?>
h4,.h4{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>

<?php if( cs_get_option( 'eds_content_h5' )!="" ):
$fonts = cs_get_option( 'eds_content_h5' );
?>
h5,.h5{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>


<?php if( cs_get_option( 'eds_content_h6' ) !="" ):
$fonts = cs_get_option( 'eds_content_h6' );
?>
h6,.h6{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
}
<?php endif;?>

.single-prev-next a:hover,.single-prev-next a.hover,.single-prev-next a:focus, .single-prev-next a.focus{
	color:#fff;
}

.navbar.navbar-underline .nav li a:hover, .navbar.navbar-underline .nav li a.hover, .navbar.navbar-underline .nav li a:focus, .navbar.navbar-underline .nav li a.focus, .navbar.navbar-underline .nav li.active > a
{
	background:none;
}