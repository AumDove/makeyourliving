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
            
        $project = get_field('project');
        $client = get_field('client');
        $link = get_field('live_site_link');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
        $size = "large";
    
    ?>
    <div class="single-flexbox-featured">   
        <div class="featured-work-meta">
            <h2><?php the_title(); ?></h2>
            <h5><?php echo $project; ?></h5>
            <h6>Client: <?php echo $client; ?></h6>

            <?php the_content(); ?>
            
            <p><a href="<?php echo $link; ?>" target="_blank">Live Site Link</a></p>

        </div>

        <div class="featured-work-image">
            <figure class="featured-image">
            <?php if($image_1){ ?>
                <?php echo wp_get_attachment_image($image_1, $size); ?>
            </figure>
             <?php } ?>
            <figure class="featured-image">
             <?php if($image_2){ ?>
                <?php echo wp_get_attachment_image($image_2, $size); ?>
            </figure>
            <?php } ?>
            <figure class="featured-image">
            <?php  if($image_3){ ?>
                <?php echo wp_get_attachment_image($image_3, $size); ?>
            </figure>
            <?php } ?>
        </div>

    </div> 
<?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

