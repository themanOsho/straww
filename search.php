<?php
/**
 * Straww Theme Search Template
 *
 * This template is used to display search results.
 *
 * @package Straww
 */

get_header(); ?>
<main class="container">
	<?php
	// translators: %s is the search query.
	?>
	<h1>
		<?php
		// translators: %s is the search query.
		printf( esc_html__( 'Search Results for: %s', 'straww' ), get_search_query() );
		?>
	</h1>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile;
	else :
		?>
		<!-- If no posts found, display a message -->
		<p><?php esc_html_e( 'Sorry, no results found for your search.', 'straww' ); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
