<?php

    /*-----------------------
    PAGE META DATA
    -------------------------*/
    $page_meta_array   = cliper_metabox_value( '_cliper_page_metabox' );
    $enable_action_alt = isset( $page_meta_array['enable_action_alt'] ) ? $page_meta_array['enable_action_alt'] : false;
    $button_text_alt   = isset( $page_meta_array['button_text_alt'] ) ? $page_meta_array['button_text_alt'] : '';
    $button_url_alt    = isset( $page_meta_array['button_url_alt'] ) ? $page_meta_array['button_url_alt'] : '';
?>

<?php if ( is_page() && $enable_action_alt == true ): ?>

	<?php if ( !empty( $button_text_alt ) ): ?>
	<a class="action-button" href="<?php echo esc_url( $button_url_alt ); ?>"><i class="ti ti-user"></i> <?php echo esc_html( $button_text_alt ); ?></a>
	<?php endif;?>

<?php elseif ( '1' == cliper_get_option( 'enable_action_alt', 1 ) ): ?>

	<?php if ( !empty( cliper_get_option( 'button_text_alt' ) ) ): ?>
	<a class="action-button-alt" href="<?php echo esc_url( cliper_get_option( 'button_url_alt' ) ); ?>"><i class="ti ti-user"></i> <?php echo esc_html( cliper_get_option( 'button_text_alt' ) ); ?></a>
	<?php endif;?>

<?php endif; ?>