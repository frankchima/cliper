<?php 
        
/*-----------------------------------
    FOOTER TAB SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'id'    => 'Footer_Tab',
        'title' => esc_html__( 'Footer', 'cliper' ),
        'icon'  => 'fa fa-credit-card',
    )
);

/*-----------------------------------
    REQUIRE OPTION FILES
------------------------------------*/
require_once( CLIPER_ROOT . '/Options/Settings/Footer/Footer-General.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Footer/Footer-Top.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Footer/Footer-Bottom.php' );
require_once( CLIPER_ROOT . '/Options/Settings/Footer/Copyright.php' );