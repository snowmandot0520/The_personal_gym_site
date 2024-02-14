<?php

add_action( 'customize_register', 'glossy_blog_post_detail_category' );
function glossy_blog_post_detail_category( $wp_customize ) {

	$wp_customize->add_setting( 'post_detail_hide_show_category', array(
        'sanitize_callback'     =>  'glossy_blog_sanitize_checkbox',
        'default'               =>  glossy_blog_get_default_post_detail_category()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_detail_hide_show_category', array(
        'label' => esc_html__( 'Show/Hide Categories','glossy-blog' ),
        'section' => 'glossy_blog_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_category',
        'type'=> 'toggle',
    ) ) );

}