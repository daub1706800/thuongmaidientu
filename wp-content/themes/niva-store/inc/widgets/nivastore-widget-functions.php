<?php
/**
 * Expand some functions related to widgets
 *
 * @package Blaze Themes
 * @subpackage niva-store
 * @since 1.0.0
 *
 */

/**
 * Load important files for widget and it's related
 */
require get_template_directory() . '/inc/widgets/nivastore-widget-fields.php';

/** shop widgets */
if ( niva_store_is_active_woocommerce() ) {
  require  get_template_directory() . '/inc/widgets/category-product.php';
}
require  get_template_directory() . '/inc/widgets/banner-img-with-label.php';