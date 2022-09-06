<?php 

/*-----------------------------------------
	CONTROL CORE CLASSES FOR AVOID ERRORS
------------------------------------------*/
if( class_exists( 'CSF' ) ) {

	/*-----------------------------------
		REQUIRE META FILES
	------------------------------------*/
	require_once( CLIPER_ROOT . '/Options/Posts/Audio.php' );
	require_once( CLIPER_ROOT . '/Options/Posts/Video.php' );
	require_once( CLIPER_ROOT . '/Options/Posts/Gallery.php' );

}