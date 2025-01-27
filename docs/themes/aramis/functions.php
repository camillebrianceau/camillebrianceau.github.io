<?php

function my_theme_enqueue_styles() {

    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );



}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/**
 * Enables the HTTP Strict Transport Security (HSTS) header in WordPress.
 */
function tg_enable_strict_transport_security_hsts_header_wordpress() {
    header( 'Strict-Transport-Security: max-age=10886400' );
}
add_action( 'send_headers', 'tg_enable_strict_transport_security_hsts_header_wordpress' );
