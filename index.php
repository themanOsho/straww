<?php
// File: index.php

get_header(); ?>

<main id="main-content" class="container" role="main">
    <?php get_template_part( 'template-parts/breadcrumbs' ); ?>

    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );
        endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'straww'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>