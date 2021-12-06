<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package niva_store
 */

get_header();
?>
<div id="primary" class="container-fluid content-area">
<div class="row">
		<div class="col-md-12">
			<main id="main" class="site-main" >

				<div class="row">
				
					<div class="col-md-8" itemprop="mainContentOfPage">
						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'niva-store' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>

					<div class="col-md-4">        
						<?php get_sidebar( 'right' ); ?>       
					</div>
				</div>
			</main><!-- #main -->
		</div>
	</div>
	<?php get_sidebar( 'content-bottom' ); ?>
</div>
<?php
get_footer();
