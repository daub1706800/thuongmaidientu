<?php
/**
 * Showcase Bottom sidebar 
 * @package Niva Store
 * 
 */

if (   ! is_active_sidebar( 'showcase-bottom'  )	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div id="showcase-bottom-wrapper">
		<div class="widget-title divider-with-text no-margin">
			<h3><?php esc_html_e( 'Our Brands','niva-store');?></h3>
			</h3><span class="line"></span>
		</div>
		<aside class="widget-area d-flex justify-content-center align-center">
			 <?php dynamic_sidebar( 'showcase-bottom' ); ?>
		</aside>
</div>