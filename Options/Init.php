<?php
/**
* Theme Option Parent Page.
* @package Cliper
* @since 1.0.0
*/

if( !class_exists( 'CSF' ) ) {
	return;
}

if ( ! current_user_can( 'manage_options' ) ) {
	return;
}

/*****************************************************
	INCLUDE ALL OPTION FILE HERE
******************************************************/

/*-------------------------------
	THEME OPTION INIT
---------------------------------*/
require_once CLIPER_ROOT . '/Options/Parent-Page.php';

/*-------------------------------
	THEME OPTION SETTINGS
---------------------------------*/
require_once CLIPER_ROOT . '/Options/Settings/General/General.php';
require_once CLIPER_ROOT . '/Options/Settings/Header/Header.php';
require_once CLIPER_ROOT . '/Options/Settings/Favicon/Fav-Icon.php';
require_once CLIPER_ROOT . '/Options/Settings/Scroll-Top/Scroll-Top-Button.php';
require_once CLIPER_ROOT . '/Options/Settings/Preloader/Pre-Loader.php';
require_once CLIPER_ROOT . '/Options/Settings/Social/Social.php';
require_once CLIPER_ROOT . '/Options/Settings/Blog-Post-Page/Blog-Post-Page.php';
require_once CLIPER_ROOT . '/Options/Settings/Features/Features.php';

if( file_exists( CLIPER_ROOT . '/woocommerce/Options/WooCommerce.php' ) ){
	require_once( CLIPER_ROOT . '/woocommerce/Options/WooCommerce.php' );
}

require_once CLIPER_ROOT . '/Options/Settings/Footer/Footer.php';
require_once CLIPER_ROOT . '/Options/Settings/Scripts/Scripts.php';
require_once CLIPER_ROOT . '/Options/Settings/Malicious/Malicious.php';
require_once CLIPER_ROOT . '/Options/Settings/Backup/BackUp.php';

/*--------------------------------
	POST META
---------------------------------*/
require_once CLIPER_ROOT . '/Options/Posts/Post.php';

/*--------------------------------
	PAGE META
---------------------------------*/
require_once CLIPER_ROOT . '/Options/Pages/Page.php';

/*--------------------------------
	TAXONOMY META
---------------------------------*/
require_once CLIPER_ROOT . '/Options/Taxonomy/Category.php';

/*--------------------------------
	USER META
---------------------------------*/
require_once CLIPER_ROOT . '/Options/User/User.php';

/*--------------------------------
	MENU META
---------------------------------*/
require_once CLIPER_ROOT . '/Options/Menu/Menu.php';