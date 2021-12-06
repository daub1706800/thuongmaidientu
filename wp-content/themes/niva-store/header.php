<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package niva_store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'niva-store' ); ?></a>
	
	<!-- top wrap -->
	<div id="top-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<div id="announcement-wrapper">
						<?php get_sidebar( 'announcement' ); ?>
					</div>
				</div>
				<div class="col-lg-4">
					<nav id="social-navigation" class="social-navigation"  aria-label="<?php esc_attr_e( 'Social Links Menu', 'niva-store' ); ?>">
						<div class="search-toggle">
							<a href="javascript:void(0);" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php esc_html_e( 'Search', 'niva-store' ); ?></a>
						</div>
						<?php if ( has_nav_menu( 'social' ) ) :
							wp_nav_menu( array(
								'theme_location' => 'social', 
								'depth' => 1, 
								'container' => false, 
								'menu_class' => 'social-icons', 
								'link_before' => '', 
								'link_after' => '',
							) );						
						endif; ?>
						<div id="search-container" class="search-box-wrapper hide">
							<div class="search-box clearfix">
								<?php get_search_form(); ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div> <!-- top wrap end -->
	
	<?php // lets load our header style
	get_template_part( 'layouts/header1'); 	
	?>
	<?php if(is_front_page()){ ?> 
		<div id="banner-wrapper"><?php get_sidebar( 'banner' ); ?></div>
		<div id="cta-wrapper"><?php get_sidebar( 'cta' ); ?></div>
		<div id="niva-showcase"><?php get_sidebar( 'showcase-top' ); ?></div>

		<?php get_sidebar( 'showcase-top' ); ?>
	<?php }else{ ?>
		<div id="breadcrumb-wrapper"><?php get_sidebar( 'breadcrumb' ); ?></div>
	<?php } ?>
	
	<div id="content" class="site-content">
		<div class="container-fluid">
			<div class="row">
