<?php
// File: inc/enqueue.php

defined( 'ABSPATH' ) || exit;

function straww_enqueue_assets() {
    $version_css = filemtime( get_template_directory() . '/style.css' );
    $version_js  = filemtime( get_template_directory() . '/assets/js/main.js' );

    wp_enqueue_style( 'straww-normalize', get_template_directory_uri() . '/assets/css/normalize.css', [], STRAWW_THEME_VERSION );
    wp_enqueue_style( 'straww-style', get_stylesheet_uri(), [ 'straww-normalize' ], $version_css );

    wp_enqueue_script( 'straww-script', get_template_directory_uri() . '/assets/js/main.js', [], $version_js, true );
}
