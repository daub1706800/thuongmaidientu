<?php

/**
 * Sidebar for the banner area 
 * @package Blog Life
 *  
 */


if ( ! is_active_sidebar( 'banner' ) ) {
	return;
}
?>

<aside id="banner">
	<div id="banner-overlay"></div>
   <?php dynamic_sidebar( 'banner' ); ?>
</aside>

