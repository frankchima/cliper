<?php

/*-----------------------------------
    TYPOGRAPHY SECTION
------------------------------------*/
CSF::createSection( CLIPER_META_KEY,
    array(
        'title'  => esc_html__( 'Page Typography', 'cliper' ),
        'parent' => 'Page_Meta_Tab',
        'fields' => array(

            /*-----------------------
                BODY TYPOGRAPHY
            -------------------------*/
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Body Typography', 'cliper' ),
            ),
            array(
                'id'                 => 'body_font',
                'type'               => 'typography',
                'title'              => esc_html__( 'Body Font', 'cliper' ),
                'subtitle'           => esc_html__( 'Set the body font for whole theme.', 'cliper' ),
                'chosen'             => true,
                'text_align'         => false,
                'text_transform'     => true,
                'letter_spacing'     => true,
                'word_spacing'       => true,
                'font_weight'        => true,
                'line_height'        => true,
                'custom_style'       => true,
                'backup_font_family' => true,
                'unit'               => 'px',
                'preview'            => 'always',              
                'output'             => 'body',                
                'default'            => array(),
            ),

            /*-----------------------
                HEADING H1 TYPOGRAPHY
            -------------------------*/
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Heading H1 Typography', 'cliper' ),
            ),
            array(
                'id'                 => 'heading_1_font',
                'type'               => 'typography',
                'title'              => esc_html__( 'Heading H1 Font', 'cliper' ),
                'subtitle'           => esc_html__( 'Set the heading H1 font for whole theme.', 'cliper' ),
                'chosen'             => true,
                'text_align'         => false,
                'text_transform'     => true,
                'letter_spacing'     => true,
                'word_spacing'       => true,
                'font_weight'        => true,
                'line_height'        => true,
                'custom_style'       => true,
                'backup_font_family' => true,
                'unit'               => 'px',
                'preview'            => 'always',              
                'output'             => 'h1',
            ),

            /*-----------------------
                HEADING H2 TYPOGRAPHY
            -------------------------*/
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Heading H2 Typography', 'cliper' ),
            ),
            array(
                'id'                 => 'heading_2_font',
                'type'               => 'typography',
                'title'              => esc_html__( 'Heading H2 Font', 'cliper' ),
                'subtitle'           => esc_html__( 'Set the heading H2 font for whole theme.', 'cliper' ),
                'chosen'             => true,
                'text_align'         => false,
                'text_transform'     => true,
                'letter_spacing'     => true,
                'word_spacing'       => true,
                'font_weight'        => true,
                'line_height'        => true,
                'custom_style'       => true,
                'backup_font_family' => true,
                'unit'               => 'px',
                'preview'            => 'always',              
                'output'             => 'h2',
            ),

            /*-----------------------
                HEADING H3 TYPOGRAPHY
            -------------------------*/
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Heading H3 Typography', 'cliper' ),
            ),
            array(
                'id'                 => 'heading_3_font',
                'type'               => 'typography',
                'title'              => esc_html__( 'Heading H3 Font', 'cliper' ),
                'subtitle'           => esc_html__( 'Set the heading H2 font for whole theme.', 'cliper' ),
                'chosen'             => true,
                'text_align'         => false,
                'text_transform'     => true,
                'letter_spacing'     => true,
                'word_spacing'       => true,
                'font_weight'        => true,
                'line_height'        => true,
                'custom_style'       => true,
                'backup_font_family' => true,
                'unit'               => 'px',
                'preview'            => 'always',              
                'output'             => 'h3',
            ),

            /*-----------------------
                HEADING H4 TYPOGRAPHY
            -------------------------*/
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Heading H4 Typography', 'cliper' ),
            ),
            array(
                'id'                 => 'heading_4_font',
                'type'               => 'typography',
                'title'              => esc_html__( 'Heading H4 Font', 'cliper' ),
                'subtitle'           => esc_html__( 'Set the heading H2 font for whole theme.', 'cliper' ),
                'chosen'             => true,
                'text_align'         => false,
                'text_transform'     => true,
                'letter_spacing'     => true,
                'word_spacing'       => true,
                'font_weight'        => true,
                'line_height'        => true,
                'custom_style'       => true,
                'backup_font_family' => true,
                'unit'               => 'px',
                'preview'            => 'always',              
                'output'             => 'h4',
            ),

            /*-----------------------
                HEADING H5 TYPOGRAPHY
            -------------------------*/
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Heading H5 Typography', 'cliper' ),
            ),
            array(
                'id'                 => 'heading_5_font',
                'type'               => 'typography',
                'title'              => esc_html__( 'Heading H5 Font', 'cliper' ),
                'subtitle'           => esc_html__( 'Set the heading H2 font for whole theme.', 'cliper' ),
                'chosen'             => true,
                'text_align'         => false,
                'text_transform'     => true,
                'letter_spacing'     => true,
                'word_spacing'       => true,
                'font_weight'        => true,
                'line_height'        => true,
                'custom_style'       => true,
                'backup_font_family' => true,
                'unit'               => 'px',
                'preview'            => 'always',              
                'output'             => 'h5',
            ),


            /*-----------------------
                HEADING H6 TYPOGRAPHY
            -------------------------*/
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Heading H6 Typography', 'cliper' ),
            ),
            array(
                'id'                 => 'heading_6_font',
                'type'               => 'typography',
                'title'              => esc_html__( 'Heading H6 Font', 'cliper' ),
                'subtitle'           => esc_html__( 'Set the heading H2 font for whole theme.', 'cliper' ),
                'chosen'             => true,
                'text_align'         => false,
                'text_transform'     => true,
                'letter_spacing'     => true,
                'word_spacing'       => true,
                'font_weight'        => true,
                'line_height'        => true,
                'custom_style'       => true,
                'backup_font_family' => true,
                'unit'               => 'px',
                'preview'            => 'always',              
                'output'             => 'h6',
            ),
        ),
    )
);