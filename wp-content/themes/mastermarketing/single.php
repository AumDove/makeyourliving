<?php
/**
 * The template for displaying single posts
 *
 * @package WordPress
 * @subpackage Master_Marketing
 * @since Master_Marketing 1.0
 */

get_header(); ?>

<section class="single-page" >
		
	<div class="main-content single">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content',  get_post_format() , the_post_thumbnail( 'single-post-thumbnail' ) ); ?>
			<div class="back"><a href="<?php echo site_url('/blog/') ?>"><span>&larr;  Back to posts</span></a></div>
			<?php comments_template(); ?>
		<?php endwhile; ?>
	</div>
		
	<?php get_sidebar(); ?>
	
		<div class="back desktop mobile"><a href="<?php echo site_url('/blog/') ?>"> <span>&larr;Back to posts</span></a></div>

</section>
<footer class="page-footer single-footer">
	<?php get_footer(); ?>
</footer>
