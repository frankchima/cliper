<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cliper_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'cliper' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'cliper' ),
		'before_widget' => '<div id="%1$s" class="cliper-single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Sidebar', 'cliper' ),
		'id'            => 'header-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'cliper' ),
		'before_widget' => '<div id="%1$s" class="cliper-single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );

	$footer_widget_one = array( 'one', 'two', 'three', 'five', 'six', 'seven', 'four', 'eight', 'nine' );
	if ( in_array( cliper_get_option( 'footer_top_columns', 'four' ), $footer_widget_one ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Sidebar 1', 'cliper' ),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__( 'Add footer widgets here.', 'cliper' ),
			'before_widget' => '<div id="%1$s" class="cliper-single-widgets %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	$footer_widget_two = array( 'two', 'three', 'five', 'six', 'seven', 'four', 'eight', 'nine' );
	if ( in_array( cliper_get_option( 'footer_top_columns', 'four' ), $footer_widget_two ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Sidebar 2', 'cliper' ),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__( 'Add footer widgets here.', 'cliper' ),
			'before_widget' => '<div id="%1$s" class="cliper-single-widgets %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	$footer_widget_three = array( 'three', 'five', 'six', 'seven', 'four', 'eight', 'nine' );
	if ( in_array( cliper_get_option( 'footer_top_columns', 'four' ), $footer_widget_three ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Sidebar 3', 'cliper' ),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__( 'Add footer widgets here.', 'cliper' ),
			'before_widget' => '<div id="%1$s" class="cliper-single-widgets %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	$footer_widget_four = array( 'four', 'eight', 'nine' );
	if ( in_array( cliper_get_option( 'footer_top_columns', 'four' ), $footer_widget_four ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Sidebar 4', 'cliper' ),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__( 'Add footer widgets here.', 'cliper' ),
			'before_widget' => '<div id="%1$s" class="cliper-single-widgets %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'cliper_widgets_init' );