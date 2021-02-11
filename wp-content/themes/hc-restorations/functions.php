<?php
/**
 * HC Restorations functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HC_Restorations
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hc_restorations_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hc_restorations_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on HC Restorations, use a find and replace
		 * to change 'hc-restorations' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hc-restorations', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'hc-restorations' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'hc_restorations_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'hc_restorations_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hc_restorations_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hc_restorations_content_width', 640 );
}
add_action( 'after_setup_theme', 'hc_restorations_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hc_restorations_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hc-restorations' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hc-restorations' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hc_restorations_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hc_restorations_scripts() {
	wp_enqueue_style( 'hc-restorations-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hc-restorations-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hc-restorations-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hc_restorations_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* enqueue custom styles */
function ah_enqueue(){
	$uri = get_template_directory_uri();
	wp_register_style('ah_google_fonts_1', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@300;400;600&display=swap');
	wp_register_style('ah_google_fonts_2', 'https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap');
    wp_register_style('ah_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
    wp_register_style('ah_font_awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=5.4.4');
    wp_register_style('ah_main', $uri . '/css/main.css?');
	wp_register_style('ah_hamburger', $uri . '/css/hamburgers.css?');
	

	wp_enqueue_style('ah_google_fonts_1');
	wp_enqueue_style('ah_google_fonts_2');
    wp_enqueue_style('ah_bootstrap');
    wp_enqueue_style('ah_font_awesome');
    wp_enqueue_style('ah_main');
	wp_enqueue_style('ah_hamburger');
	

	//wp_register_script('ah_jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
	wp_register_script('ah_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', [], false, true);
    wp_register_script('ah_popper', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_register_script('ah_mainjs', $uri . '/js/main.js?'.uniqid(), [], false, true);


	wp_enqueue_script('ah_jquery');
    wp_enqueue_script('ah_popper');
    wp_enqueue_script('ah_mainjs');

}

add_action( 'wp_enqueue_scripts', 'ah_enqueue' );
/* enqueue custom styles */

/* Enable SVG Support */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
/* Enable SVG Support */

// 1. download the navwalker class from: https://github.com/wp-bootstrap/wp-bootstrap-navwalker
// 2. add the class-wp-bootstrap-navwalker.php to the root of the theme folder
// 3. add require once to include the navwalker class (below)
// https://code.tutsplus.com/tutorials/how-to-integrate-a-bootstrap-navbar-into-a-wordpress-theme--wp-33410
require_once('class-wp-bootstrap-navwalker.php');


/* Customizer Additional Fields */
include( get_theme_file_path('/includes/theme-customizer.php') );
add_action('customize_register', 'ah_customize_register');
/* Customizer Additional Fields */

