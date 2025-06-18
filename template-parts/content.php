<?php
// File: template-parts/content.php
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
    <div class="entry">
        <?php
        the_content();
        // Add lazy-loading to all images in post content
        add_filter('the_content', function($content) {
            $content = preg_replace('/<img(.*?)>/', '<img$1 loading="lazy">', $content);
            return $content;
        });
        ?>
    </div>
</article>
