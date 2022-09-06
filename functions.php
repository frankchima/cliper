<?php

/*---------------------------------------
*   DEFINE FILE FOLDER ROOT
-----------------------------------------*/
define( 'CLIPER_ROOT', get_template_directory() );
define( 'CLIPER_ROOT_URI', get_template_directory_uri() );
define( 'CLIPER_ROOT_IMAGE', CLIPER_ROOT_URI . '/assets/img' );
define( 'CLIPER_ROOT_CSS', CLIPER_ROOT_URI . '/assets/css' );
define( 'CLIPER_ROOT_JS', CLIPER_ROOT_URI . '/assets/js' );
define( 'CLIPER_ROOT_FONTS', CLIPER_ROOT_URI . '/assets/fonts' );
define( 'CLIPER_ROOT_PLUGINS', CLIPER_ROOT_URI . '/lib/plugins' );

/*-----------------------------------------
*   THEME SETTINGS
------------------------------------------*/
define( 'CLIPER_OPTION_KEY', 'cliper_options' );
define( 'CLIPER_META_KEY', '_cliper_page_metabox' );
define( 'CLIPER_HEADER_LAYOUT', 'header-1' );
define( 'CLIPER_HEADER_ALIGN', 'right' );

/*---------------------------------------
*   THEME LAYOUTS
----------------------------------------*/
define( 'CLIPER_LAYOUT', 'right_sidebar' );
define( 'CLIPER_COLUMNS', 'one_column' );

/*----------------------------------------
*   THEME VERSION CONTROL
-----------------------------------------*/

define( 'CLIPER_DEV_MODE', true );
if ( CLIPER_DEV_MODE || WP_DEBUG ) {
    define( 'CLIPER_VERSION', time() );
} else {
    define( 'CLIPER_VERSION', wp_get_theme()->get( 'Version' ) );
}

/*----------------------------------------
*   ADD THEME AFTER SETUP FUNCTIONALITY
-----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/setup.php' ) ) {
    require_once CLIPER_ROOT . '/inc/setup.php';
}

/*----------------------------------------
*   ADD THEME WIDGET FUNCTIONALITY
-----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/widgets.php' ) ) {
    require_once CLIPER_ROOT . '/inc/widgets.php';
}

/*----------------------------------------
*   IMPLEMENT ALL SCRIPTS
-----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/scripts.php' ) ) {
    require_once CLIPER_ROOT . '/inc/scripts.php';
}

/*--------------------------------------
*   CUSTOM FUNCTIONS .
----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/custom-functions.php' ) ) {
    require_once CLIPER_ROOT . '/inc/custom-functions.php';
}

/*--------------------------------------
*   THEME OPTON & CUSTOMIZER ADDITIONS.
----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/Options/Init.php' ) ) {
    require_once CLIPER_ROOT . '/Options/Init.php';
}

if ( file_exists( CLIPER_ROOT . '/inc/customizer.php' ) ) {
    require_once CLIPER_ROOT . '/inc/customizer.php';
}

/*----------------------------------------
*   CUSTOM TEMPLATE TAGS FOR THIS THEME.
----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/template-tags.php' ) ) {
    require_once CLIPER_ROOT . '/inc/template-tags.php';
}

/*--------------------------------------
*   FUNCTIONS WHICH ENHANCE THE THEME BY HOOKING INTO WORDPRESS.
----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/template-functions.php' ) ) {
    require_once CLIPER_ROOT . '/inc/template-functions.php';
}

/*--------------------------------------
*   BREADCRUMBS
---------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/breadcrumb.php' ) ) {
    require_once CLIPER_ROOT . '/inc/breadcrumb.php';
}

/*--------------------------------------
*   FUNCTIONS FOR THEME OPTIONS STYEING.
----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/style.php' ) ) {
    require_once CLIPER_ROOT . '/inc/style.php';
}

/*--------------------------------------
*   CUSTOM NAV WALKER
----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/nav-menu-walker.php' ) ) {
    require_once CLIPER_ROOT . '/inc/nav-menu-walker.php';
}

/*--------------------------------------
*   DEMO CONTENT IMPORTER
---------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/importer.php' ) ) {
    require_once CLIPER_ROOT . '/inc/importer.php';
}
if ( file_exists( CLIPER_ROOT . '/inc/importer_alt.php' ) ) {
    require_once CLIPER_ROOT . '/inc/importer_alt.php';
}

/*--------------------------------------
*   REQUIRED PLUGINS.
----------------------------------------*/
if ( file_exists( CLIPER_ROOT . '/inc/required-plugins.php' ) ) {
    require_once CLIPER_ROOT . '/inc/required-plugins.php';
}