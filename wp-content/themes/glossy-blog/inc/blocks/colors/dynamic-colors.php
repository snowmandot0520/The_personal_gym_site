<?php

add_action( 'wp_enqueue_scripts', 'glossy_blog_site_title_color_dynamic_css' );
function glossy_blog_site_title_color_dynamic_css() {

	$site_title_color = esc_attr( get_theme_mod( 'site_title_color_option', glossy_blog_get_default_site_title_color() ) );

	$dynamic_css = ":root { --site-title-color: $site_title_color; }";

	wp_add_inline_style( 'glossy-blog', $dynamic_css );
}

add_action( 'wp_enqueue_scripts', 'glossy_blog_secondary_color_dynamic_css' );
function glossy_blog_secondary_color_dynamic_css() {

    $secondary_color = esc_attr( get_theme_mod( 'secondary_color', glossy_blog_get_default_secondary_color() ) );

    $dynamic_css = ":root { --secondary-color: $secondary_color; }";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}

add_action( 'wp_enqueue_scripts', 'glossy_blog_primary_color_dynamic_css' );
function glossy_blog_primary_color_dynamic_css() {

    $primary_color = esc_attr( get_theme_mod( 'primary_color', glossy_blog_get_default_primary_color() ) );

    $dynamic_css = ":root { --primary-color: $primary_color; }";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}


add_action( 'wp_enqueue_scripts', 'glossy_blog_light_color_dynamic_css' );
function glossy_blog_light_color_dynamic_css() {

    $light_color = esc_attr( get_theme_mod( 'light_color', glossy_blog_get_default_light_color() ) );

    $dynamic_css = ":root { --light-color: $light_color; }";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}

add_action( 'wp_enqueue_scripts', 'glossy_blog_grey_color_dynamic_css' );
function glossy_blog_grey_color_dynamic_css() {

    $grey_color = esc_attr( get_theme_mod( 'grey_color', glossy_blog_get_default_grey_color() ) );

    $dynamic_css = ":root { --grey-color: $grey_color; }";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}

add_action( 'wp_enqueue_scripts', 'glossy_blog_dark_color_dynamic_css' );
function glossy_blog_dark_color_dynamic_css() {

    $dark_color = esc_attr( get_theme_mod( 'dark_color', glossy_blog_get_default_dark_color() ) );

    $dynamic_css = ":root { --dark-color: $dark_color; }";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}