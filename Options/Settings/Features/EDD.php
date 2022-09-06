<?php

/*-----------------------------------
EASY DIGITAL DOWNLOAD SECTION
------------------------------------*/
if ( !class_exists( 'Easy_Digital_Downloads' ) ) {
    return;
}

CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Features_Tab',
        'title'  => esc_html__( 'Easy Digital Downloads', 'cliper' ),
        'icon'   => 'fa fa-download',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Product Setting', 'cliper' ),
            ),
            array(
                'id'      => 'product_grid_style',
                'type'    => 'select',
                'title'   => esc_html__( 'Product Grid Style', 'cliper' ),
                'desc'    => esc_html__( 'Set the product grid style which you want.', 'cliper' ),
                'options' => array(
                    'product_grid_1' => esc_html__( 'Product Grid Style 1', 'cliper' ),
                    'product_grid_2' => esc_html__( 'Product Grid Style 2', 'cliper' ),
                ),
                'default' => 'product_grid_1',
            ),
            array(
                'id'      => 'enable_product_buynow_title',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Custom Buynow Title?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to set custom buy now title you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
                'id'         => 'product_buynow_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Buynow Button Title', 'cliper' ),
                'desc'       => esc_html__( 'Set your preferred custom buynow button title.', 'cliper' ),
                'default'    => esc_html__( 'Purchase', 'cliper' ),
                'dependency' => array( 'enable_product_buynow_title', '==', 'true' ),
            ),
            array(
                'id'      => 'enable_product_preview_text',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Custom Preview Title?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to set custom preview title you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
                'id'         => 'product_preview_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Preview Button Title', 'cliper' ),
                'desc'       => esc_html__( 'Set your preferred custom preview button title.', 'cliper' ),
                'default'    => esc_html__( 'Preview', 'cliper' ),
                'dependency' => array( 'enable_product_preview_text', '==', 'true' ),
            ),
            array(
                'id'      => 'product_variable_pricing_options',
                'type'    => 'select',
                'title'   => esc_html__( 'Product Variable Price Option', 'cliper' ),
                'desc'    => esc_html__( 'Set the product variable price option which you want.', 'cliper' ),
                'options' => array(
                    'default' => esc_html__( 'Default Style', 'cliper' ),
                    'custom'  => esc_html__( 'Custom Style', 'cliper' ),
                ),
                'default' => 'custom',
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Product Archive Setting', 'cliper' ),
            ),
            array(
                'id'      => 'edd_product_per_page',
                'type'    => 'slider',
                'title'   => esc_html__( 'Archive Product Per Page', 'cliper' ),
                'desc'    => esc_html__( 'Set the product per page in all archive pages for edd product.', 'cliper' ),
                'min'     => 1,
                'max'     => 100,
                'step'    => 1,
                'unit'    => '',
                'default' => 6,
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Login Page Setting', 'cliper' ),
            ),
            array(
                'id'      => 'login_page_logo',
                'type'    => 'media',
                'title'   => esc_html__( 'Upload Login Page Logo', 'cliper' ),
                'desc'    => esc_html__( 'Upload a login page logo max width ( 250px ).', 'cliper' ),
                'default' => '',
                'library' => 'image',
                'preview' => true,
                'url'     => false,
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Email Template Setting', 'cliper' ),
            ),
            array(
                'id'      => 'accent_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Accent Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the email template accent color.', 'cliper' ),
                'default' => '#ff3366',
            ),
            array(
                'id'      => 'accent_color_text',
                'type'    => 'color',
                'title'   => esc_html__( 'Accent Text Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the email template accent text color.', 'cliper' ),
                'default' => '#ffffff',
            ),
            array(
                'id'      => 'regular_text_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the email template text color.', 'cliper' ),
                'default' => '#777777',
            ),
        ),
    )
);