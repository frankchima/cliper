<?php if( '1' == cliper_get_option( 'enable_search', false ) ) : ?>
<div class="search-control">
	<div id="search-main-form-<?php echo esc_attr( cliper_get_option( 'header_search_layout', 'style-one' ) )?>" class="search-main-form-<?php echo esc_attr( cliper_get_option( 'header_search_layout', 'style-one' ) )?>">					
		<?php cliper_search_form(false,false); ?>
	</div>
    <div class="search-background"></div>
	<button class="search-close"><i class="ti ti-close"></i></button>
</div>
<?php endif; ?>