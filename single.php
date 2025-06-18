<?php
/**
 * Straww Theme Single Post Template
 *
 * This template is used to display individual posts.
 *
 * @package Straww
 */

get_header(); ?>
<main class="container">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	endwhile;
	?>
</main>
<?php get_footer(); ?>
