<?php

/**
 * WooCommerce Sidebar
 * @package Niva Store
 * 
 */


if ( ! is_active_sidebar( 'shop' ) ) {
	return;
}
?>

<div id="shop-widget-wrapper">
  	<aside class="widget-area" >		             
	    <?php dynamic_sidebar( 'shop' ); ?> 	
       </aside>  
  </div>
