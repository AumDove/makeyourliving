<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



get_header(); ?>

<div id="primary" class="content-area">
    <main id="front" class="site-main" role="main">
    <h4 class="front-headline">Featured Work</h4> 
        <ul class="frontpage-flexbox-featured">
            <?php query_posts('posts_per_page=3&post_type=featured_work'); ?>
                <?php while ( have_posts() ): the_post();
                    $image_1 = get_field("image_1");
                    $size = "medium";
                    $project = get_field('project');
                    $client = get_field('client');
                    $link = get_field('live_site_link');
                   
                ?>
            
                <li class="individual-frontpage-featured">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php echo wp_get_attachment_image($image_1, $size); ?>
                    <h5><?php echo $project; ?></h5>
                    <p><a href="<?php echo $link; ?>" target="_blank">Live Site Link</a></p>
                    <h6>Client: <?php echo $client; ?></h6>

                    <?php the_excerpt(); ?>
                    <div class="continue-reading front-excerpt">
                        <a href="<?php echo esc_url ( get_permalink() ); ?>" rel="bookmark">
                            <?php
                                    printf(

                                            wp_kses( __( 'Project Page %s', 'meg' ), array( 'span' => array( 'class' => array() ) ) ),
                                            the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                    );
                            ?>
                        </a>
                    </div>
                </li>
                
                <?php endwhile; //end of the loop. ?>
                <?php wp_reset_query(); //resets the altered query back to original. ?>
                
        </ul>
            
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();


