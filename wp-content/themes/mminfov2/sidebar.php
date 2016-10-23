<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package mminfov2
 * 
 * @since mminfov2 2.0
 */
?>
<div id="sidebar" class="policy-other">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		
	</div>
	<div id="tablet-sidebar">
			<a id="opt-in" class="btn" href="http://megmillerhilo.com/answers" >Free Online Workshop</a>
		</div>
</div><!-- #primary-sidebar -->
	
	<?php endif; ?>
	
	
</div><!-- #secondary -->