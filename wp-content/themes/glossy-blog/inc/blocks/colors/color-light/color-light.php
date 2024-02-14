<?php

add_action( 'customize_register', 'glossy_blog_light_color' );

function glossy_blog_light_color( $wp_customize ) {
    $wp_customize->add_setting( 'light_color', array(
        'default'     => glossy_blog_get_default_light_color(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'light_color', array(
        'label'      => esc_html__( 'Light Color', 'glossy-blog' ),
        'section'    => 'colors',
        'settings'   => 'light_color',
        
    ) ) );

}


add_action( 'customize_preview_init', 'glossy_blog_light_color_enqueue_scripts' );
function glossy_blog_light_color_enqueue_scripts() {
    wp_enqueue_script( 'graphthemes-light-customizer', get_template_directory_uri() . '/inc/blocks/colors/color-light/customizer-color-light.js', array('jquery'), '', true );
}