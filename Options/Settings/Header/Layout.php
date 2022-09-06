<?php

/*-----------------------------------
    HEADER LAYOUT SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Header_Tab',
        'title'  => esc_html__( 'Header Layout', 'cliper' ),
        'icon'   => 'fa fa-credit-card',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Header Layout Style', 'cliper' ),
            ),
            array(
                'id'      => 'enable_header_style',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Header Style', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable header style you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Header Layout', 'cliper' ),
            ),
            array(
                'id'      => 'header_style',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Header Style', 'cliper' ),
                'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'cliper' ),
                'options' => cliper_header_layout( array( 'header-1', 'header-12', 'header-13' ) ),
                'default' => CLIPER_HEADER_LAYOUT,
            ),
        )
    )
);