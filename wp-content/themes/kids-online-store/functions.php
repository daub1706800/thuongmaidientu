<?php
/**
 * Kids Online Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kids Online Store
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Kids_Online_Store_Loader.php' );

$kids_online_store_loader = new \WPTRT\Autoload\Kids_Online_Store_Loader();

$kids_online_store_loader->kids_online_store_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$kids_online_store_loader->kids_online_store_register();

if ( ! function_exists( 'kids_online_store_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kids_online_store_setup() {

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'woocommerce' );
		
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

        add_image_size('kids-online-store-featured-header-image', 2000, 660, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary','kids-online-store' ),
	        'footer'=> esc_html__( 'Footer Menu','kids-online-store' ),
        ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
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
		add_theme_support( 'custom-background', apply_filters( 'kids_online_store_custom_background_args', array(
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
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
		) );

		add_editor_style( array( '/editor-style.css' ) );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'kids_online_store_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kids_online_store_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kids_online_store_content_width', 1170 );
}
add_action( 'after_setup_theme', 'kids_online_store_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kids_online_store_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kids-online-store' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'kids-online-store' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'kids-online-store' ),
		'id'            => 'kids-online-store-footer1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'kids-online-store' ),
		'id'            => 'kids-online-store-footer2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'kids-online-store' ),
		'id'            => 'kids-online-store-footer3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'kids_online_store_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kids_online_store_scripts() {

	wp_enqueue_style('kids-online-store-font', kids_online_store_font_url(), array());

	wp_enqueue_style( 'kids-online-store-block-editor-style', get_theme_file_uri('/assets/css/block-editor-style.css') );

	// load bootstrap css
    wp_enqueue_style( 'flatly-css', esc_url(get_template_directory_uri()) . '/assets/css/flatly.css');

	wp_enqueue_style( 'kids-online-store-style', get_stylesheet_uri() );

	wp_style_add_data('kids-online-store-style', 'rtl', 'replace');

	// fontawesome
	wp_enqueue_style( 'fontawesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome/css/all.css' );

	wp_enqueue_style( 'owl.carousel-css', esc_url(get_template_directory_uri()).'/assets/css/owl.carousel.css' );

    wp_enqueue_script('owl.carousel-js', esc_url(get_template_directory_uri()) . '/assets/js/owl.carousel.js', array('jquery'), '', true );

    wp_enqueue_script('kids-online-store-theme-js', esc_url(get_template_directory_uri()) . '/assets/js/theme-script.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kids_online_store_scripts' );

/**
 * Enqueue theme color style.
 */
function kids_online_store_theme_color() {

    $theme_color_css = '';
    $kids_online_store_theme_color_one = get_theme_mod('kids_online_store_theme_color_one');
    $kids_online_store_theme_color_two = get_theme_mod('kids_online_store_theme_color_two');

	$theme_color_css = '
		.main-navigation .sub-menu,.sidebar input[type="submit"],.btn-primary,.pro-button a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce .woocommerce-ordering select,.woocommerce-account .woocommerce-MyAccount-navigation ul li,.wp-block-button__link,.comment-respond input#submit,.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,.toggle-nav i,.slide-btn a:hover {
			background: '.esc_attr($kids_online_store_theme_color_one).';
		}
		a,.sidebar ul li a:hover,#colophon a:hover, #colophon a:focus,p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce-message::before, .woocommerce-info::before{
			color: '.esc_attr($kids_online_store_theme_color_one).';
		}
		.btn-primary,.woocommerce-message, .woocommerce-info,.wp-block-pullquote,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover{
			border-color: '.esc_attr($kids_online_store_theme_color_one).';
		}

		.sidebar h5,.sticky .entry-title::before,#button,#colophon{
			background: '.esc_attr($kids_online_store_theme_color_two).';
		}
		a:hover,.woocommerce ul.products li.product .star-rating{
			color: '.esc_attr($kids_online_store_theme_color_two).';
		}
		.sidebar section,.article-box,hr{
			border-color: '.esc_attr($kids_online_store_theme_color_two).';
		}
	';
    wp_add_inline_style( 'kids-online-store-style',$theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'kids_online_store_theme_color' );

/**
 * Enqueue S Header.
 */
function kids_online_store_sticky_header() {

    $kids_online_store_sticky_header = get_theme_mod('kids_online_store_sticky_header');

    $kids_online_store_custom_style= "";

    if($kids_online_store_sticky_header != true){

        $kids_online_store_custom_style .='.stick_header{';

            $kids_online_store_custom_style .='position: static;';
            
        $kids_online_store_custom_style .='}';
    } 

    wp_add_inline_style( 'kids-online-store-style',$kids_online_store_custom_style );

}
add_action( 'wp_enqueue_scripts', 'kids_online_store_sticky_header' );

function kids_online_store_font_url(){
	$font_url = '';
	$Baloo = _x('on','Baloo Chettan 2:on or off','kids-online-store');
	$Poppins = _x('on','Poppins:on or off','kids-online-store');
	
	if('off' !== $Baloo ){
		$font_family = array();
		if('off' !== $Baloo){
			$font_family[] = 'Baloo Chettan 2:wght@400;500;600;700;800';
		}	
		if('off' !== $Poppins){
			$font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
		}
		$query_args = array(
			'family'	=> urlencode(implode('|',$font_family)),
		);
		$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	}
	return $font_url;
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*dropdown page sanitization*/
function kids_online_store_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function kids_online_store_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function kids_online_store_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function kids_online_store_sanitize_checkbox( $input ) {
    // Boolean check 
    return ( ( isset( $input ) && true == $input ) ? true : false );
}