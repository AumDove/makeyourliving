<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php global $first_post; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php 
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
                         <?php if ( $first_post == true ) { ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                         <?php } else {
                             the_post_thumbnail();
                         }
                         ?>
				
			</figure>
		<?php }
		?>

		<?php 
			if ( $first_post == true ) {
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			} else {
				the_title( '<h1 class="entry-title">', '</h1>' ); 
			}
		
		?>

		<?php
		if ( has_excerpt( $post->ID ) ) {
			echo '<div class="deck">';
			echo '<p>' . get_the_excerpt() . '</p>';
			echo '</div><!-- .deck -->';
		}
		?>
		
		<div class="entry-meta">
			<?php lum_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lum' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lum_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

