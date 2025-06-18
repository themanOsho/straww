<?php
// File: inc/setup.php

defined( 'ABSPATH' ) || exit;

function straww_theme_setup() {
    // Theme support declarations
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

    // Register nav menus
    register_nav_menus([
        'primary' => __( 'Primary Menu', 'straww' ),
    ]);
} 