<?php
/**
 * Straww Theme Enqueue Scripts and Styles
 *
 * This file contains the functions to enqueue scripts and styles for the Straww theme.
 *
 * @package Straww
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue scripts and styles for the Straww theme.
 */
function straww_enqueue_assets() {
	$version_css = filemtime( get_template_directory() . '/style.css' );
	$version_js  = filemtime( get_template_directory() . '/assets/js/main.js' );

	wp_enqueue_style( 'straww-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), STRAWW_THEME_VERSION );
	wp_enqueue_style( 'straww-style', get_stylesheet_uri(), array( 'straww-normalize' ), $version_css );

	wp_enqueue_script( 'straww-script', get_template_directory_uri() . '/assets/js/main.js', array(), $version_js, true );
}
