<?php

/**
 * Enqueue scripts and styles.
 */
function opstore_scripts() {
    /*Opstore Styles */
    $opstore_preloader_option   = get_theme_mod('opstore_preloader_option','show');
    $sidebar_sticky             = get_theme_mod( 'opstore_sticky_sidebar_option','show' );
    $smoothscroll               = get_theme_mod( 'opstore_smooth_scroll_option','show' );

    if( $opstore_preloader_option == 'show' ){
        wp_register_style('opstore-preloaders',OPSTORE_CSS. 'preloader.css');
        wp_enqueue_style('opstore-preloaders');    
    }
    wp_register_style('linearicons',OPSTORE_CSS. 'linearicons/style.css');
    wp_enqueue_style('linearicons');

	wp_register_style('font-awesome',OPSTORE_CSS. 'font-awesome.min.css');
    wp_enqueue_style('font-awesome');

	wp_register_style('bootstrap',OPSTORE_CSS. 'bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('slick',OPSTORE_CSS. 'slick.css');
    wp_register_style('slick-theme',OPSTORE_CSS. 'slick-theme.css');

    $opstore_font_args = array('family' => 'Lato:400,400i,700|Cedarville+Cursive:400|Poppins:300,400,600,700');
    wp_register_style('opstore-fonts', add_query_arg(apply_filters( 'opstore_google_font', $opstore_font_args ), "//fonts.googleapis.com/css"));
    wp_enqueue_style('opstore-fonts');

	wp_register_style( 'opstore-style', get_stylesheet_uri());
    wp_enqueue_style( 'opstore-style');

    wp_register_style('opstore-responsive',OPSTORE_CSS. 'responsive.css');
    wp_enqueue_style('opstore-responsive');

    /*Opstore Scripts */
	wp_register_script( 'opstore-navigation', OPSTORE_JS . 'navigation.js', array(), OPSTORE_VERSION, true );
    wp_enqueue_script('opstore-navigation');

	wp_register_script( 'opstore-skip-link-focus-fix', OPSTORE_JS. 'skip-link-focus-fix.js', array(), OPSTORE_VERSION, true );
    wp_enqueue_script('opstore-skip-link-focus-fix');

    wp_register_script( 'bootstrap', OPSTORE_JS . 'bootstrap.min.js', array('jquery'), OPSTORE_VERSION, true );
    wp_enqueue_script('bootstrap');

    if( $sidebar_sticky == 'show' ){
        wp_register_script( 'theia-sticky', OPSTORE_JS . 'theia-sticky-sidebar.js', array('jquery'), OPSTORE_VERSION, true ); 
        wp_enqueue_script('theia-sticky');   
    }
    
    if( $smoothscroll== 'show' ){
        wp_register_script( 'smooth-scroll', OPSTORE_JS . 'SmoothScroll.js', array('jquery'), OPSTORE_VERSION, true );
        wp_enqueue_script('smooth-scroll');
    }

    wp_register_script( 'slick', OPSTORE_JS . 'slick.min.js', array('jquery'), OPSTORE_VERSION, true );
    wp_register_script( 'nicescroll', OPSTORE_JS . 'jquery.nicescroll.min.js', array('jquery'), OPSTORE_VERSION, true );
    wp_enqueue_script('nicescroll');

    wp_register_script( 'fitvids', OPSTORE_JS . 'jquery.fitvids.js', array('jquery'), OPSTORE_VERSION, true );

    wp_register_script( 'opstore-custom', OPSTORE_JS . 'opstore-custom.js', array('jquery','masonry'), OPSTORE_VERSION, true );
    wp_enqueue_script('opstore-custom');


    /* Localize Function */
    
    $opstore_js_params = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ), 
        'nonce' => wp_create_nonce( 'opstore-ajax-nonce' ),
        'sidebar_sticky'  => $sidebar_sticky,
        'smooth_scroll' => $smoothscroll,
    );
    wp_localize_script( 'opstore-custom', 'opstore_params', $opstore_js_params );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'opstore_scripts' );




//admin scripts
function opstore_admin_scripts( $hook ) {

    if ( in_array( $hook, array('post.php','post-new.php','widgets.php','customize.php'), true ) ) {
    	wp_enqueue_style( 'opstore-admin-styles', OPSTORE_ASSETS_URI . 'admin/admin.css');
    	wp_enqueue_script( 'opstore-admin-scripts', OPSTORE_JS . 'admin.js', array('jquery'), OPSTORE_VERSION, true );
    }

}
add_action( 'admin_enqueue_scripts', 'opstore_admin_scripts' );

