<?php
	$enable_footer_social = cliper_get_option( 'enable_footer_social', false );
?>
<div class="col-md-12">
	<div class="footer-copyright center">
		<?php cliper_copyright(); ?>
		<?php if( $enable_footer_social == true ): ?>
			<div class="footer-social-bookmark mt30">
				<?php cliper_social_links(); ?>
			</div>
		<?php endif; ?>
	</div>
</div>