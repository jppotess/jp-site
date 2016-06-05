<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jp
 */

get_header(); ?>

	<div class="o-container--outer">
		<div class="l-content-sidebar">
			<main class="c-single-post" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single-post' );
				?>
				 <!-- the_post_navigation(); -->
				<div class="c-post-nav">
					<span class="c-post-nav__link .c-post-nav__link--previous"><?php previous_post_link('%link', 'Previous Post', 'no'); ?></span>
					<span class="c-post-nav__link .c-post-nav__link--next"><?php next_post_link('%link', 'Next Post', 'no');?></span>					
				</div>

				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
			?>

			</main>

			<?php get_sidebar(); ?>
		</div>
	</div>

<?php
get_footer();
