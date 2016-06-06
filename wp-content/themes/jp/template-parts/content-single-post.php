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

        <header class="c-post__header">
            <h1 class="c-post__title">
                <?php the_title() ?>
            </h1>
            <?php
            if ( 'post' === get_post_type() ) { ?>
                <div class="c-meta c-meta--single">
                    <?php jp_posted_on(); ?>
                </div>
            <?php
            } ?>
            <div class="c-post__header__image__wrapper">
                <a class="c-post__header__image__container" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail();?>
                </a>
            </div>            
        </header>

        <div class="c-content">
            <?php
                the_content( sprintf(
                    wp_kses( __( 'Continue reading %s <span>&rarr;</span>', 'jp' ), array( 'span' => array( 'class' => array() ) ) ),
                    the_title( '<span>"', '"</span>', false )
                ) );

                wp_link_pages( array(
                    'before' => '<div>' . esc_html__( 'Pages:', 'jp' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div>

        <footer class="c-post__footer">
            <?php jp_entry_footer(); ?>
        </footer>

    </article>

