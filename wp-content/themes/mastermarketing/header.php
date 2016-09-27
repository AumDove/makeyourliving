<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty_Sixteen 1.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right'); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!--FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Economica:700" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Codystar' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="page-header container">
		
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span>
				<span id="mobile-sub-title" class="sub-title"><?php bloginfo('description'); ?></span>
			</a>
			
			<nav class="top-nav">
				<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
			</nav>
		</header>

		<div id="main" class="site-main">