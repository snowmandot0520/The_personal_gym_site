<?php
/**
 * The current version of the theme.
 */
$the_theme = wp_get_theme();
define('ENTR_VERSION', $the_theme->get( 'Version' ));

add_action('after_setup_theme', 'entr_setup');

if (!function_exists('entr_setup')) :

    /**
     * Global functions
     */
    function entr_setup() {

        // Theme lang.
        load_theme_textdomain('entr', get_template_directory() . '/languages');

        // Add Title Tag Support.
        add_theme_support('title-tag');

        // Register Menus.
		$menus = array('main_menu' => esc_html__('Main Menu', 'entr'));
        register_nav_menus($menus);

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300, 300, true);
        add_image_size('entr-img', 1140, 540, true);

        // Add Custom Background Support.
        $args = array(
            'default-color' => 'ffffff',
        );
        add_theme_support('custom-background', $args);

        add_theme_support('custom-logo', array(
            'height' => 60,
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        // Adds RSS feed links to for posts and comments.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');

        // Set the default content width.
        $GLOBALS['content_width'] = 1140;

        add_theme_support('custom-header', apply_filters('entr_custom_header_args', array(
            'width' => 2000,
            'height' => 60,
            'default-text-color' => '',
            'wp-head-callback' => 'entr_header_style',
        )));

        // WooCommerce support.
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
        add_theme_support('html5', array('search-form'));
		    add_theme_support('align-wide');
        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        add_editor_style(array('assets/css/bootstrap.css', entr_fonts_url(), 'assets/css/editor-style.css'));

    }

endif;

if (!function_exists('entr_header_style')) :

    /**
     * Styles the header image and text displayed on the blog.
     */
    function entr_header_style() {
        $header_image = get_header_image();
        $header_text_color = get_header_textcolor();
        if (get_theme_support('custom-header', 'default-text-color') !== $header_text_color || !empty($header_image)) {
            ?>
            <style type="text/css" id="entr-header-css">
            <?php
            // Has a Custom Header been added?
            if (!empty($header_image)) :
                ?>
                    .site-header {
                        background-image: url(<?php header_image(); ?>);
                        background-repeat: no-repeat;
                        background-position: 50% 50%;
                        -webkit-background-size: cover;
                        -moz-background-size:    cover;
                        -o-background-size:      cover;
                        background-size:         cover;
                    }
            <?php endif; ?>	
            <?php
            // Has the text been hidden?
            if ('blank' === $header_text_color) :
                ?>
                    .site-title,
                    .site-description {
                        position: absolute;
                        clip: rect(1px, 1px, 1px, 1px);
                    }
            <?php elseif ('' !== $header_text_color) : ?>
                    .site-title a, 
                    .site-title, 
                    .site-description {
                        color: #<?php echo esc_attr($header_text_color); ?>;
                    }
            <?php endif; ?>	
            </style>
            <?php
        }
    }

endif; // entr_header_style

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function entr_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'entr_pingback_header');

/**
 * Set Content Width
 */
function entr_content_width() {

    $content_width = $GLOBALS['content_width'];

    if (is_active_sidebar('entr-right-sidebar')) {
        $content_width = 847;
    } else {
        $content_width = 1140;
    }

    /**
     * Filter content width of the theme.
     */
    $GLOBALS['content_width'] = apply_filters('entr_content_width', $content_width);
}

add_action('template_redirect', 'entr_content_width', 0);

/**
 * Register custom fonts.
 */
