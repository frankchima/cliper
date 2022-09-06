<?php
	$enable_footer_social = cliper_get_option( 'enable_footer_social', false );
?>									
<div class="col-md-6">
	<div class="footer-copyright sm-center xs-center">
		<?php cliper_copyright(); ?>
	</div>
</div>
<?php if( $enable_footer_social == true ): ?>
	<div class="col-md-6">
		<div class="footer-social-bookmark text-right xs-center sm-center">
			<?php cliper_social_links(); ?>
		</div>
	</div>
<?php endif; ?>