<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jp
 */

get_header(); ?>

	<div class="o-container--outer">
		<div class="o-container--inner">
			<main class="c-page" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header class="c-page__header">
						<h1 class="c-page__title"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;


				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php
get_footer();
