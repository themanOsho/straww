<?php
// File: search.php

get_header(); ?>
<main class="container">
    <h1><?php printf( esc_html__( 'Search Results for: %s', 'straww' ), get_search_query() ); ?></h1>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );
        endwhile;
    else : ?>
        <p><?php esc_html_e( 'No results found.', 'straww' ); ?></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>