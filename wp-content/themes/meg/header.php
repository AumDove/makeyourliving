<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meg
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar'); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'meg' ); ?></a>

            <?php if ( get_header_image() ) { ?>
                <header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
            <?php } else { ?>
                <header id="masthead" class="site-header" role="banner">
            <?php } ?>
            
                       
          
            <div class="flex-container">        
               <?php // Display site icon or first letter as logo ?>	
		<div class="site-logo">
			<?php $site_title = get_bloginfo( 'name' ); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<div class="screen-reader-text">
					<?php printf( esc_html__('Go to the home page of %1$s', 'meg'), $site_title ); ?>	
				</div>
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else { ?>
					<div class="site-firstletter" aria-hidden="true">
						<?php echo substr($site_title, 0, 1); ?>
					</div>
				<?php } ?>
			</a>
		</div>
            
                <div class="site-branding"<?php if ( is_singular() ) { echo ' screen-reader-text '; } ?> >
			<?php
			if ( is_front_page()) : ?>
                        <div class="full-header">
                            <p id="front-decoration">Hello world,</p>
                            
                            <h1 id="hero-text">I&apos;m Meg ...</h1>
                            
                            <img id="headshot-image" src="<?php echo get_bloginfo('template_url') ?>/img/headshot-meg-two.jpg"/>
                            
                            <p id="full-hero-text">I build functional, simple websites for people who are ready to get started on the web. Using developer skills, I help marketers and small business owners find their place on the web. Quickly.</p>
                        
                            <div class="flex-container-nav">    
                                <button id="button-one" class="nav-button">Blog</button>
                                <button id="button-two" class="nav-button">Contact</button>
                            </div>
                        </div>       
                        
                             
			
                        <?php else : ?>
                    <div class="reduced-header">
                        
                    </div>
			<?php
			endif;

		?>	
		</div><!-- .site-branding -->

            </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
