<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package jp
 */

get_header(); ?>

	<section class="o-container--outer">
		<main class="c-page" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="c-page__header">
				<h1 class="c-page__title"><?php printf( esc_html__( 'Search Results for: %s', 'jp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main>
	</section>

<?php
get_sidebar();
get_footer();
