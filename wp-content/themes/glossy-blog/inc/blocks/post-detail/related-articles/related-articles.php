<?php

add_action( 'customize_register', 'glossy_blog_post_detail_related_articles' );
function glossy_blog_post_detail_related_articles( $wp_customize ) {

	$wp_customize->add_setting( 'post_detail_hide_show_related_articles', array(
        'sanitize_callback'     =>  'glossy_blog_sanitize_checkbox',
        'default'               =>  glossy_blog_get_default_post_detail_related_articles()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_detail_hide_show_related_articles', array(
        'label' => esc_html__( 'Show/Hide Related Articles','glossy-blog' ),
        'section' => 'glossy_blog_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_related_articles',
        'type'=> 'toggle',
    ) ) );

}

add_action( 'customize_register', 'glossy_blog_post_detail_related_articles_title' );
function glossy_blog_post_detail_related_articles_title( $wp_customize ) {
    $wp_customize->add_setting( 'post_detail_related_articles_title', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  glossy_blog_get_default_post_detail_related_articles_title()
    ) );

    $wp_customize->add_control( 'post_detail_related_articles_title', array(
        'settings' => 'post_detail_related_articles_title',
        'type' => 'text',
        'section' => 'glossy_blog_post_detail_customization_section',
        'label' => esc_html__( 'Related Articles Title', 'glossy-blog' ),
        'active_callback' => function() {
            return get_theme_mod( 'post_detail_hide_show_related_articles', glossy_blog_get_default_post_detail_related_articles() );
        }
    ) );
}