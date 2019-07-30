<?php
/**
 * Two Blue functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Two_Blue
 */

if ( ! function_exists( 'two_blue_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function two_blue_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Two Blue, use a find and replace
		 * to change 'two-blue' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'two-blue', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'two-blue' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'two_blue_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'two_blue_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function two_blue_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'two_blue_content_width', 640 );
}
add_action( 'after_setup_theme', 'two_blue_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function two_blue_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'two-blue' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Footer Column 1', 'two-blue' ),
		'before_widget' => '<div class="my-1">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'two-blue' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Footer Column 2', 'two-blue' ),
		'before_widget' => '<div class="my-1">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'two-blue' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Footer Column 3', 'two-blue' ),
		'before_widget' => '<div class="my-1">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1 Normal', 'two-blue' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Footer Column 1, Normal Footer', 'two-blue' ),
		'before_widget' => '<div class="my-1">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'two_blue_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function two_blue_scripts() {
	wp_enqueue_style( 'two-blue-style', get_stylesheet_uri() );
    wp_enqueue_script( 'owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true );
    wp_enqueue_script( 'two-blue-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.min.js', array(), '3.0.5', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'two_blue_scripts' );

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

function excerpt_readmore($more) {
  return '...';
}
add_filter('excerpt_more', 'excerpt_readmore');


function tn_custom_excerpt_length( $length ) {
  return 15;
  }
  add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

  /**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
add_theme_support('soil-clean-up');
add_theme_support('soil-disable-rest-api');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-js-to-footer');
// add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');