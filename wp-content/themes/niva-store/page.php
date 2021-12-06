<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package niva_store
 */

get_header();
?>

<div id="primary" class="container-fluid content-area">

<?php get_sidebar( 'top' ); ?>
	<?php get_sidebar( 'content-top' ); ?>
	
	<div class="row">
		<div class="col-md-12">
			<main id="main" class="site-main" >

			<div class="row">
			
				<div class="col-md-8" itemprop="mainContentOfPage">
				
					<?php get_sidebar( 'inset-top' ); ?>
					
					<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
					?>
					<?php endwhile; // End of the loop. ?>
					
					<?php get_sidebar( 'inset-bottom' ); ?>
					
				</div>

				<div class="col-md-4">        
					<?php get_sidebar( 'right' ); ?>       
				</div>
			
			</div>

			</main><!-- #main -->
		</div>
	</div>
	
</div><!-- #primary -->

<?php
get_footer();
