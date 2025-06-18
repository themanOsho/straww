<?php
/**
 * Straww Theme Functions and Definitions
 *
 * This file contains the core functions and definitions for the Straww theme.
 *
 * @package Straww
 */

define( 'STRAWW_THEME_VERSION', '1.0.0' );

defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/customizer.php';

// Hook theme setup.
add_action( 'after_setup_theme', 'straww_theme_setup' );

// Hook script/style enqueueing.
add_action( 'wp_enqueue_scripts', 'straww_enqueue_assets' );

// Hook customizer.
add_action( 'customize_register', 'straww_customize_register' );

// Register widget areas.
add_action( 'widgets_init', 'straww_register_sidebars' );
