<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package niva_store
 */

get_header(); ?>

<div id="primary" class="container-fluid content-area">
	<div class="row">
		<main id="main" class="site-main col-md-12 blog1"  itemprop="mainContentOfPage">
			<?php get_template_part( 'layouts/blog1');	?>
				
		</main>
	</div>
	
</div>

<?php get_footer(); ?>
