<?php
// File: header.php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="site-header container">
        <?php if ( has_custom_logo() ) {
            the_custom_logo();
        } else { ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } ?>
        <nav>
            <?php wp_nav_menu([ 'theme_location' => 'primary' ]); ?>
        </nav>
    </div>
</header>