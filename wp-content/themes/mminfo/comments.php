<div id="comments" class="comments-area">
		<?php if ( have_comments() ) : ?>
			<h2 class="comments-title">
				<?php
					printf( _n( '1 comment', '%1$s comments', get_comments_number(), 'mminfo' ),
						number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h2>


	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
				'avatar_size'=> 0,
				'callback' => 'mminfo_comments'
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'mminfo' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'mminfo' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'mminfo' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'mminfo' ); ?></p>
	<?php endif; ?>

	<?php else: ?>
		<h2 class="comments-title">0 comments</h2>
	<?php endif; // have_comments() ?>

	<?php comment_form(array('title_reply' => 'Leave a Comment')); ?>

</div><!-- #comments -->