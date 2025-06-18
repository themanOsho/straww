<?php
/**
 * Archive Template
 *
 * This template is used to display archive pages, such as category, tag, author, or date archives.
 *
 * @package Straww
 */

get_header(); ?>
<main class="container">
	<h1><?php the_archive_title(); ?></h1>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile;
	else :
		?>
		<p><?php esc_html_e( 'No posts found.', 'straww' ); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
