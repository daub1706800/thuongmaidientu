<?php get_header(); ?>

<div id="loop-container" class="loop-container">
  <?php woocommerce_breadcrumb(); ?>
  <?php woocommerce_content(); ?>
</div>

<?php 
$tax_obj = get_queried_object();
if ( is_shop()|| is_archive() ) {
  get_sidebar( 'store' ); 
}
?>


<?php get_footer();