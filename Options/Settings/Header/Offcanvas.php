<?php

/*-----------------------------------
    LOGO SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Header_Tab',
        'title'  => esc_html__( 'Offcanvas Panel', 'cliper' ),
        'icon'   => 'fa fa-align-right',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Offcanvas Logo', 'cliper' ),
            ),
            array(
                'id'      => 'enable_offcanvas_logo',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable OffCanvas Logo', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable offcanvas logo you can set ( YES / NO )', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'         => 'offcanvas_logo',
                'type'       => 'media',
                'title'      => esc_html__( 'Offcanvas Logo', 'cliper' ),
                'desc'       => esc_html__( 'Upload offcanvas logo width 180px and height 80px.', 'cliper' ),
                'default'    => '',
                'library'    => 'image',
                'preview'    => true,
                'url'        => false,
                'help'       => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'cliper' ),
                'dependency' => array( 'enable_offcanvas_logo', '==', 'true' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Offcanvas Search', 'cliper' ),
            ),
            array(
                'id'      => 'enable_offcanvas_search',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable OffCanvas Search', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable offcanvas search you can set ( YES / NO )', 'cliper' ),
                'default' => true,
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Offcanvas Description', 'cliper' ),
            ),
            array(
                'id'      => 'enable_offcanvas_description',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable OffCanvas Description', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable offcanvas description you can set ( YES / NO )', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'offcanvas_description',
                'type'    => 'textarea',
                'title'   => esc_html__( 'OffCanvas Description', 'cliper' ),
                'desc'    => esc_html__( 'Set the offcanvas description text form here.', 'cliper' ),
                'dependency' => array( 'enable_offcanvas_description', '==', 'true' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Offcanvas mobile Menu Color', 'cliper' ),
            ),
            array(
                'id'      => 'offcanvas_mobile_menu_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Offcanvas Menu Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the menu color by color picker', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array('.offcanvas__navigation>ul>li>a','.offcanvas__navigation ul.sub-menu>li>a'),
                'output_important' => true,
            ),
            array(
                'id'      => 'offcanvas_mobile_menu_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Offcanvas Menu Active & Hover Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the menu item active &hover color by color picker', 'cliper' ),
                'default' => '#438FF9',
                'output'  => array('.offcanvas__navigation>ul>li>a:hover','.offcanvas__navigation ul.sub-menu>li>a:hover'),
                'output_important' => true,
            ),
        ),
    )
);