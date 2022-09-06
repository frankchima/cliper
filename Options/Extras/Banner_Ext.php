<?php

CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'icon'   => 'fa fa-book',
        'title'  => 'Banner',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'cliper' ),
            ),
            array(
                'id'      => 'blog_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Banner', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'blog_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Banner', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'banner_blog_title',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Banner', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'banner_blog_image',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Background', 'cliper' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'cliper' ),
                'default' => '',
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'cliper' ),
            ),
            array(
                'id'      => 'page_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Banner', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'page_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Banner', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'banner_page_title',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Banner', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'banner_page_image',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Background', 'cliper' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'cliper' ),
                'default' => '',
            ),
            array(
                'id'      => 'layout_extras',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Header Style', 'cliper' ),
                'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'cliper' ),
                'options' => array(
                    'header-1'  => CLIPER_ROOT_IMAGE . '/header/header_1.png',
                    'header-2'  => CLIPER_ROOT_IMAGE . '/header/header_2.png',
                    'header-3'  => CLIPER_ROOT_IMAGE . '/header/header_3.png',
                    'header-4'  => CLIPER_ROOT_IMAGE . '/header/header_4.png',
                    'header-5'  => CLIPER_ROOT_IMAGE . '/header/header_5.png',
                    'header-6'  => CLIPER_ROOT_IMAGE . '/header/header_6.png',
                    'header-7'  => CLIPER_ROOT_IMAGE . '/header/header_7.png',
                    'header-8'  => CLIPER_ROOT_IMAGE . '/header/header_7.png',
                    'header-9'  => CLIPER_ROOT_IMAGE . '/header/header_1.png',
                    'header-10' => CLIPER_ROOT_IMAGE . '/header/header_10.jpg',
                    'header-11' => CLIPER_ROOT_IMAGE . '/header/header_11.jpg',
                ),
                'default' => 'header-1',
            ),
        ),
    )
);