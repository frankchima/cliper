<?php

/*-----------------------------------
    BANNER SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'title'  => esc_html__( 'Banner', 'cliper' ),
        'parent' => 'General_Tab',
        'icon'   => 'fa fa-credit-card',

        'fields' => array(
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Banner Image', 'cliper' ),
            ),      
            array(
                'id' => 'breadcrumb_bg',
                'title' => esc_html__('Background Image', 'cliper'),
                'type' => 'background',
              'desc'                  => esc_html__( 'Set the banner background image.', 'cliper' ),
                'default' => array(
                    'background-size' => 'cover',
                    'background-position' => 'center bottom',
                    'background-repeat' => 'no-repeat',
                ),
                'background_color' => false,
            ),   

            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Banner Overlay', 'cliper' ),
            ),
            array(
                'id'                    => 'banner_overlay_background',
                'type'                  => 'background',
                'title'                 => esc_html__( 'Banner Background Overlay', 'cliper' ),
                'subtitle'              => esc_html__( 'Set the banner background overlay.', 'cliper' ),
                'desc'                  => esc_html__( 'Set the banner background overlay color, image and gradient color. If you set only first color field it will be a simple solid color for background and if set 2nd color field too it will be set a gradient color and if you set a image it will be set a background image.', 'cliper' ),
                'background_image'      => true,
                'background_position'   => true,
                'background_repeat'     => true,
                'background_attachment' => true,
                'background_size'       => true,
                'background_gradient'   => true,
                'background_origin'     => true,
                'background_clip'       => true,
                'background_blend_mode' => true,
                'output'                => '.banner-area-bg:after',
            ),
            array(
                'id'          => 'banner_overlay_opacity',
                'type'        => 'slider',
                'title'       => esc_html__( 'Banner Overlay Opacity', 'cliper' ),
                'desc'        => esc_html__( 'Set the main Banner overlay opacity max value is 1 in decimal', 'cliper' ),
                'min'         => 0,
                'max'         => 1,
                'step'        => 0.01,
                'unit'        => ' ',
                //'default'     => 0.5,
                'output_mode' => 'opacity',
                'output'      => '.banner-area-bg:after',
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Banner Text Colors', 'cliper' ),
            ),
            array(
                'id'      => 'header_textcolor',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the header text color by color picker. NOTE: You can also change header text color form customizer panel.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( '.banner-area', '.page-title h1', '.page-title', '.breadcumb', '.breadcumb a', '.breadcumb a span', '.breadcumb span', '.breadcumb span.active' ),
            ),
            array(
                'id'               => 'header_link_color',
                'type'             => 'link_color',
                'title'            => esc_html__( 'links color', 'cliper' ),
                'desc'             => esc_html__( 'Set the header banner area link color & hover color.', 'cliper' ),
                'output'           => array( '.banner-area a', '.banner-area .breadcumb a', '.banner-area .breadcumb a span','.breadcumb span', '.breadcumb span.active' ),
                'default'          => array(
                    'color' => '#ffffff',
                    'hover' => '#ffffff',
                ),
            ),
            array(
                'id'      => 'header_link_active_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Link Active Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the header banner area link active color by color picker. NOTE: You can also change header text color form customizer panel.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( '.banner-area .breadcumb span.active:last-child' ),
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Banner Text Align', 'cliper' ),
            ),
            array(
                'id'      => 'header_text_align',
                'type'    => 'select',
                'title'   => esc_html__( 'Text Align', 'cliper' ),
                'desc'    => esc_html__( 'Set the header text alignment ( Left / Right / Center )', 'cliper' ),
                'options' => array(
                    'left'   => esc_html__( 'Left', 'cliper' ),
                    'center' => esc_html__( 'Center', 'cliper' ),
                    'right'  => esc_html__( 'Right', 'cliper' ),
                ),
                'default' => 'center',
            ),
        ),
    )
);