function entr_fonts_url() {
    $fonts_url = '';

    /**
     * Translators: If there are characters in your language that are not
     * supported by Lato, translate this to 'off'. Do not translate
     * into your own language.
     */
    $font = get_theme_mod('main_typographydesktop', '');

    if ('' == $font) {
        $font_families = array();

        $font_families[] = 'Lato:300,400,700,900';

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese'),
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

    return esc_url_raw($fonts_url);
}

/**
 * Add preconnect for Google Fonts.
 */
function entr_resource_hints($urls, $relation_type) {
    if (wp_style_is('entr-fonts', 'queue') && 'preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}

add_filter('wp_resource_hints', 'entr_resource_hints', 10, 2);

/**
 * Enqueue Styles (normal style.css and bootstrap.css)
 */
function entr_theme_stylesheets() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('entr-fonts', entr_fonts_url(), array(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array('hc-offcanvas-nav'), '3.3.7');
	  wp_enqueue_style('hc-offcanvas-nav', get_template_directory_uri() . '/assets/css/hc-offcanvas-nav.min.css', array(), ENTR_VERSION);
    // Theme stylesheet.
    wp_enqueue_style('entr-stylesheet', get_stylesheet_uri(), array('bootstrap'), ENTR_VERSION);
    // WooCommerce stylesheet.
	if (class_exists('WooCommerce')) {
		wp_enqueue_style('entr-woo-stylesheet', get_template_directory_uri() . '/assets/css/woocommerce.css', array('entr-stylesheet', 'woocommerce-general'), ENTR_VERSION);
	}
    // Load Line Awesome css.
    wp_enqueue_style('line-awesome', get_template_directory_uri() . '/assets/css/line-awesome.min.css', array(), '1.3.0');
}

add_action('wp_enqueue_scripts', 'entr_theme_stylesheets');

/**
 * Register jquery
 */
function entr_theme_js() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script('entr-theme-js', get_template_directory_uri() . '/assets/js/entr.js', array('jquery'), ENTR_VERSION, true);
	wp_enqueue_script('hc-offcanvas-nav', get_template_directory_uri() . '/assets/js/hc-offcanvas-nav.min.js', array('jquery'), ENTR_VERSION, true);
}

add_action('wp_enqueue_scripts', 'entr_theme_js');

if ( !function_exists( 'entr_envo_extra_is_activated' ) ) {

	/**
	 * Query Entr extra activation
	 */
	function entr_envo_extra_is_activated() {
		return defined( 'ENVO_EXTRA_CURRENT_VERSION' ) ? true : false;
	}

}

if (!function_exists('entr_title_logo')) {
    
	add_action('entr_header', 'entr_title_logo', 10);
    /**
     * Title, logo code
     */
    function entr_title_logo() {
        ?>
        <div class="site-heading" >    
            <div class="site-branding-logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="site-branding-text">
                <?php if (is_front_page()) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>

                <?php
                $description = get_bloginfo('description', 'display');
                if ($description || is_customize_preview()) :
                    ?>
                    <p class="site-description">
                        <?php echo esc_html($description); ?>
                    </p>
                <?php endif; ?>
            </div><!-- .site-branding-text -->
        </div>
        <?php
    }

}

if (!function_exists('entr_menu')) {

		add_action('entr_header', 'entr_menu', 20);


    /**
     * Menu
     */
    function entr_menu() {
        ?>
        <div class="menu-heading">
            <div id="site-navigation" class="navbar navbar-default">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'depth' => 5,
                    'container_id' => 'theme-menu',
                    'container' => 'nav',
                    'container_class' => 'menu-container',
                    'menu_class' => 'nav navbar-nav navbar-' . get_theme_mod('menu_position', 'right'),
                    'fallback_cb' => 'Entr_WP_Bootstrap_Navwalker::fallback',
                    'walker' => new Entr_WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </div>
        <?php
    }

}

add_action('entr_header', 'entr_head_start', 25);
function entr_head_start() {
    echo '<div class="header-right" >';
}

add_action('entr_header', 'entr_head_end', 80);
function entr_head_end() {
    echo '</div>';
}
if (!function_exists('entr_menu_button')) {
    
	add_action('entr_header', 'entr_menu_button', 28);
    /**
     * Mobile menu button
     */
    function entr_menu_button() {
        ?>
        <div class="menu-button visible-xs" >
            <div class="navbar-header">
				<a href="#" id="main-menu-panel" class="toggle menu-panel" data-panel="main-menu-panel">
					<span></span>
				</a>
            </div>
        </div>
        <?php
    }
}

/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */
require_once( trailingslashit(get_template_directory()) . 'lib/wp_bootstrap_navwalker.php' );

/**
 * Register Theme Info Page
 */
require_once( trailingslashit(get_template_directory()) . 'lib/entr-dashboard.php' );
if ( is_admin() ) {
	require_once( trailingslashit( get_template_directory() ) . 'lib/entr-plugin-install.php' );
}
if ( entr_envo_extra_is_activated() ) {
	add_action( 'init', 'envo_extra_dashboard' );
	add_action( 'init', 'envo_extra_recommended_plugins' );
}

if (class_exists('WooCommerce')) {

    /**
     * WooCommerce options
     */
    require_once( trailingslashit(get_template_directory()) . 'lib/woocommerce.php' );
}

/**
 * Customizer options
 */
if (!function_exists('entr_customizer')) {

    function entr_customizer() {
	
		require_once( trailingslashit(get_template_directory()) . 'lib/customizer-recommend.php' );
    
	}
	if ( !is_child_theme() ) {
		add_action( 'init', 'entr_customizer' );
	}
	
}

require_once( trailingslashit(get_template_directory()) . 'lib/extra.php' );

add_action('widgets_init', 'entr_widgets_init');

/**
 * Register the Sidebar(s)
 */
function entr_widgets_init() {
    register_sidebar(
            array(
                'name' => esc_html__('Sidebar', 'entr'),
                'id' => 'entr-right-sidebar',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="widget-title"><h3>',
                'after_title' => '</h3></div>',
            )
    );
    register_sidebar(
            array(
                'name' => esc_html__('Footer Section', 'entr'),
                'id' => 'entr-footer-area',
                'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3">',
                'after_widget' => '</div>',
                'before_title' => '<div class="widget-title"><h3>',
                'after_title' => '</h3></div>',
            )
    );
}


if (!function_exists('wp_body_open')) :

    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     *
     */
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         *
         */
        do_action('wp_body_open');
    }

endif;

/**
 * Skip to content link
 */
function entr_skip_link() {
    echo '<a class="skip-link screen-reader-text" href="#site-content">' . esc_html__('Skip to the content', 'entr') . '</a>';
}

add_action('wp_body_open', 'entr_skip_link', 5);
