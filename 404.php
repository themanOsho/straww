<?php
/**
 * Template for displaying 404 pages (not found).
 *
 * @package Straww
 */

get_header(); ?>
<main class="container">
	<h1><?php esc_html_e( 'Oops! That page can’t be found.', 'straww' ); ?></h1>
	<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'straww' ); ?></p>
</main>
<?php get_footer(); ?>
