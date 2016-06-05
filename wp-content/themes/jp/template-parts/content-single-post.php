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
            <?php
                if ( is_single() ) {
                    the_title( '<h1 class="c-post__title">', '</h1>' );
                } else {
                    the_title( '<h2 class=" c-h3 c-post__title h1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                }

            if ( 'post' === get_post_type() ) { ?>
                <div 
                    <?php if( is_single() ) { ?> 
                        class="c-meta c-meta--single"
                    <?php } else { ?>
                        class="c-meta c-meta--index"
                    <?php } ?>
                >
                    <?php jp_posted_on(); ?>
                </div>
            <?php
            } ?>
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

