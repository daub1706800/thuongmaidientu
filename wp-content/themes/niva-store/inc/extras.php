<?php
/**
 * Custom functions that act independently of the theme templates.
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Niva Store
 */

/**
 * Check if woocommerce is activated.
 */
function niva_store_is_active_woocommerce() {
	if ( class_exists( 'WooCommerce' ) ) {
			return true;
	} else {
			return false;
	}
}

// navigation fallback
if ( ! function_exists( 'nivastore_primary_navigation_fallback' ) ) :

	/**
	 * Fallback for primary navigation.
	 *
	 * @since 1.0.0
	 */
	function nivastore_primary_navigation_fallback() {

		echo '<ul id="menu-header-menu" class="primary-menu" aria-expanded="false">';
		echo '<li class="menu-item"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'niva-store' ) . '</a></li>';

		$args = array(
			'posts_per_page' => 5,
			'post_type'      => 'page',
			'orderby'        => 'name',
			'order'          => 'ASC',
			);

		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				the_title( '<li><a href="' . esc_url( get_permalink() ) . '">', '</a></li>' );
			}

			wp_reset_postdata();
		}

		echo '</ul>';
	}

endif;