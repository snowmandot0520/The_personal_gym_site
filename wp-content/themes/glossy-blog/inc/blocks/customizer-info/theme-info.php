<?php

add_action( 'customize_register', 'glossy_blog_customizer_theme_info' );

function glossy_blog_customizer_theme_info( $wp_customize ) {
	
    $wp_customize->add_section( 'glossy_blog_theme_info_section' , array(
		'title'       => esc_html__( '❂ Theme Info' , 'glossy-blog' ),
		'priority' => 2
	) );
    

	$wp_customize->add_setting( 'theme_info', array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
    
    $theme_info = '';
	
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Theme Details', 'glossy-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/glossy-blog/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'glossy-blog' ) . '</a></span><hr>';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'How to use', 'glossy-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/theme-docs/glossy-blog/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'glossy-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'View Demo', 'glossy-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/preview/?product_id=glossy-blog' ) . '" target="_blank">' . esc_html__( 'Click Here', 'glossy-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Support Forum', 'glossy-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://wordpress.org/support/theme/glossy-blog' ) . '" target="_blank">' . esc_html__( 'Click Here', 'glossy-blog' ) . '</a></span><hr>';

	$wp_customize->add_control( new Glossy_Blog_Custom_Text( $wp_customize ,'theme_info',array(
		'section' => 'glossy_blog_theme_info_section',
		'label' => $theme_info
	) ) );

}