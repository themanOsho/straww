<?php
// File: template-parts/content-page.php
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1><?php echo esc_html( get_the_title() ); ?></h1>
    <div class="entry">
        <?php the_content(); ?>
    </div>
</article>