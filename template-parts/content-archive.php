<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jp
 */

?>

<article class="c-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="o-container--inner">
        <header class="c-post__header">
            <?php
                the_title( '<h2 class=" c-h3 c-post__title h1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            ?>
            <div class="c-meta c-meta--index">
                <?php jp_posted_on(); ?>
            </div>
            <a class="c-post__header__image__container" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail();?>
            </a>
        </header>

        <div class="c-content">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink();?>" class="c-content__read-more">Read More</a>
        </div>

        <footer class="c-post__footer">
            <?php jp_entry_footer(); ?>
        </footer>
    </div>
</article>

