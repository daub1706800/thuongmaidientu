<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package niva_store
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function niva_store_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 300,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'niva_store_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function niva_store_woocommerce_scripts() {
	wp_enqueue_style( 'niva-store-woocommerce-style', get_template_directory_uri() . '/css/woocommerce.css', array(), niva_store_theme_version );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'niva-store-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'niva_store_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function niva_store_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'niva_store_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function niva_store_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'niva_store_woocommerce_related_products_args' );


/**
 * Required functions for woocommerce or its extensions.
 * 
 * @package Niva Store Pro
 */

if ( ! function_exists( 'niva_store_get_advanced_product_search' ) ) :
	/**
	 * Woocommerce Product search 
	 * 
	 */
	function niva_store_get_advanced_product_search() {

		$args = array(
						'number'     => '',
						'orderby'    => 'name',
						'order'      => 'ASC',
						'hide_empty' => true
        );
		$product_categories = get_terms( 'product_cat', $args ); 
		$categories_show = '<option value="">'.esc_html__( 'All Categories', 'niva-store' ).'</option>';
		$check = '';
		if ( is_search() ) {
				if ( isset( $_GET['term'] ) && $_GET['term'] != '' ) {
						$check = isset( $_GET['term'] ) ? sanitize_text_field( wp_unslash( $_GET['term'] ) ) : '';
				}
		}
		$checked = '';
		$categories_show .= '<optgroup class="sm-advance-search" label="'.esc_html__( 'All Categories', 'niva-store' ).'">';
		foreach( $product_categories as $category ) {
			if ( isset ( $category->slug ) ) {
				if ( trim( $category->slug ) == trim( $check ) ) {
						$checked = 'selected="selected"';
				}
				$categories_show  .= '<option '.esc_attr( $checked ).' value="'.esc_attr( $category->slug ).'">'.esc_html( $category->name ).'</option>';
				$checked = '';
			}
		}
		$categories_show .= '</optgroup>';
		echo $form = '<div class="bz-woo-product-search-wrapper"><form role="search" method="get" class="woocommerce-product-search" id="searchform"  action="' . esc_url( home_url( '/'  ) ) . '">
			<div class = "search-wrap">
									<div class="sm_search_wrap">
										<select class="bz-select-products false" name="term">'.$categories_show.'
										</select>
									</div>
									<span class="bz-separator">&nbsp; | </span>
									<div class="sm_search_form">
											<input type="text" value="' . get_search_query() . '" name="s" id="s"  class="search-field" placeholder="'.esc_html__( 'Search products', 'niva-store' ).'" autocomplete="off"/>
											<button type="submit" id="searchsubmit">
											<i class="fa fa-search"></i></button>
											<input type="hidden" name="post_type" value="product" />
											<input type="hidden" name="taxonomy" value="product_cat" />
									</div>
									<div class="search-content"></div>
						</div>
							
				</form></div>';        
		return $form;
	}
endif;

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'niva_store_woo_start', 10);
add_action('woocommerce_after_main_content', 'niva_store_woo_end', 10);

function niva_store_woo_start() {
	?>
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

	<?php		
}

function niva_store_woo_end() {
	?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
}


/*---Move Product meta*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_after_single_product_summary',
'woocommerce_template_single_meta', 12 );

/*--- remove shop stars*/
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );


/**
 * WooCommerce Search widget
 * Let's customize our search widget
*/
add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );
function woo_custom_product_searchform( $form ) {
	
	$form = '<form  method="get" id="searchform" class="search-form" action="' . esc_url( home_url( '/'  ) ) . '">
		<div class="form-group">
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_html__( 'My Search form', 'niva-store' ) . '" class="form-control" />
		</div>	
        <div class="form-group">
            <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'niva-store' ) .'" class="button-search" /></span>
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';
	
	return $form;
	
}

// woocommerce sidebar
if ( ! function_exists( 'niva_store_get_shop_sidebar' ) ) :

	/**
	 * Function for shop sidebar
	 */
	function niva_store_get_shop_sidebar() {
		?>
	<aside id="secondary woosidebar" class="widget-area col-md-4 the_stickey_class">
		<div class="product_sidebar_wrap">
			<?php get_sidebar( 'shop' ); ?>
		</div>
	</aside><!-- #secondary -->
	<?php 
	}

endif;

// Remove WooCommerce sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_sidebar', 'niva_store_get_shop_sidebar', 15 );

// Remove Woocommerce Breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

apply_filters( 'woocommerce_show_page_title', false, 20 );



/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'niva_store_woocommerce_header_cart' ) ) {
			niva_store_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'niva_store_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function niva_store_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		niva_store_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'niva_store_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'niva_store_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function niva_store_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'niva-store' ); ?>">
			<i class="fa fa-shopping-cart"></i>
			<?php
			$item_counts = WC()->cart->get_cart_contents_count();
			?>
			<span class="count"><?php echo esc_html( $item_counts ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'niva_store_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function niva_store_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item header_cart_icon';
		} else {
			$class = 'header_cart_icon';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<div class="niva_icon_container">
				<li class="<?php echo esc_attr( $class ); ?>">
					<?php niva_store_woocommerce_cart_link(); ?>
				</li>
		</div>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}
