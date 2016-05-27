<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="header">
		<?php the_title( '<h1 class="title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="links">' . esc_html__( 'Pages:', 'jp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'jp' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
