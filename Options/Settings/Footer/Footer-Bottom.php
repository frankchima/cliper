<?php

/*-----------------------------------
    FOOTER BOTTOM SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Footer_Tab',
        'title'  => esc_html__( 'Footer Bottom', 'cliper' ),
        'icon'   => 'fa fa-bars',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Bottom Layout', 'cliper' ),
            ),
            array(
                'id'      => 'footer_bottom_style',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Select Footer Bottom Style', 'cliper' ),
                'desc'    => esc_html__( 'You can chose and select footer bottom type here..', 'cliper' ),
                'options' => array(
                    'one'   => CLIPER_ROOT_IMAGE . '/footer/copyright_1.png',
                    'two'   => CLIPER_ROOT_IMAGE . '/footer/copyright_2.png',
                    'three' => CLIPER_ROOT_IMAGE . '/footer/copyright_3.png',
                ),
                'default' => 'one',
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Bottom Background & Border', 'cliper' ),
            ),
            array(
                'id'                    => 'footer_bottom_bg',
                'type'                  => 'background',
                'title'   => esc_html__( 'Footer Bottom Background', 'cliper' ),
                'subtitle'              => esc_html__( 'Set the footer bottom background.', 'cliper' ),
                'desc'                  => esc_html__( 'Set the body background color, image and gradient color. If you set only first color field it will be a simple solid color for background and if set 2nd color field too it will be set a gradient color and if you set a image it will be set a background image.', 'cliper' ),
                'default'               => '#182044',
                'background_image'      => true,
                'background_position'   => true,
                'background_repeat'     => true,
                'background_attachment' => true,
                'background_size'       => true,
                'background_gradient'   => true,
                'background_origin'     => true,
                'background_clip'       => true,
                'background_blend_mode' => true,
                'output'                => '.footer-bottom-bg',
            ),
            array(
                'id'      => 'footer_bottom_border',
                'type'    => 'border',
                'title'   => esc_html__( 'Footer Bottom Border Color', 'cliper' ),
                'desc'    => esc_html__( 'Set footer bottom border color form here.', 'cliper' ),
                'output'  => '.footer-bottom',
                'default' => array(
                    'top'    => '0',
                    'right'  => '0',
                    'bottom' => '0',
                    'left'   => '0',
                    'style'  => 'solid',
                    'color'  => '#182044',
                ),
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Bottom Links Color', 'cliper' ),
            ),
            array(
                'id'     => 'footer_bottom_link_color',
                'type'   => 'link_color',
                'title'  => esc_html__( 'Footer Bottom Link', 'cliper' ),
                'output' => '.footer-bottom a',
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Bottom Spacing', 'cliper' ),
            ),
            array(
                'id'          => 'footer_bottom_padding',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Footer Bottom Space', 'cliper' ),
                'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'cliper' ),
                'left'        => false,
                'right'       => false,
                'units'       => array( 'px','px','em','%','cm','pt' ),
                'output_mode' => 'padding',
                'output'      => '.footer-bottom',
                'default'     => array(
                    'top'       => '30',
                    'bottom'    => '30',
                    'unit'      => 'px',
                ),
            ),
        ),
    )
);