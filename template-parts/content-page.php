<?php
// File: template-parts/content-page.php
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <div class="entry">
        <?php the_content(); ?>
    </div>
</article>