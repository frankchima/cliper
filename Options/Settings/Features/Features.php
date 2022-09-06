<?php

/*-----------------------------------
EASY DIGITAL DOWNLOAD SECTION
------------------------------------*/
if ( !class_exists( 'Easy_Digital_Downloads' ) ) {
    return;
}

/*-----------------------------------
    FEATURES TAB SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'id'     => 'Features_Tab',
        'title'  => esc_html__( 'Features & Frameworks', 'cliper' ),
        'icon'   => 'fa fa-sitemap',
    )
);

/*-----------------------------------
    REQUIRE OPTION FILES
------------------------------------*/
require_once( CLIPER_ROOT . '/Options/Settings/Features/EDD.php' );