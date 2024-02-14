<?php

add_action( 'wp_enqueue_scripts', 'glossy_blog_sticky_menu_background_color' );
function glossy_blog_sticky_menu_background_color() {

    $bg_color = get_theme_mod( 'background_color', get_theme_support( 'custom-background', 'default-color' ) );

    $dynamic_css = "body{background:#$bg_color;}";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}