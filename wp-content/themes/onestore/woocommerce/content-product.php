<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$more_class = wc_get_loop_prop( 'more_item_class' );
?>
<li <?php wc_product_class( $more_class, $product ); ?>>
	<?php
	do_action( 'onestore/woocommerce_before_shop_loop_item' );
	$item_builder = new OneStore_Item_Block_Builder( 'woocommerce_index_item_elements' );
	$item_builder->set_hook_prefix( 'wc' );
	$item_builder->set_thumb_id( 'thumb' );
	$item_builder->render();
	do_action( 'onestore/woocommerce_after_shop_loop_item' );
	?>
</li>
