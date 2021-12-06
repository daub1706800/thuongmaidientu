<?php
/**
 * sidebar column for bbpress. 
 * @package Niva Store
 * 
 */

if (   ! is_active_sidebar( 'bbpress-sidebar'  ) )
	return;
?>
	
	<aside id="bbpress-sidebar" class="widget-area">
		<?php dynamic_sidebar( 'bbpress-sidebar' ); ?>	
	</aside>
		

