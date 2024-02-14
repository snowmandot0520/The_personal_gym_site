<?php

add_action( 'customize_register', 'glossy_blog_container_width' );
function glossy_blog_container_width( $wp_customize ) {

	$wp_customize->add_setting('container_width', array(
        'default'           => glossy_blog_get_default_container_width(),
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control( 'container_width', array(
        'label'       => esc_html__('Container Width', 'glossy-blog'),
        'section'     => 'glossy_blog_general_customization_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min' => 1000,
            'max' => 1600
        ) )
    );

}



add_action( 'customize_preview_init', 'glossy_blog_container_width_enqueue_scripts' );
function glossy_blog_container_width_enqueue_scripts() {
    wp_enqueue_script( 'graphthemes-container-width-customizer', get_template_directory_uri() . '/inc/blocks/general/container-width/customizer-container-width.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'glossy_blog_container_width_dynamic_css' );
function glossy_blog_container_width_dynamic_css() {

    $container_width = esc_attr( get_theme_mod( 'container_width', glossy_blog_get_default_container_width() ) );
    $container_width .= 'px';

    $dynamic_css = ":root { --container-width: $container_width; }";

    wp_add_inline_style( 'glossy-blog', $dynamic_css );
}