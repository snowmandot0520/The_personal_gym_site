<?php

add_action( 'customize_register', 'glossy_blog_font_size' );
function glossy_blog_font_size( $wp_customize ) {

    $wp_customize->add_setting( 'font_size', array(
        'default'     => glossy_blog_get_default_font_size(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'font_size', array(
        'type'        => 'number',
        'settings'    => 'font_size',
        'label'       =>  esc_html__( 'Body Font Size', 'glossy-blog' ),
        'section'     => 'glossy_blog_font_customization_section',
        'input_attrs' => array(
            'min' => 1,
            'max' => 30
        )
    ) );

}

add_action( 'customize_preview_init', 'glossy_blog_font_size_enqueue_scripts' );
function glossy_blog_font_size_enqueue_scripts() {
    wp_enqueue_script( 'graphthemes-font-size-customizer', get_template_directory_uri() . '/inc/blocks/font-customization/font-size/customizer-font-size.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'glossy_blog_font_size_dynamic_css' );
function glossy_blog_font_size_dynamic_css() {

    $font_size = esc_attr( get_theme_mod( 'font_size', glossy_blog_get_default_font_size() ) );
    $font_size .= 'px';

    $dynamic_css = "html,body{font-size:{$font_size};}";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}