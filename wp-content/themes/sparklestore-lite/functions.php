<?php
/**
 * Describe child theme functions
 *
 * @package SparkleStore
 * @subpackage SparkleStore Lite
 * 
 */

/*-------------------------------------------------------------------------------------------------------------------------------*/
if ( ! function_exists( 'sparklestore_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sparklestore_lite_setup() {
    
    $sparklestore_lite_theme_info = wp_get_theme();
    $GLOBALS['sparklestore_lite_version'] = $sparklestore_lite_theme_info->get( 'Version' );
}
endif;

add_action( 'after_setup_theme', 'sparklestore_lite_setup' );


/**
 * Register Google fonts for News Portal Lite.
 *
 * @return string Google fonts URL for the theme.
 * @since 1.0.0
 */
if ( ! function_exists( 'sparklestore_lite_fonts_url' ) ) :
    function sparklestore_lite_fonts_url() {

        $fonts_url = '';
        $font_families = array();

        /*
         * Translators: If there are characters in your language that are not supported
         * by Open+Sans, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Open+Sans font: on or off', 'sparklestore-lite' ) ) {
            $font_families[] = 'Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
        } 

        /*
         * Translators: If there are characters in your language that are not supported
         * by Raleway, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'sparklestore-lite' ) ) {
            $font_families[] = 'Raleway:100,200,200i,300,400,500,600,700,800';
        }

        if( $font_families ) {
            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );

            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }

        return $fonts_url;
    }
endif;

/**
 * Enqueue child theme styles and scripts
*/
add_action( 'wp_enqueue_scripts', 'sparklestore_lite_scripts', 20 );

function sparklestore_lite_scripts() {
    
    global $sparklestore_lite_version;

    wp_enqueue_style( 'sparkleStore-lite-google-font', sparklestore_lite_fonts_url(), array(), null );
    
    wp_dequeue_style( 'sparklestore-style' );
    
	wp_enqueue_style( 'sparklestore-parent-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/style.css', array(), esc_attr( $sparklestore_lite_version ) );

    wp_enqueue_style( 'sparklestore-lite-style', get_stylesheet_uri(), array(), esc_attr( $sparklestore_lite_version ) );
    
}