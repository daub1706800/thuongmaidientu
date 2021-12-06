<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shopix
 */

?>

	</div>

	<?php do_action( 'shopix_footer_before' ); ?>

	<?php do_action( 'shopix_footer' ); ?>

	<?php do_action( 'shopix_footer_after' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
