<?php 

/*-----------------------------------------
	CONTROL CORE CLASSES FOR AVOID ERRORS
------------------------------------------*/
if( class_exists( 'CSF' ) ) {

	/*-----------------------------------
	    PAGE METABOX SECTION
	------------------------------------*/
	CSF::createMetabox( CLIPER_META_KEY,
		array(
			'title'           => esc_html__( 'Page Settings', 'cliper' ),
			'post_type'       => 'page',
			'context'         => 'normal',
			'priority'        => 'high',
			'show_restore'    => true,
			'enqueue_webfont' => true,
			'async_webfont'   => false,
			'output_css'      => true,
			'theme'           => 'dark',
			'id'              =>'Page_Meta_Tab',
		)
	);

	/*-----------------------------------
		REQUIRE META FILES
	------------------------------------*/
	require_once( CLIPER_ROOT . '/Options/Pages/Page-Header.php' );
	require_once( CLIPER_ROOT . '/Options/Pages/Page-Topbar.php' );
	require_once( CLIPER_ROOT . '/Options/Pages/Page-Menu.php' );
	require_once( CLIPER_ROOT . '/Options/Pages/Page-Typography.php' );
	require_once( CLIPER_ROOT . '/Options/Pages/Page-Footer.php' );
	require_once( CLIPER_ROOT . '/Options/Pages/Page-Css.php' );
}