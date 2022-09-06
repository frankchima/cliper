<?php
	$enable_footer_social = cliper_get_option( 'enable_footer_social', false );
?>
<div class="row width100p">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<div class="footer-logo">
					<?php 
						cliper_default_logo();
					?>
				</div>
			</div>
			<div class="col-md-6">
				<?php
					if ( has_nav_menu( 'footer_menu' ) ) {
						wp_nav_menu( array(
							'theme_location'  => 'footer_menu',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'footer_menu',
							'container_id'    => 'footer_menu',
							'depth'           => 1,
						));
					}
				?>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
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
		</div>
	</div>
</div>