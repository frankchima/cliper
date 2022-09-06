<?php if ( class_exists( 'GTranslate' ) && '1' == cliper_get_option( 'enable_language_button', false ) ): ?>
<?php
    $data = get_option( 'GTranslate' );
    $look = $data['widget_look'];
?>
	<div class="language-button">
		<?php if ( 'flags' == $look ): ?>
		<div class="language__selector">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/flag.jpg' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</div>
		<div class="language__list"><?php echo do_shortcode( '[gtranslate]' ); ?></div>
		<?php elseif ( 'popup' == $look ): ?>
		<div class="language__popup_button" onclick="<?php echo esc_attr( 'openGTPopup(this)' ); ?>">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/flag.jpg' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</div>
		<div class="language__popup"><?php echo do_shortcode( '[gtranslate]' ); ?></div>
		<?php endif;?>
	</div>
<?php endif;?>