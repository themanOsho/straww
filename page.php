<?php
/**
 * Straww Theme Page Template
 *
 * This template is used to display individual pages.
 *
 * @package Straww
 */

get_header(); ?>
<main class="container">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
	?>
</main>
<?php get_footer(); ?>
