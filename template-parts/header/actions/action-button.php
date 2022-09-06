<?php

    /*-----------------------
    PAGE META DATA
    -------------------------*/
    $page_meta_array = cliper_metabox_value( '_cliper_page_metabox' );
    $enable_action   = isset( $page_meta_array['enable_action'] ) ? $page_meta_array['enable_action'] : false;
    $button_text     = isset( $page_meta_array['button_text'] ) ? $page_meta_array['button_text'] : '';
    $button_url      = isset( $page_meta_array['button_url'] ) ? $page_meta_array['button_url'] : '';
    $button_text_2   = isset( $page_meta_array['button_text_2'] ) ? $page_meta_array['button_text_2'] : '';
    $button_url_2    = isset( $page_meta_array['button_url_2'] ) ? $page_meta_array['button_url_2'] : '';
?>

<?php if ( is_page() && $enable_action == true ): ?>

	<?php if ( !empty( $button_text ) ): ?>
	<a class="action-button" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_text ); ?></a>
	<?php endif;?>

	<?php if ( !empty( $button_text_2 ) ): ?>
	<a class="action-button" href="<?php echo esc_url( $button_url_2 ); ?>"><?php echo esc_html( $button_text_2 ); ?></a>
	<?php endif;?>

<?php elseif ( '1' == cliper_get_option( 'enable_action', false ) ): ?>

	<?php if ( !empty( cliper_get_option( 'button_text' ) ) ): ?>
	<a class="action-button" href="<?php echo esc_url( cliper_get_option( 'button_url' ) ); ?>"><?php echo esc_html( cliper_get_option( 'button_text' ) ); ?> <i class="ti ti-angle-right"></i></a>
	<?php endif;?>

	<?php if ( !empty( cliper_get_option( 'button_text_2' ) ) ): ?>
	<a class="action-button" href="<?php echo esc_url( cliper_get_option( 'button_url_2' ) ); ?>"><?php echo esc_html( cliper_get_option( 'button_text_2' ) ); ?> <i class="ti ti-angle-right"></i></a>
	<?php endif;?>

<?php endif; ?>