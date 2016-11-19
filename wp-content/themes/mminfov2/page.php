<?php
/**
 * The template for displaying pages
 *
 * @package mminfov2
 * 
 * @since mminfov2 2.0
 */

get_header(); ?>

<section id="policy-other" class="default-page">		
	<div class="main-content policy-other">
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