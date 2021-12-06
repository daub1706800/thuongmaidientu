<?php

/**
 * Announcement Sidebar 
 * @package Niva Store
 * 
 */

if ( ! is_active_sidebar( 'announcement' ) ) {
	return;
}
?>

<aside id="announcement" class="widget-area" >		             
  <?php dynamic_sidebar( 'announcement' ); ?> 	
</aside> 