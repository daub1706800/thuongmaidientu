<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buzz_Store
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php buzzstore_html_tag_schema(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-scrolling-animations="true">
<?php wp_body_open(); ?>
<div id="page" class="site">

	<?php
		/**
		 * @see  buzzstore_skip_links() - 5
		*/	
		do_action( 'buzzstore_header_before' ); 
	
		/**
		 * @see  buzzstore_top_header() - 15
		 * @see  buzzstore_main_header() - 20
		*/
		do_action( 'buzzstore_header' ); 
	
	 	do_action( 'buzzstore_header_after' ); 
	?>
	
	<nav class="buzz-menulink" id="content">
		<div class="buzz-container buzz-clearfix box-header-nav">
			<button class="buzz-toggle" data-toggle-target=".header-mobile-menu"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
	            <div class="one"></div>
	            <div class="two"></div>
	            <div class="three"></div>
			</button>

			<div class="mobile-only buzzstore-mobile-logo">
				<div class="buzz-logo">
					<?php the_custom_logo(); ?>
				</div>

				<div class="buzz-logo-title site-branding">					
					<h1 class="buzz-site-title site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<?php 
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) { ?>
							<p class="buzz-site-description site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php } ?>
				</div>
			</div>

			<?php 
				wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu'            => 'primary-menu',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'main-menu',
					)
				); 
			?>
		</div>
	</nav>
