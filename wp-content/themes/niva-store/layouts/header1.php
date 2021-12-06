<?php
/**
 * Header Style: Header1
 * @package Niva Store
 */ 
 ?>
 
 	<header id="masthead" class="site-header header1" role="banner">

		<div id="site-header-inner">
			<div class="container-fluid">
				<div class="row">
					<!-- site title and header -->
					<div class="col-md-3">
						<div id="site-branding">
              <?php the_custom_logo(); ?>	

							<div id="title-group">
                <div id="site-title" itemprop="headline">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
								<?php
							    $blog_life_description = get_bloginfo( 'description', 'display' );
							    if ( $blog_life_description || is_customize_preview() ) :
							  ?>
							    <div id="site-tagline" itemprop="description"><p><?php bloginfo( 'description' ); ?></p></div>
						    <?php endif; ?>
							</div>			
						</div>
					</div>
					<!-- product search bar -->
					<div class="col-md-6">
	            <?php 
		            if ( niva_store_is_active_woocommerce() ) {
		            	niva_store_get_advanced_product_search();
		            } 
	            ?>
					</div>
					<!-- product cart -->
					<div class="col-md-3">
            <?php if ( niva_store_is_active_woocommerce() ) {
		            	niva_store_woocommerce_header_cart();
		            } ?> 
					</div>

				</div>
			</div>
		</div>
	</header>

	
	<div id="menu-wrapper" class="header1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div id="menu-toggle-wrapper">
					<button id="menu-toggle" class="menu-toggle"><?php esc_html_e( 'Menu', 'niva-store' ); ?></button>
	        		</div>
					<div id="site-header-menu" class="site-header-menu">
						<nav id="site-navigation" class="main-navigation"  aria-label="<?php esc_attr_e( 'Primary Menu', 'niva-store' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
									'fallback_cb'	=> 'nivastore_primary_navigation_fallback',
								 ) );
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>