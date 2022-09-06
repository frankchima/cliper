<?php 

/*-----------------------------------
    FAVICON ICON SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
	array(
		'id'    => 'Blog_Post_Page_Tab',
		'title' => esc_html__( 'Blog, Post & Page', 'cliper' ),
		'icon'  => 'fa fa-book',
	)
);

/*-----------------------------------
    REQUIRE OPTION FILES
------------------------------------*/
require_once( CLIPER_ROOT . '/Options/Settings/Blog-Post-Page/Blog.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Blog-Post-Page/Single.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Blog-Post-Page/Page.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Blog-Post-Page/404.php' );