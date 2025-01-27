<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edsBootstrap
 */

if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>
<div class="col-md-3 widget-area" id="left-sidebar">
    <?php 
        dynamic_sidebar( 'sidebar-left' );
    ?>
</div>

