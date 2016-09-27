<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage mastermarketing
 * @since Master Marketing 1.0
 */
?>
	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<nav role="navigation" class="navigation site-navigation secondary-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
			
			</nav>
	<?php endif; ?>

		</div><!-- #main -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>