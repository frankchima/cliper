<?php if ( is_active_sidebar( 'header-sidebar' ) ) : ?>
<!-- HEADER SIDEBAR -->
<div class="header-widget-area">
	<span class="close-header-widget"><i class="ti ti-close"></i></span>
	<div class="header-widgets">
		<?php dynamic_sidebar( 'header-sidebar' ); ?>
	</div>
</div>
<!-- HEADER SIDEBAR END -->
<?php endif; ?>