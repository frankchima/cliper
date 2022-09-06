<?php
/*-----------------------------------
MENU METABOX
------------------------------------*/
if ( class_exists( 'CSF' ) ) {

    $prefix = '_cliper_menu';

    /*-----------------------------------
    MENU METABOX SECTION
    ------------------------------------*/
    CSF::createNavMenuOptions( $prefix, array(
        'data_type' => 'serialize',
    ) );

    /*-----------------------------------
    MENU ITEM METABOX SECTION
    ------------------------------------*/
    CSF::createSection( $prefix, array(
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Megamenu', 'cliper' ),
            ),
            array(
                'id'      => 'enable_megamenu',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Megamenu?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to set megamenu you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
                'id'      => 'megamenu_content_type',
                'type'    => 'select',
                'title'   => esc_html__( 'Megamenu Content Type', 'cliper' ),
                'desc'    => esc_html__( 'Set the megamenu content type form here you can set ( Elementor Template / Default Menu Items )', 'cliper' ),
                'options' => array(
                    'default'   => esc_html__( 'Default Menu Items', 'cliper' ),
                    'elementor' => esc_html__( 'Elementor Content', 'cliper' ),
                ),
                'default'    => 'default',
                'dependency' => array( 'enable_megamenu', '==', 'true' ),
            ),
            array(
                'id'      => 'megamenu_colums',
                'type'    => 'select',
                'title'   => esc_html__( 'Megamenu Columns', 'cliper' ),
                'desc'    => esc_html__( 'Set the megamenu columns form here you can set ( 1,2,3,4,5,6,7,8 )', 'cliper' ),
                'options' => array(
                    '2' => esc_html__( '2 Columns', 'cliper' ),
                    '3' => esc_html__( '3 Columns', 'cliper' ),
                    '4' => esc_html__( '4 Columns', 'cliper' ),
                    '5' => esc_html__( '5 Columns', 'cliper' ),
                    '6' => esc_html__( '6 Columns', 'cliper' ),
                    '7' => esc_html__( '7 Columns', 'cliper' ),
                    '8' => esc_html__( '8 Columns', 'cliper' ),
                ),
                'default'    => '4',
                'dependency' => array( 'enable_megamenu|megamenu_content_type', '==|!=', 'true|elementor' ),
            ),
            array(
                'id'         => 'megamenu_elementor_content',
                'type'       => 'select',
                'title'      => esc_html__( 'Select Megamenu Template', 'cliper' ),
                'desc'       => esc_html__( 'You can chose and select elementor megamenu content template from here..', 'cliper' ),
                'options'    => cliper_get_elementor_post_array(),
                'dependency' => array( 'enable_megamenu|megamenu_content_type', '==|==', 'true|elementor' ),
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Add Menu Bedge', 'cliper' ),
            ),
            array(
                'id'      => 'add_menu_bedge',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Add Menu Bedge?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to set menu bedge you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
                'id'         => 'menu_bedge_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Set Menu Bedge Text', 'cliper' ),
                'desc'       => esc_html__( 'If you want to set menu bedge you can set set here.', 'cliper' ),
                'dependency' => array( 'add_menu_bedge', '==', 'true' ),
            ),

            array(
                'type'       => 'subheading',
                'content'    => esc_html__( 'Bedge Style', 'cliper' ),
                'dependency' => array( 'add_menu_bedge', '==', 'true' ),
            ),
            array(
                'id'      => 'bedge_color',
                'type'    => 'color_group',
                'options' => array(
                    'text_color' => esc_html__( 'Text color', 'cliper' ),
                    'bg_color'   => esc_html__( 'Background color', 'cliper' ),
                ),
                'dependency' => array( 'add_menu_bedge', '==', 'true' ),
            ),

        ),
    ) );

}