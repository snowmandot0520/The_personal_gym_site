<?php

add_action( 'customize_register', 'glossy_blog_site_identity_font_size' );
function glossy_blog_site_identity_font_size( $wp_customize ) {

    $wp_customize->add_setting( 'site_identity_font_size', array(
        'default'     => glossy_blog_get_default_site_identity_font_size(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'site_identity_font_size', array(
        'type'        => 'number',
        'settings'    => 'site_identity_font_size',
        'label'       =>  esc_html__( 'Site Identity Size', 'glossy-blog' ),
        'section'     => 'title_tagline',
        'input_attrs' => array(
            'min' => 10,
            'max' => 40
        )
    ) );

}

add_action( 'customize_preview_init', 'glossy_blog_site_identity_font_size_enqueue_scripts' );
function glossy_blog_site_identity_font_size_enqueue_scripts() {
    wp_enqueue_script( 'graphthemes-site-identity-font-size-customizer', get_template_directory_uri() . '/inc/blocks/font-customization/site-identity-font-size/customizer-site-identity-font-size.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'glossy_blog_site_identity_font_size_dynamic_css' );
function glossy_blog_site_identity_font_size_dynamic_css() {

    $site_identity_font_size = esc_attr( get_theme_mod( 'site_identity_font_size', glossy_blog_get_default_site_identity_font_size() ) );
    $site_identity_font_size .= 'px';

    $dynamic_css = ":root { --site-identity-font-size: $site_identity_font_size; }";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}