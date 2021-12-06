<?php

/**
 * @package cfashionstore Lite
 */
require_once get_template_directory() . "/hub/customizer/cfashionstore-lite-customization.php";
require_once get_template_directory() . "/hub/vendor/cfashionstore-lite-style-functions.php";
require_once get_template_directory() . "/hub/vendor/cfashionstore-lite-page-functions.php";

add_filter('wp_nav_menu_items', 'cfashionstore_lite_menucart', 10, 2);

if (!function_exists('wp_body_open')) {

    function wp_body_open() {
        do_action('wp_body_open');
    }

}

function cfashionstore_lite_menucart($menu, $args) {
    if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) || 'topmenu' !== $args->theme_location)
        return $menu;

    ob_start();
    global $woocommerce;
    $viewing_cart        = esc_attr__('View your shopping cart', 'cfashionstore-lite');
    $start_shopping      = esc_attr__('Start shopping', 'cfashionstore-lite');
    $cart_url            = $woocommerce->cart->get_cart_url();
    $shop_page_url       = get_permalink(wc_get_page_id('shop'));
    $cart_contents_count = $woocommerce->cart->cart_contents_count;
    /* translators: %d: item counts */
    $cart_contents       = sprintf(_n('%d item', '%d items', $cart_contents_count, 'cfashionstore-lite'), number_format_i18n($cart_contents_count));
    $cart_total          = $woocommerce->cart->get_cart_total();
    if ($cart_contents_count == 0) {
        $menu_item = '<li class="right"><a class="wcmenucart-contents" href="' . esc_url($shop_page_url) . '" title="' . $start_shopping . '">';
    } else {
        $menu_item = '<li class="right"><a class="wcmenucart-contents" href="' . esc_url($cart_url) . '" title="' . $viewing_cart . '">';
    }

    $menu_item .= '<i class="fa fa-shopping-cart"></i> ';

    $menu_item .= $cart_contents . ' - ' . $cart_total;
    $menu_item .= '</a></li>';
    return $menu . $menu_item;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'cfashionstore_lite_loop_columns');
if (!function_exists('cfashionstore_lite_loop_columns')) {

    function cfashionstore_lite_loop_columns() {
        return 4; // 3 products per row
    }

}

function cfashionstore_lite_skip_link_focus_fix() {
    echo '<script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
    </script>';

    //menu dropdown accessibility
    echo '<script type="text/javascript">

        jQuery(document).ready(function () {
            jQuery(".nav").cfashionstoreliteaccessibleDropDown();
        });

        jQuery.fn.cfashionstoreliteaccessibleDropDown = function () {
            var el = jQuery(this);

            /* Make dropdown menus keyboard accessible */

            jQuery("a", el).focus(function () {
                jQuery(this).parents("li").addClass("hover");
            }).blur(function () {
                jQuery(this).parents("li").removeClass("hover");
            });
        }
    </script>';
}

add_action('wp_print_footer_scripts', 'cfashionstore_lite_skip_link_focus_fix');


if (!function_exists('cfashionstore_lite_setup')) :

    function cfashionstore_lite_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('woocommerce');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('title-tag');
        register_nav_menus(array(
            'topmenu' => esc_html__('Top Account Menu', 'cfashionstore-lite'),
            'primary' => esc_html__('Primary Menu', 'cfashionstore-lite'),
            'footer'  => esc_html__('Footer Menu', 'cfashionstore-lite'),
        ));
        add_theme_support('custom-background', array(
            'default-color' => 'ffffff'
        ));

        $defaults = array(
            'default-image'      => get_template_directory_uri() . '/images/slider.jpg',
            'default-text-color' => 'ffffff',
            'width'              => 1400,
            'height'             => 500,
            'uploads'            => true,
            'wp-head-callback'   => 'cfashionstore_lite_header_style',
        );
        add_theme_support('custom-header', $defaults);

        /**
         * Add post-formats support.
         */
        add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        add_theme_support('jetpack-content-options', array(
            'blog-display'       => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
            'author-bio'         => true, // display or not the author bio: true or false.
            'author-bio-default' => false, // the default setting of the author bio, if it's being displayed or not: true or false (only required if false).
            'masonry'            => '.site-main', // a CSS selector matching the elements that triggers a masonry refresh if the theme is using a masonry layout.
            'post-details'       => array(
                'stylesheet' => 'themeslug-style', // name of the theme's stylesheet.
                'date'       => '.posted-on', // a CSS selector matching the elements that display the post date.
                'categories' => '.cat-links', // a CSS selector matching the elements that display the post categories.
                'tags'       => '.tags-links', // a CSS selector matching the elements that display the post tags.
                'author'     => '.byline', // a CSS selector matching the elements that display the post author.
                'comment'    => '.comments-link', // a CSS selector matching the elements that display the comment link.
            ),
            'featured-images'    => array(
                'archive'         => true, // enable or not the featured image check for archive pages: true or false.
                'archive-default' => false, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
                'post'            => true, // enable or not the featured image check for single posts: true or false.
                'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
                'page'            => true, // enable or not the featured image check for single pages: true or false.
                'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
            ),
        ));
    }

endif; // cfashionstore_lite_setup
add_action('after_setup_theme', 'cfashionstore_lite_setup');

//widget section
function cfashionstore_lite_widgets_init_footer() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'cfashionstore-lite'),
        'description'   => esc_html__('Appears on footer', 'cfashionstore-lite'),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-1 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'cfashionstore-lite'),
        'description'   => esc_html__('Appears on footer', 'cfashionstore-lite'),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-2 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 3', 'cfashionstore-lite'),
        'description'   => esc_html__('Appears on footer', 'cfashionstore-lite'),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'cfashionstore-lite'),
        'description'   => esc_html__('Appears on sidebar', 'cfashionstore-lite'),
        'id'            => 'sidebar-1',
        'before_widget' => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    ));
}

add_action('widgets_init', 'cfashionstore_lite_widgets_init_footer');
