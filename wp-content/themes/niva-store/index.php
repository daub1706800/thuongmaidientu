<?php
/**
 * The main template file
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
	if ( is_front_page() ) {
		get_sidebar( 'top' );
		get_sidebar( 'content-top' );
	}
	?>

	<div class="row">
		<main id="main" class="site-main col-md-12 blog1"  itemprop="mainContentOfPage">
			<?php 
				get_template_part( 'layouts/blog1');
			?>	
		</main>
	</div>
	
</div>

<?php get_footer(); ?>
