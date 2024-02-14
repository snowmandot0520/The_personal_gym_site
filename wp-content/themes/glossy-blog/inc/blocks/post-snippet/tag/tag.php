<?php

add_action( 'customize_register', 'glossy_blog_post_snippet_tag' );
function glossy_blog_post_snippet_tag( $wp_customize ) {

	$wp_customize->add_setting( 'post_snippet_hide_show_tag', array(
        'sanitize_callback'     =>  'glossy_blog_sanitize_checkbox',
        'default'               =>  glossy_blog_get_default_post_snippet_tag()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_snippet_hide_show_tag', array(
        'label' => esc_html__( 'Show/Hide Tags','glossy-blog' ),
        'section' => 'glossy_blog_post_snippet_customization_section',
        'settings' => 'post_snippet_hide_show_tag',
        'type'=> 'toggle',
    ) ) );

}