<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package mminfov2
 * @subpackage mminfov2
 * @since mminfov2 2.0
 */
?>
	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<nav role="navigation" class="navigation site-navigation secondary-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
			
			 <p id="copyright">&copy;
			<?php echo date("Y")." "; ?>
			<a href="mailto:hello@megzencoding.com?subject=Hello"><span>Meg Miller </span></a>- All Rights Reserved.
			</p>
			</nav>
	<?php endif; ?>

		</div><!-- #main -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>