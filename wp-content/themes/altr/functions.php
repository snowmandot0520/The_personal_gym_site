<?php

/**
 * Function describe for Altr child
 * 
 * @package altr
 */
function altr_child_enqueue_styles() {

	$parent_style = 'entr-stylesheet';

	$dep = array( 'bootstrap' );
	if ( class_exists( 'WooCommerce' ) ) {
		$dep = array( 'bootstrap', 'entr-woo-stylesheet' );
	}

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array( 'bootstrap' ) );
	wp_enqueue_style( 'altr-stylesheet', get_stylesheet_directory_uri() . '/style.css', $dep, wp_get_theme()->get( 'Version' )
	);
}

add_action( 'wp_enqueue_scripts', 'altr_child_enqueue_styles' );

/**
 * Set the content width based on enabled sidebar
 */
function entr_main_content_width_columns() {

	$columns		 = '12';
	$hide_sidebar	 = get_post_meta( get_the_ID(), 'envo_extra_hide_sidebar', true );
	if ( is_active_sidebar( 'entr-right-sidebar' ) && is_singular() && $hide_sidebar == 'on' ) {
		$columns = '12';
	} elseif ( is_active_sidebar( 'entr-right-sidebar' ) ) {
		$columns = $columns - 4;
	}

	echo absint( $columns );
}

add_action( 'after_setup_theme', 'altr_setup' );

function altr_setup() {
  // Remove parent theme header fields
	remove_action( 'entr_header', 'entr_title_logo', 10 );
	remove_action( 'entr_header', 'entr_menu', 20 );
	remove_action( 'entr_header', 'entr_head_start', 25 );
	remove_action( 'entr_header', 'entr_head_end', 80 );
  remove_action('entr_header', 'entr_menu_button', 28);
  // Create child theme header
	add_action( 'altr_header', 'entr_head_start', 25 );
	add_action( 'altr_header', 'entr_head_end', 80 );
  add_action( 'altr_header', 'altr_heder_widget', 20 );
  add_action( 'altr_header', 'altr_title_logo', 10 );
  add_action( 'entr_header', 'altr_menu', 20 );
  add_action( 'altr_header', 'altr_heder_widget', 20 );
  add_action( 'altr_header', 'entr_menu_button', 28);
  
	if ( class_exists( 'WooCommerce' ) ) {
		// re-position WooCommerce icons
		remove_action( 'entr_header', 'entr_header_cart', 30 );
		remove_action( 'entr_header', 'entr_my_account', 40 );
		remove_action( 'entr_header', 'entr_head_wishlist', 50 );
		remove_action( 'entr_header', 'entr_head_compare', 60 );
		add_action( 'altr_header', 'entr_header_cart', 30 );
		add_action( 'altr_header', 'entr_my_account', 40 );
		add_action( 'altr_header', 'entr_head_wishlist', 50 );
		add_action( 'altr_header', 'entr_head_compare', 60 );
    // add WooCommerce search field
		add_action( 'entr_header', 'altr_menu_search_widget', 20 );
	}
  
  if (function_exists('entr_customizer')) { add_action( 'init', 'entr_customizer' ); 	} 
}


/**
 * Title, logo code
 */
function altr_title_logo() {
	?>
	<div class="site-heading">    
		<div class="site-branding-logo">
			<?php the_custom_logo(); ?>
		</div>
		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) :
				?>
				<p class="site-description">
					<?php echo esc_html( $description ); ?>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->
	</div>
	<?php
}

/**
 * Menu position change
 */
function altr_menu() {
	?>
	<div class="menu-heading">
		<nav id="site-navigation" class="navbar navbar-default">
			<?php
			wp_nav_menu( array(
				'theme_location'	 => 'main_menu',
				'depth'				 => 5,
				'container_id'		 => 'theme-menu',
				'container'			 => 'div',
				'container_class'	 => 'menu-container',
				'menu_class'		 => 'nav navbar-nav navbar-' . get_theme_mod( 'menu_position', 'left' ),
				'fallback_cb'		 => 'Entr_WP_Bootstrap_Navwalker::fallback',
				'walker'			 => new Entr_WP_Bootstrap_Navwalker(),
			) );
			?>
		</nav>
	</div>
	<?php
}

/**
 * Create WooCommerce search filed in header
 */
function altr_menu_search_widget() {
	?>
	<div class="menu-search-widget">
		<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
	</div>
	<?php
}

/**
 * Add header widget area
 */
function altr_heder_widget() {
	?>
	<div class="header-widget-area">
		<?php if ( is_active_sidebar( 'altr-header-area' ) ) { ?>
			<div class="site-heading-sidebar" >
				<?php dynamic_sidebar( 'altr-header-area' ); ?>
			</div>
		<?php } ?>
	</div>
	<?php
}

add_action( 'widgets_init', 'altr_widgets_init' );

/**
 * Register the Sidebars
 */
function altr_widgets_init() {
	register_sidebar(
  	array(
  		'name'			 => esc_html__( 'Header Section', 'altr' ),
  		'id'			 => 'altr-header-area',
  		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
  		'after_widget'	 => '</div>',
  		'before_title'	 => '<div class="widget-title"><h3>',
  		'after_title'	 => '</h3></div>',
  	) 
	);
  register_sidebar(
    array(
  		'name'			 => esc_html__( 'Top bar', 'altr' ),
  		'id'			 => 'altr-top-bar',
  		'before_widget'	 => '<div id="%1$s" class="widget %2$s col-sm-4">',
  		'after_widget'	 => '</div>',
  		'before_title'	 => '<div class="widget-title"><h3>',
  		'after_title'	 => '</h3></div>',
  	),
  );
}

if (!function_exists('altr_top_bar')) :

    /**
     * Create top bar widget area
     */
    add_action('altr_top_bar', 'altr_top_bar');

    function altr_top_bar() {
        if (is_active_sidebar('altr-top-bar')) { ?>
            <div class="top-bar-section container-fluid">
                <div class="<?php echo esc_attr(get_theme_mod('top_bar_content_width', 'container')); ?>">
                    <div class="row">
                        <?php dynamic_sidebar('altr-top-bar'); ?>
                    </div>
                </div>
            </div>
        <?php }
    }

endif;
