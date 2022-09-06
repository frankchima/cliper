<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Cliper
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cliper_body_classes( $classes ) {

	$header_style       = cliper_get_option( 'header_style', CLIPER_HEADER_LAYOUT );
	$page_meta_array    = cliper_metabox_value( '_cliper_page_metabox' );
	$page_header_switch = isset( $page_meta_array['overwrite_page_header'] ) ? $page_meta_array['overwrite_page_header'] : false;

	if ( is_page() && '1' == $page_header_switch ) {
		$header_style    = isset( $page_meta_array['header_style'] ) ? $page_meta_array['header_style'] : $header_style;
	}

	if ( 'header-1' == $header_style ) {
		$classes[] = 'header__style__1';
	} elseif ( 'header-2' == $header_style ) {
		$classes[] = 'header__style__2';
	} elseif ( 'header-3' == $header_style ) {
		$classes[] = 'header__style__3';
	} elseif ( 'header-4' == $header_style ) {
		$classes[] = 'header__style__4';
	} elseif ( 'header-5' == $header_style ) {
		$classes[] = 'header__style__5';
	} elseif ( 'header-6' == $header_style ) {
		$classes[] = 'header__style__6';
	} elseif ( 'header-7' == $header_style ) {
		$classes[] = 'header__center__logo';
	} elseif ( 'header-8' == $header_style ) {
		$classes[] = 'header__center__logo';
	} elseif ( 'header-9' == $header_style ) {
		$classes[] = 'header__style__9';
	} elseif ( 'header-10' == $header_style ) {
		$classes[] = 'header__style__10';
	} elseif ( 'header-11' == $header_style ) {
		$classes[] = 'header__style__11';
	} elseif ( 'header-12' == $header_style ) {
		$classes[] = 'header__style__12';
	} elseif ( 'header-13' == $header_style ) {
		$classes[] = 'header__style__13 header__style__1';
	}

	// Theme Class
	$classes[] = 'cliper__main__class';

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'main-sidebar' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cliper_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cliper_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'cliper_pingback_header' );