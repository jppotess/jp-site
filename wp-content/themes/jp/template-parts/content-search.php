<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jp
 */

?>
<div class="o-container--inner">
	<article class="c-search" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="c-search__header">
			<?php the_title( sprintf( '<h2 class="c-search__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="c-meta">
				<?php jp_posted_on(); ?>
			</div>
			<?php endif; ?>
		</header>

		<div class="c-search__excerpt">
			<?php the_excerpt(); ?>
		</div>

		<footer class="c-search__footer">
			<?php jp_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div">
