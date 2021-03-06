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
        <header class="c-post-index__header">
            <h1 class="c-post-index__title"><?php single_post_title(); ?></h1>
        </header>    
        <div class="l-content-sidebar">
            <main class="c-post-index" role="main">        
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
