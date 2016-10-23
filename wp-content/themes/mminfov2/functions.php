<?php
function mminfov2_setup() {

	// Post thumbnails support
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 250, 250);
	// Image size for single posts
	add_image_size( 'single-post-thumbnail' , 700, 9999 );
	
	// Register Menus 
	register_nav_menus ( array (
		'primary-menu' => __( 'Primary Menu', 'mminfov2' ),
		'secondary' => __( 'Secondary Menu', 'mminfov2' ),  
	) );
}

add_action( 'after_setup_theme', 'mminfov2_setup' );


// Register widget area 
function mminfov2_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar 1', 'mminfov2' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'mminfov2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mminfov2_widgets_init' );

// defines custom markup for post comments
function mminfov2_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
	$comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p>';
	$comment .= '</div>';
	$comment .= '</li>';
 
	echo $comment;
}

// changes excerpt symbol
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');
