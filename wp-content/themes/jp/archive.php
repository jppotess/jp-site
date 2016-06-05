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
			<header class="c-archive__header">
				<h1 class="c-archive__title"><?php the_archive_title();?></h1>
				<div class="c-archive__description"><?php the_archive_description();?></div>

			</header><!-- .page-header -->
        <div class="l-content-sidebar">
            <main class="c-archive" role="main">        
                <!-- <div class="o-container--inner"> -->
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'archive' );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>

                <!-- </div> -->
            </main>
            <?php get_sidebar(); ?>
        </div>
    </div>


<?php get_footer();
