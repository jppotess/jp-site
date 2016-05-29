<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1>', '</h1>' );
			} else {
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php jp_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span>&rarr;</span>', 'jp' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span>"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div>' . esc_html__( 'Pages:', 'jp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer>
		<?php jp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
