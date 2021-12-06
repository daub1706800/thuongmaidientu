<?php
/**
 * niva store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package niva_store
 */

if ( ! defined( 'niva_store_theme_version' ) ) {
	// Replace the version number of the theme on each release.
	define( 'niva_store_theme_version', '1.0.0' );
}

if ( ! function_exists( 'niva_store_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function niva_store_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on niva store, use a find and replace
		 * to change 'niva-store' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'niva-store', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1200, 9999 ); // up to 1200 pixels wide and unlimited height

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'niva-store' ),
				'social' => esc_html__( 'Social', 'niva-store' ),
				'footer' => esc_html__( 'Footer', 'niva-store' ),
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
add_action( 'after_setup_theme', 'niva_store_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function niva_store_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'niva_store_content_width', 1140 );
}
add_action( 'after_setup_theme', 'niva_store_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function niva_store_scripts() {
	// Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( 'niva-store-fonts', niva_store_fonts_url(), array(), null );

	// Add Font Awesome Icons. Unminified version included.
  wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/inc/libraries/fontawesome/css/all.min.css', array(), '5.12.2' );

	// Load our responsive stylesheet based on Bootstrap. Unminified version included.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( ), '4.0.0' );

	// lightslider css
	wp_enqueue_style( 'niva-store-lightslider-css', get_template_directory_uri() . '/css/lightslider.min.css', array( ), '1.1.3' );	

	// bbpress css 
	wp_enqueue_style( 'niva-store-bbpress-css', get_template_directory_uri() . '/css/custom-bbpress.css', array( ), niva_store_theme_version );	

	wp_enqueue_style( 'niva-store-style', get_stylesheet_uri(), array(), niva_store_theme_version );
	wp_style_add_data( 'niva-store-style', 'rtl', 'replace' );

	wp_enqueue_script( 'niva-store-navigation', get_template_directory_uri() . '/js/navigation.js', array(), niva_store_theme_version, true );

	// lightslider
	wp_enqueue_script( 'niva-store-light-slider', get_template_directory_uri() . '/js/lightslider.min.js', array(), '1.1.6', true );

	// custom scripts
	wp_enqueue_script( 'niva-store-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '1.0.0', true );

	// for screenreader scropt
	wp_localize_script( 'niva-store-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'niva-store' ),
		'collapse' => __( 'collapse child menu', 'niva-store' ),
	) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'niva_store_scripts' );

/**
 * Enque admin script
 */
add_action( 'admin_enqueue_scripts', 'niva_store_admin_scripts' );

function niva_store_admin_scripts( $hook ) {

    global $wp_diary_theme_version;

    if( 'widgets.php' != $hook && 'customize.php' != $hook && 'edit.php' != $hook && 'post.php' != $hook && 'post-new.php' != $hook ) {
        return;
    }

    wp_enqueue_script( 'jquery-ui-button' );

    wp_enqueue_script( 'niva-store--admin-script', get_template_directory_uri() .'/js/nivastore_admin_script.js', array( 'jquery' ), '1.0.0', true );

}


/**
 * Register Google fonts.
 * @return string Google fonts URL for the theme.
 */

if ( ! function_exists( 'niva_store_fonts_url' ) ) :
	function niva_store_fonts_url() {
		$niva_store_fonts_url = '';
		$niva_store_fonts     = array();
		$niva_store_subsets   = 'cyrillic,cyrillic-ext';
			
		// Translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. 
		if ( 'off' !== esc_html_x( 'on', 'Open Sans font: on or off', 'niva-store' ) ) {
			$niva_store_fonts[] = 'Open Sans:300,400,600,700';
		}	
		
		if ( $niva_store_fonts ) {
			$niva_store_fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $niva_store_fonts ) ),
				'subset' => urlencode( $niva_store_subsets ),
			), 'https://fonts.googleapis.com/css' );
		}
		return $niva_store_fonts_url;
	}
	endif;


/**
 * Load Sidebar and initialize custom widgets.
 */
require get_template_directory() . '/inc/widgets/sidebars.php';

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
 * extra functions
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load custom widgets.
 */
require get_template_directory() . '/inc/widgets/nivastore-widget-functions.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( niva_store_is_active_woocommerce() ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/** Theme info page */

require get_template_directory() . '/inc/admin/class-theme-info.php';