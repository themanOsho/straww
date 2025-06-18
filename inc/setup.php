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
    add_theme_support( 'woocommerce' );

    // Register nav menus
    register_nav_menus([
        'primary' => __( 'Primary Menu', 'straww' ),
        'footer'  => __( 'Footer Menu', 'straww' ),
        'mobile'  => __( 'Mobile Menu', 'straww' ),
    ]);
}

function straww_register_sidebars() {
    register_sidebar([
        'name'          => __( 'Sidebar', 'straww' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Main sidebar area', 'straww' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}