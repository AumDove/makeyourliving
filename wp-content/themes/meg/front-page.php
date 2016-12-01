<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="featured-work-front">
            <h4>Featured Work</h4> 
            <ul class="frontpage-work-list">
            <?php query_posts('posts_per_page=3&post_type=featured_work'); ?>
                <?php while ( have_posts() ): the_post();
                    $image_1 = get_field("image_1");
                    $size = "medium";
                ?>
                <li class="individual-featured-work">
                    <figure>
                        <?php echo wp_get_attachment_image( $image_1, $size ); ?>
                    </figure>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>
                <?php endwhile; //end of the loop. ?>
                <?php wp_reset_query(); //resets the altered query back to original. ?>
            </ul>

        </div>
            
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();


