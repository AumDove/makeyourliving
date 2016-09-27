<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty_Sixteen 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content ">
		<div class="content ">
			<?php while ( have_posts() ): the_post(); ?>
			<h1><?php the_title(); ?></h1>
				<a id="mobile-btn" href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
				<?php the_content(); ?>
				<a id="desk-lap" href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<footer class="home-page-footer">
<?php get_footer(); ?>
</footer>