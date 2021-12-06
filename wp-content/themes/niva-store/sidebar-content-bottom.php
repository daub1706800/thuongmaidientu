<?php
/**
 * Content Bottom sidebar. 
 * @package Niva Store
 */

if (   ! is_active_sidebar( 'cbottom1'  )
	&& ! is_active_sidebar( 'cbottom2' )
	&& ! is_active_sidebar( 'cbottom3'  )
	&& ! is_active_sidebar( 'cbottom4'  )				
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div class="row">
       
	<aside id="content-bottom-group" class="widget-area clearfix">
		   
		<?php if ( is_active_sidebar( 'cbottom1' ) ) : ?>
			<div id="cbottom1" <?php niva_store_cbottom(); ?>>
				<?php dynamic_sidebar( 'cbottom1' ); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'cbottom2' ) ) : ?>      
			<div id="cbottom2" <?php niva_store_cbottom(); ?>>
				<?php dynamic_sidebar( 'cbottom2' ); ?>
			</div>         
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'cbottom3' ) ) : ?>        
			<div id="cbottom3" <?php niva_store_cbottom(); ?>>
				<?php dynamic_sidebar( 'cbottom3' ); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'cbottom4' ) ) : ?>     
			<div id="cbottom4" <?php niva_store_cbottom(); ?>>
				<?php dynamic_sidebar( 'cbottom4' ); ?>
			</div>
		 <?php endif; ?>
	   </aside>         
  
</div>