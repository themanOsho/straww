<?php
// File: inc/enqueue.php

defined( 'ABSPATH' ) || exit;

function straww_enqueue_assets() {
    wp_enqueue_style( 'straww-style', get_stylesheet_uri(), [], STRAWW_THEME_VERSION );
    wp_enqueue_script( 'straww-script', get_template_directory_uri() . '/assets/js/main.js', [], STRAWW_THEME_VERSION, true );
} 