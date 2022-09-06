<?php 

/*-----------------------------------
    HEADER TAB SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'id'    => 'Header_Tab',
        'title' => esc_html__( 'Header', 'cliper' ),
        'icon'  => 'fa fa-home',
    )
);

/*-----------------------------------
    REQUIRE OPTION FILES
------------------------------------*/
require_once( CLIPER_ROOT . '/Options/Settings/Header/Topbar.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Header/Layout.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Header/Main-Menu.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Header/Mobile-Menu.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Header/Logo.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Header/Offcanvas.php' );
require_once CLIPER_ROOT . '/Options/Settings/Header/Currency-Menu.php';
