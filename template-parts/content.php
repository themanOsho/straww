<?php
// File: template-parts/content.php
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">
        <?php the_content(); ?>
    </div>
</article>