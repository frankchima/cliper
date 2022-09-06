<?php

/*-----------------------------------
    SCRIPTS TAB SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'id'     => 'Scripts_Tab',
        'title'  => esc_html__( 'Custom Scripts', 'cliper' ),
        'icon'   => 'fa fa-code',
    )
);

/*-----------------------------------
    REQUIRE OPTION FILES
------------------------------------*/
require_once( CLIPER_ROOT . '/Options/Settings/Scripts/Meta.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Scripts/CSS.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Scripts/JavaScript.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Scripts/Analytics.php' );