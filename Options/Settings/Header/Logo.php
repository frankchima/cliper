<?php

/*-----------------------------------
    LOGO SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Header_Tab',
        'title'  => esc_html__( 'Logo Upload', 'cliper' ),
        'icon'   => 'fa fa-image',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Main Image Logo', 'cliper' ),
            ),
            array(
                'id'      => 'logo',
                'type'    => 'media',
                'title'   => esc_html__( 'Main Logo', 'cliper' ),
                'desc'    => esc_html__( 'Upload main logo width 180px and height 65px.', 'cliper' ),
                'default' => '',
                'library' => 'image',
                'preview' => true,
                'url'     => false,
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'cliper' ),
            ),
            array(
                'id'      => 'sticky_logo',
                'type'    => 'media',
                'title'   => esc_html__( 'Sticky Logo', 'cliper' ),
                'desc'    => esc_html__( 'Upload sticky logo width 180px and height 65px.', 'cliper' ),
                'default' => '',
                'library' => 'image',
                'preview' => true,
                'url'     => false,
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'cliper' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Text Logo Color', 'cliper' ),
            ),
            array(
                'id'      => 'logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Logo Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the text logo color by color picker.', 'cliper' ),
                'default' => '#1A152E',
                'output'  => array(),
            ),
            array(
                'id'      => 'sticky_logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Sticky Text Logo Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the text logo sticky color by color picker.', 'cliper' ),
                'default' => '#00152e',
                'output'  => array(),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'mobile Text Logo Color', 'cliper' ),
            ),
            array(
                'id'      => 'mobile_logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Logo Color On mobile', 'cliper' ),
                'desc'    => esc_html__( 'Set the text logo color by color picker.', 'cliper' ),
                'default' => '#00152e',
                'output'  => array(),
            ),
            array(
                'id'      => 'mobile_sticky_logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Sticky Text Logo Color On mobile', 'cliper' ),
                'desc'    => esc_html__( 'Set the text logo sticky color by color picker.', 'cliper' ),
                'default' => '#1A152E',
                'output'  => array(),
            ),
        )
    )
);