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

    <?php while ( have_posts() ) : the_post(); 
            
        $work = get_field('work');
        $client = get_field('client');
        $link = get_field('live_site_link');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
    
    ?>
    <div class="featured-work">   
        <div class="featured-work-sidebar">
            <h2><?php the_title(); ?></h2>
            <h5><?php echo $work; ?></h5>
            <h6>Client: <?php echo $client; ?></h6>

            <?php the_content(); ?>
            
            <p><a href="<?php echo $link; ?>" target="_blank">Live Site Link</a></p>

        </div>

        <div class="featured-work-images">
            <img src="<?php echo $image_1; ?>" />
            <img src="<?php echo $image_2; ?>" />
            <img src="<?php echo $image_3; ?>" />
        </div>

       
    </div> 

<?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

