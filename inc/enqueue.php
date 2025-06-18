<?php
// File: inc/enqueue.php

defined( 'ABSPATH' ) || exit;

function straww_enqueue_assets() {
    $version = filemtime( get_template_directory() . '/style.css' );

    wp_enqueue_style( 'straww-normalize', get_template_directory_uri() . '/assets/css/normalize.css', [], STRAWW_THEME_VERSION );
    wp_enqueue_style( 'straww-style', get_stylesheet_uri(), [ 'straww-normalize' ], $version );

    wp_enqueue_script( 'straww-script', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
} 