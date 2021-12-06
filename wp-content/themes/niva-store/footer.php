<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package niva_store
 */

?>

		</div><!-- row -->

		<?php if(is_front_page() ){ ?>
			<div class="row">
				<div class="col-md-12">
					<?php get_sidebar( 'showcase-bottom' ); ?>
				</div>
			</div>
		<?php } ?>
		<?php 
		if ( is_active_sidebar( 'footer-insta-section' ) ) { ?>
			<div class="row footer-insta-section">
			    <aside class="widget-area col-md-12" >
			        <?php dynamic_sidebar( 'footer-insta-section' ); ?> 	
			    </aside>
			</div>
		<?php 
			}
		?>
		<?php get_sidebar('content-bottom'); ?>
		</div><!-- container -->

</div><!-- #content -->

<div id="bottom-wrapper">
	<div class="container-fluid">
		<?php get_sidebar( 'bottom' );?>
	</div>
</div>
	
<a class="back-to-top"><i class="fas fa-chevron-up"></i></a>
	
	<footer id="footer-wrapper" class="site-footer" role="contentinfo">
	
		<?php get_sidebar( 'footer' ); ?>
		
 			<nav id="footer-nav">
				<?php wp_nav_menu( array( 
						'theme_location' => 'footer', 
						'fallback_cb' => false, 
						'depth' => 1,
						'container' => false, 
						'menu_id' => 'footer-menu', 
					) ); 
				?>
			</nav>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'niva-store' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'niva-store' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
			<?php
				esc_html_e( 'Niva Store WordPress Theme by', 'niva-store' ); ?>
				<a href="<?php echo esc_url('https://blazethemes.com/'); ?>" target="_blank"><?php esc_html_e( 'Blaze Themes', 'niva-store' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
