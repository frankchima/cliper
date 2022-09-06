<?php

/**
 * [cliper_customize_register auto refresh for custom logo]
 * @param  [type] $wp_customize [array]
 * @return [type]               [array]
 */
function cliper_customize_register( $wp_customize ) {
  $wp_customize->get_setting( 'custom_logo' )->transport = 'refresh';
}
add_action( 'customize_register', 'cliper_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cliper_customize_preview_js() {
	wp_enqueue_script( 'cliper-customizer', CLIPER_ROOT_JS . '/customizer.js', array( 'customize-preview' ), CLIPER_VERSION, true );
}
add_action( 'customize_preview_init', 'cliper_customize_preview_js' );