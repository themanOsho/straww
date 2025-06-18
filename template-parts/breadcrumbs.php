<?php
/**
 * Straww Theme Breadcrumbs Template
 *
 * This template is used to display breadcrumbs for navigation.
 *
 * @package Straww
 */

if ( function_exists( 'yoast_breadcrumb' ) ) {
	yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
} elseif ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
	rank_math_the_breadcrumbs();
} else {
	echo '<nav class="sw-breadcrumb"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'straww' ) . '</a></nav>';
}
