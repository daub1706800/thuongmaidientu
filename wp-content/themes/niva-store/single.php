<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package niva_store
 */

get_header();
?>

<div id="primary" class="container-fluid content-area">
	<div class="row">
		<main id="main" class="site-main col-md-12  single1"  itemprop="mainContentOfPage">

		<div class="row">
			<div class="col-md-8 the_stickey_class">
				<?php  
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'single' );									
							if ( comments_open() || get_comments_number() ) {
							comments_template();
							}
					endwhile;
				?>
			</div>
			<div class="col-md-4 the_stickey_class">
				<?php get_sidebar( 'right' ); ?>
			</div>
		</div>';

		</main><!-- #main -->
	</div>
</div>
<?php
get_footer();
