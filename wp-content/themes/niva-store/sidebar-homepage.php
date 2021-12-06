<?php

/**
 * Homepage sections
 *
 * @package Niva Store
 */


if ( ! is_active_sidebar( 'homepage' ) ) {
	return;
}
?>
<div id="bz-product-by-category">            
<div class="row">
    <aside class="widget-area col-md-12" >
	
        <?php dynamic_sidebar( 'homepage' ); ?> 	
    </aside>
	</div>
</div>