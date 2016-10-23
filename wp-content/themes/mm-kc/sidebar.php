<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package mmkc
 * 
 * @since mmkc 1.0
 */
?>
<div id="sidebar" class="policy-other">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		
	</div>
	<div id="tablet-sidebar">
			<a id="opt-in" class="btn" href="https://rc308.isrefer.com/go/pmih/PMIH1031/kathleencbradilla.com" target="_blank" >Get More Info</a>
		</div>
</div><!-- #primary-sidebar -->
	
	<?php endif; ?>
	
	
</div><!-- #secondary -->