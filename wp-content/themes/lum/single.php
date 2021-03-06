<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lum
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single', get_post_format() );

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
                        
//                        the_post_navigation();
                        
		endwhile; // End of the loop.
		?>
                <?php // Add Next and Previous links to the bottom of posts
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post:   ', 'lum' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:  ', 'lum' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post:   ', 'lum' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:  ', 'lum' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
