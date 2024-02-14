<?php

function glossy_blog_customizer_upgrade_to_pro( $wp_customize ) {

	$wp_customize->add_section( new Glossy_Blog_Button_Control( $wp_customize, 'upgrade-to-pro',	array(
		'title'    => esc_html__( '★ Glossy Blog Pro ', 'glossy-blog' ),
		'type'	=> 'button',
		'pro_text' => esc_html__( 'Upgrade to Pro', 'glossy-blog' ),
		'pro_url'  => esc_url( 'https://graphthemes.com/glossy-blog/' ),
		'priority' => 1
	) )	);

	
}
add_action( 'customize_register', 'glossy_blog_customizer_upgrade_to_pro' );


function glossy_blog_enqueue_custom_admin_style() {
        wp_register_style( 'glossy-blog-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.css', false );
        wp_enqueue_style( 'glossy-blog-button' );

        wp_enqueue_script( 'glossy-blog-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.js', array( 'jquery' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'glossy_blog_enqueue_custom_admin_style' );