<?php
// File: template-parts/breadcrumbs.php

if ( function_exists( 'yoast_breadcrumb' ) ) {
    yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
} elseif ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
    rank_math_the_breadcrumbs();
} else {
    echo '<nav class="breadcrumb"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'straww' ) . '</a></nav>';
}