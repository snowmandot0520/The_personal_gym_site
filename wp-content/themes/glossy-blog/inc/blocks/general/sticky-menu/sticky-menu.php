<?php

add_action( 'customize_register', 'glossy_blog_sticky_menu' );
function glossy_blog_sticky_menu( $wp_customize ) {

	$wp_customize->add_setting('glossy_blog_sticky_menu_option', array(
        'sanitize_callback'     =>  'glossy_blog_sanitize_checkbox',
        'default'               =>  glossy_blog_get_default_sticky_menu(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'glossy_blog_sticky_menu_option', array(
        'label' => esc_html__('Enable Sticky Menu', 'glossy-blog'),
        'section' => 'glossy_blog_general_customization_section',
        'settings' => 'glossy_blog_sticky_menu_option',
        'type' => 'toggle',
    )));

}