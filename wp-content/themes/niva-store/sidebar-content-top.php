<?php
/**
 * Content Top sidebar. 
 * @package Niva Store
 */

if ( ! is_active_sidebar( 'ctop1'  )
	&& ! is_active_sidebar( 'ctop2' )
	&& ! is_active_sidebar( 'ctop3'  )
	&& ! is_active_sidebar( 'ctop4'  )				
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div class="row">
     
	<aside id="content-top-group" class="widget-area clearfix">
		   
		<?php if ( is_active_sidebar( 'ctop1' ) ) : ?>
			<div id="ctop1" <?php niva_store_ctop(); ?>>
				<?php dynamic_sidebar( 'ctop1' ); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'ctop2' ) ) : ?>      
			<div id="ctop2" <?php niva_store_ctop(); ?>>
				<?php dynamic_sidebar( 'ctop2' ); ?>
			</div>         
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'ctop3' ) ) : ?>        
			<div id="ctop3" <?php niva_store_ctop(); ?>>
				<?php dynamic_sidebar( 'ctop3' ); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'ctop4' ) ) : ?>     
			<div id="ctop4" <?php niva_store_ctop(); ?>>
				<?php dynamic_sidebar( 'ctop4' ); ?>
			</div>
		 <?php endif; ?>
	</aside>         

</div>