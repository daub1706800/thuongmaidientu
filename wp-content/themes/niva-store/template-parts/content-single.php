<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Niva Store
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>			
    <div class="entry-meta">
      <span class="line"><?php niva_store_posted_on(); ?></span>
    </div>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
    <?php 
      niva_store_post_thumbnail();
		  the_content();
    ?>
	</div><!-- .entry-content -->
			
  <footer class="entry-footer" itemscope itemtype="http://schema.org/WPFooter">
    <?php 
    // get the post footer info
    niva_store_entry_footer(); 
    ?>
  </footer>	

  <?php	// show the author bio
    if ( is_single() && get_the_author_meta( 'description' ) ) :
      get_template_part( 'author-bio' );
    endif;
  ?>	
    
  <?php	// get the post next and previous post navigation	
    niva_store_post_pagination();	
  ?>
	
</article><!-- #post-## -->
<?php
