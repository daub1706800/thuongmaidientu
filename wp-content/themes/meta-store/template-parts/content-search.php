<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Meta Store
 */
?>

<?php do_action('meta_store_blog_post_single'); ?>
<?php /*

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php
                meta_store_posted_on();
                meta_store_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>

    <?php meta_store_post_thumbnail(); ?>

    <div class="entry-summary">
        <?php
            $excerpt_length = get_theme_mod('meta_store_blog_excerpt_length', 250);
            echo esc_html(meta_store_blog_post_excerpt(get_the_content(), $excerpt_length));
        ?>
    </div>

    <footer class="entry-footer">
        <?php meta_store_post_footer_cb(); ?>
    </footer>
</article>
*/ ?>
