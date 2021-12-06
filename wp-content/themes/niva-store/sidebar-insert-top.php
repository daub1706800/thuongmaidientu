<?php

/**
 * Inset top sidebar 
 * @package Niva Store
 * 
 */


if ( ! is_active_sidebar( 'inset-top' ) ) {
	return;
}
?>

<div class="row">
	<div class="col-md-12">
             
            <aside id="inset-top-group" class="widget-area" >		             
            	<?php dynamic_sidebar( 'inset-top' ); ?> 	
            </aside> 

    </div>
</div>