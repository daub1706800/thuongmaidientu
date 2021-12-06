<?php
/**
 * Showcase Top sidebar 
 * @package Niva Store
 * 
 */

if (   ! is_active_sidebar( 'showcase-top'  )	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div id="showcase-top-wrapper">
		<aside class="widget-area">
			 <?php dynamic_sidebar( 'showcase-top' ); ?>
		</aside>
</div>