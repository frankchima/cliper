<?php

/*-----------------------------------
    FOOTER TOP SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Footer_Tab',
        'title'  => esc_html__( 'Footer Top', 'cliper' ),
        'icon'   => 'fa fa-th',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Top Columns Layout', 'cliper' ),
            ),
            array(
                'id'      => 'footer_top_columns',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Footer Top Columns', 'cliper' ),
                'desc'    => esc_html__( 'You can chose and select footer layout style type from here..', 'cliper' ),
                'options' => array(
                    'one'   => CLIPER_ROOT_IMAGE . '/footer/footer_1.png',
                    'two'   => CLIPER_ROOT_IMAGE . '/footer/footer_2.png',
                    'three' => CLIPER_ROOT_IMAGE . '/footer/footer_3.png',
                    'four'  => CLIPER_ROOT_IMAGE . '/footer/footer_4.png',
                    'five'  => CLIPER_ROOT_IMAGE . '/footer/footer_5.png',
                    'six'   => CLIPER_ROOT_IMAGE . '/footer/footer_6.png',
                    'seven' => CLIPER_ROOT_IMAGE . '/footer/footer_7.png',
                    'eight' => CLIPER_ROOT_IMAGE . '/footer/footer_8.png',
                    'nine'  => CLIPER_ROOT_IMAGE . '/footer/footer_9.png',
                ),
                'default' => 'four',
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Text Color', 'cliper' ),
            ),
            array(
                'id'      => 'footer_text_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Footer Text Color', 'cliper' ),
                'desc'    => esc_html__( 'Set footer text color form here.', 'cliper' ),
                'default' => '#c2d1e2',
                'output'  => '.footer-area'
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Link Color', 'cliper' ),
            ),
            array(
                'id'               => 'footer_link_color',
                'type'             => 'link_color',
                'title'            => esc_html__( 'Footer links color', 'cliper' ),
                'desc'             => esc_html__( 'Set the footer area link color & hover color.', 'cliper' ),
                'output'           => array('.footer-top a','.footer-area .widget_pages ul li a', '.footer-area .widget_nav_menu ul li a'),
                'output_important' => true,
                'default'          => array(
                    'color' => '#ffffff',
                    'hover' => '#438FF9',
                ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Heading Color', 'cliper' ),
            ),
            array(
                'id'      => 'heading_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Footer Heading Color', 'cliper' ),
                'desc'    => esc_html__( 'Set footer footer heading color form here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( '.footer-area h1','.footer-area h2','.footer-area h3','.footer-area h4','.footer-area h5','.footer-area h6' ),
            ),

            array(
                'id'      => 'heading_border_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Footer Heading Border Color', 'cliper' ),
                'desc'    => esc_html__( 'Set footer footer heading border color form here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( 'border-color' => '.footer-area h3' ),
            ),

            array(
                'id'      => 'heading_before_after_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Footer Heading Before / After Color', 'cliper' ),
                'desc'    => esc_html__( 'Set footer footer heading before / after color form here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( 'background' => '.footer-area h3:before,.footer-area h3:after' ),
            ),
        ),
    )
);