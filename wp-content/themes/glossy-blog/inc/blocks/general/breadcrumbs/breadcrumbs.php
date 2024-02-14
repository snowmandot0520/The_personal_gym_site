<?php

add_action( 'customize_register', 'glossy_blog_breadcrumbs' );
function glossy_blog_breadcrumbs( $wp_customize ) {

	$wp_customize->add_setting('glossy_blog_breadcrumbs_option', array(
        'sanitize_callback'     =>  'glossy_blog_sanitize_checkbox',
        'default'               =>  glossy_blog_get_default_breadcrumbs(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'glossy_blog_breadcrumbs_option', array(
        'label' => esc_html__('Enable Breadcrumbs', 'glossy-blog'),
        'section' => 'glossy_blog_general_customization_section',
        'settings' => 'glossy_blog_breadcrumbs_option',
        'type' => 'toggle',
    )));

}