<?php
/**
 * Straww Theme Functions
 *
 * This file contains the main functions for the Straww theme, including setup, enqueueing scripts/styles,
 * customizer options, and widget areas.
 *
 * @package Straww
 */

defined( 'ABSPATH' ) || exit;

/**
 * Setup theme features and register support.
 *
 * This function initializes theme features, registers menus, and sets up theme support.
 *
 * @return void
 */
function straww_theme_setup() {
	/**
	 * Theme support declarations.
	 * This function initializes theme features, registers menus, and sets up theme support.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'editor-styles' );

	/**
	 * Register navigation menus.
	 * This function registers the primary, footer, and mobile menus for the theme.
	 */
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'straww' ),
			'footer'  => __( 'Footer Menu', 'straww' ),
			'mobile'  => __( 'Mobile Menu', 'straww' ),
		)
	);

	/**
	 * Add editor styles.
	 * This function adds custom styles to the block editor.
	 */
	add_editor_style( 'editor-style.css' );
}

/**
 * Register widget areas.
 * This function registers the sidebar widget area for the theme.
 */
function straww_register_sidebars() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'straww' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Main sidebar area', 'straww' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
