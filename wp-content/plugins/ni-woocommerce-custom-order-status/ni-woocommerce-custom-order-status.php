<?php 
/*
Plugin Name: Ni WooCommerce Custom Order Status
Plugin URI: http://naziinfotech.com/
Description: WooCommerce Custom Order Status plug-in allows you to create and manage new order statuses for WooCommerce and also show the order status report 	
Version:  2.0.0
Author:anzia
Author URI: http://naziinfotech.com/
Plugin URI: https://wordpress.org/plugins/ni-woocommerce-custom-order-status/
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/agpl-3.0.html
Requires at least: 4.7
Tested up to: 5.8.x
WC requires at least: 3.0.0
WC tested up to: 5.8.x
Last Updated Date: 06-November-2021
Requires PHP: 7.0

Text Domain: niwoocos
Domain Path: languages/
*/
if ( ! defined( 'ABSPATH' ) ) { exit;}
if( !class_exists( 'ni_custom_order_status' ) ) {
	class ni_custom_order_status{
		public function __construct(){
			include_once('include/ni-custom-order-status-init.php'); 
			$obj = new ni_custom_order_status_init();  
			
			add_action('plugins_loaded', array($this, 'plugins_loaded'));
		}
		function plugins_loaded(){
			require_once("include/ni-custom-order-status-bulk-action.php");
			$obj_bulk = new ni_custom_order_status_bulk_action();
		}
	}
	$objcustome = new  ni_custom_order_status();
}