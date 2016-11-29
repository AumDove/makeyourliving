<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
                <div class="front-page">
			<?php while ( have_posts() ): the_post(); ?>
			<h1><?php the_title(); ?></h1>
                        <p><?php the_content() ?></p>
			<?php endwhile; ?>
		</div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();


