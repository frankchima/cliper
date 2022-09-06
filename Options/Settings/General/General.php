<?php 

/*-----------------------------------
    GENARAL TAB SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY, 
    array(
        'id'     =>'General_Tab',
        'icon'   => 'fa fa-cogs',
        'title'  => esc_html__( 'General','cliper')
    )
);

/*-----------------------------------
    REQUIRE OPTION FILES
------------------------------------*/
require_once( CLIPER_ROOT . '/Options/Settings/General/Typography.php' );
require_once( CLIPER_ROOT . '/Options/Settings/General/Banner.php' );
require_once( CLIPER_ROOT . '/Options/Settings/General/Global-Design.php' );