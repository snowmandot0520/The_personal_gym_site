<?php
/**
 * Add a new page under Appearance
 */

function glossy_blog_getting_started_menu() {

	add_theme_page( esc_html__( 'Getting Started', 'glossy-blog' ), esc_html__( 'Getting Started', 'glossy-blog' ), 'edit_theme_options', 'glossy-blog-get-started', 'glossy_blog_getting_started_page' );
}
add_action( 'admin_menu', 'glossy_blog_getting_started_menu' );

/**
 * Enqueue styles for the help page.
 */
function glossy_blog_admin_scripts() {

	wp_enqueue_style( 'glossy-blog-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css', array(), GLOSSY_BLOG_VERSION );
}
add_action( 'admin_enqueue_scripts', 'glossy_blog_admin_scripts' );

/**
 * Add the theme page
 */
function glossy_blog_getting_started_page() { ?>

<div class="main-info">

	<?php get_template_part( 'inc/getting-started/template-parts/main', 'info' ); ?>

</div>
<div class="top-wrapper">

	<?php get_template_part( 'inc/getting-started/template-parts/free-vs', 'pro' ); ?>

	<?php get_template_part( 'inc/getting-started/template-parts/faq' ); ?>


</div>
	<?php
}