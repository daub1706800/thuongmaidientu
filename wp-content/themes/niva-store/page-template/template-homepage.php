<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package niva_store
 */

get_header(); ?>

<div id="primary" class="container-fluid content-area">
	<?php
		get_sidebar( 'top' );
		get_sidebar( 'content-top' );
	?>

	<div class="row">
		<main id="main" class="site-main col-md-12 blog1"  itemprop="mainContentOfPage">
			<?php 
				get_sidebar( 'homepage' );
			?>	
		</main>
	</div>
	
</div>

<?php get_footer(); ?>