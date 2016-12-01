<?php
/**
 * The template for displaying my featured work for my portfolio.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Meg
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

           <?php the_content(); ?>

    <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

