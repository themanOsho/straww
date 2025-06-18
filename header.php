<?php
// File: header.php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo esc_attr( get_bloginfo('description', 'display') ); ?>">
    <meta name="author" content="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>">
    <meta name="robots" content="index, follow">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'straww' ); ?></a>
<header role="banner">
    <div class="site-header container">
        <?php if ( has_custom_logo() ) {
            the_custom_logo();
        } else { ?>
            <h1 class="sw-site-title"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } ?>
        <nav class="sw-nav" role="navigation">
            <?php wp_nav_menu([ 'theme_location' => 'primary' ]); ?>
        </nav>
    </div>
</header>
