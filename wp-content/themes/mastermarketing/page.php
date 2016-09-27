<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty_Sixteen 1.0
 */

get_header(); ?>

<section id="policy-other" class="default-page">		
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<article class="post-entry">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
	
	<?php get_sidebar(); ?>
</section>
<footer class="page-footer">
	<?php get_footer(); ?>
</footer>