<?php
/**
 * For displaying breadcrumbs
 *
 * @package Niva Store
 */

if ( ! is_active_sidebar( 'breadcrumbs' ) ) {
	return;
}
?>

<div id="breadcrumbs" class="widget-area" >
	<?php dynamic_sidebar( 'breadcrumbs' ); ?>
</div><!-- #secondary -->
