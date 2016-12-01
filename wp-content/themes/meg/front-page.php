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
                    <figure><?php echo wp_get_attachment_image($image_1, $size); ?></figure>
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
                    
                    <div class="featured-archive-button">
                        
                        
                    </div>
                   
                </li>
                
                <?php endwhile; //end of the loop. ?>
                <?php wp_reset_query(); //resets the altered query back to original. ?>
                
        </ul>
            <div class="all-work">
                <h4 class="front-headline">Check Out More Projects</h4>
                <p>Some of my projects are still in progress and I encourage you to check them out and follow me during my journey of the design and development process! Feel free to contact me about any of these designs and I can get in touch with you to see if we will be a good fit. </p>
                <div class="continue-reading">
                    
                    <a href="/archives/featured-work" rel="bookmark">
                        <?php
                                printf(
                                        wp_kses( __( 'All Work %s', 'meg' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                );
                        ?>
                    </a>
                </div>
            </div>
             <div class="all-work">
                <h4 class="front-headline">Read My Blog</h4>
                <p>While I love to write blogs and short articles, I find myself coding up designs much more often than I find myself blogging these days. Nonetheless, you are always welcome to check out my blog where I share experiences in starting and running a very small home business, staying sane in a small world of doing <strong>ALL</strong> the jobs, all the time, and my fiancee even chimes in with a perspective that only Joe can offer. Click the button below to check it out!</p>
                <div class="continue-reading">
                    
                    <a href="/blog" rel="bookmark">
                        <?php
                                printf(
                                        wp_kses( __( 'Read My Blog %s', 'meg' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                );
                        ?>
                    </a>
                </div>
            </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();


