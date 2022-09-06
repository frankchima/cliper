<?php

/*-----------------------------------
    GET POST TYPE ARRAY
-------------------------------------*/
if ( !function_exists('cliper_get_elementor_page_footer_array') ) {
    function cliper_get_elementor_page_footer_array($post_type = 'elementor_library') {
        $query  = new WP_Query(
            array (
                'post_type'      => $post_type,
                'posts_per_page' => -1
            )
        );
        $posts_array = $query->posts;
        if( $posts_array ) {
            $post_title_array = wp_list_pluck( $posts_array, 'post_title', 'ID' );
        }else{
            $post_title_array['default'] = esc_html__( 'Default', 'cliper' );
        }
        return $post_title_array;
    }
}

/*-----------------------------------
    PAGE FOOTER SECTION
------------------------------------*/
CSF::createSection( CLIPER_META_KEY,
	array(
		'title'  => esc_html__( 'Page Footer', 'cliper' ),
        'parent' => 'Page_Meta_Tab',
		'fields' => array(
			
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Page Footer Options', 'cliper' ),
			),
		    array(
				'id'      => 'hide_footer',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Hide Footer ?', 'cliper' ),
				'desc'    => esc_html__( 'If you want do not show the footer you can set here by ( YES / NO ).', 'cliper' ),
				'default' => false,
		    ),

            array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Enable Elementor Footer / Overwrite Footer', 'cliper' ),
				'dependency' => array( 'hide_footer', '==', 'false' ),
            ),
            array(
				'id'         => 'add_footer_template',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Add Footer Template', 'cliper' ),
				'desc'       => esc_html__( 'If you want to set Elementor template as footer template you can set ( YES / NO )', 'cliper' ),
				'default'    => false,
				'dependency' => array( 'hide_footer', '==', 'false' ),
            ),
            array(
				'id'         => 'elementor_footer_style',
				'type'       => 'select',
				'title'      => esc_html__( 'Select Footer Style', 'cliper' ),
				'desc'       => esc_html__( 'You can chose and select footer type here..', 'cliper' ),
				'options'    => cliper_get_elementor_page_footer_array(),
				'dependency' => array( 'add_footer_template|hide_footer', '==|==', 'true|false' ),
            ),

			array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Page Footer Styling', 'cliper' ),
				'dependency' => array( 'hide_footer|add_footer_template', '==|==', 'false|false' ),
			),
			array(
				'id'         => 'enable_footer_styling',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Footer Styling', 'cliper' ),
				'desc'       => esc_html__( 'If you need custom style in page footer you can style here.', 'cliper' ),
				'default'    => false,
				'dependency' => array( 'hide_footer|add_footer_template', '==|', 'false|false' ),
			),
			array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Footer Background & Overlay', 'cliper' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
			array(
				'id'                    => 'footer_background',
				'type'                  => 'background',
				'title'                 => esc_html__( 'Footer Background', 'cliper' ),
				'subtitle'              => esc_html__( 'Set the footer background.', 'cliper' ),
				'desc'                  => esc_html__( 'Set the footer background color, image and gradient color. If you set only first color field it will be a simple solid color for background and if set 2nd color field too it will be set a gradient color and if you set a image it will be set a background image.', 'cliper' ),
				'default'               => '#00152e',
				'background_image'      => true,
				'background_position'   => true,
				'background_repeat'     => true,
				'background_attachment' => true,
				'background_size'       => true,
				'background_gradient'   => true,
				'background_origin'     => true,
				'background_clip'       => true,
				'background_blend_mode' => true,
				'output'                => '.footer-area-bg',
				'dependency'            => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
			array(
				'id'                    => 'footer_overlay',
				'type'                  => 'background',
				'title'                 => esc_html__( 'Footer Overlay Background', 'cliper' ),
				'subtitle'              => esc_html__( 'Set the footer overlay background.', 'cliper' ),
				'desc'                  => esc_html__( 'Set the footer overlay background color, transparent image and gradient color. If you set only first color field it will be a simple solid color for background and if set 2nd color field too it will be set a gradient color and if you set a image it will be set a background image.', 'cliper' ),
				'default'               => '#00152e',
				'background_image'      => true,
				'background_position'   => true,
				'background_repeat'     => true,
				'background_attachment' => true,
				'background_size'       => true,
				'background_gradient'   => true,
				'background_origin'     => true,
				'background_clip'       => true,
				'background_blend_mode' => true,
				'output'                => '.footer-area-bg:after',
				'dependency'            => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
			array(
				'id'                 => 'footer_overlay_opacity',
				'type'               => 'slider',
				'title'              => esc_html__( 'Overlay Opacity', 'cliper' ),
				'desc'               => esc_html__( 'Set the background footer background overlay opacity input the max value 1 in decimal.', 'cliper' ),
				'min'                => 0,
				'max'                => 1,
				'step'               => 0.01,
				'unit'               => ' ',
				//'default'          => 0.5,
				'output_mode'        => 'opacity',
				//'output'             => '.footer-area-bg:after',
				'dependency'         => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
            array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Footer Text Color', 'cliper' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
			array(
				'id'         => 'footer_text_color',
				'type'       => 'color',
				'title'      => esc_html__( 'Footer Text Color', 'cliper' ),
				'desc'       => esc_html__( 'Set footer text color form here.', 'cliper' ),
				'default'    => 'rgba(0,0,0,0.01)',
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
            array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Footer Link Color', 'cliper' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
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
				'dependency'       => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
            array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Footer Heading Color', 'cliper' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
			array(
				'id'         => 'heading_color',
				'type'       => 'color',
				'title'      => esc_html__( 'Footer Heading Color', 'cliper' ),
				'desc'       => esc_html__( 'Set footer footer heading color form here.', 'cliper' ),
				'default'    => '#ffffff',
				'output'     => array( '.footer-area h1','.footer-area h2','.footer-area h3','.footer-area h4','.footer-area h5','.footer-area h6' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
            array(
				'id'         => 'heading_border_color',
				'type'       => 'color',
				'title'      => esc_html__( 'Footer Heading Border Color', 'cliper' ),
				'desc'       => esc_html__( 'Set footer footer heading border color form here.', 'cliper' ),
				'default'    => '#ffffff',
				'output'     => array( 'border-color' => '.footer-area h3' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
            array(
				'id'         => 'heading_before_after_color',
				'type'       => 'color',
				'title'      => esc_html__( 'Footer Heading Before / After Color', 'cliper' ),
				'desc'       => esc_html__( 'Set footer footer heading before / after color form here.', 'cliper' ),
				'default'    => '#ffffff',
				'output'     => array( 'background' => '.footer-area h3:before,.footer-area h3:after' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),

            /*-------------------------------
				FOOTER BOTTOM
            --------------------------------*/
			array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Footer Bottom Background & Border', 'cliper' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
			array(
				'id'                    => 'footer_bottom_bg',
				'type'                  => 'background',
				'title'                 => esc_html__( 'Footer Bottom Background', 'cliper' ),
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
				'dependency'            => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
			),
            array(
				'id'         => 'footer_bottom_border',
				'type'       => 'border',
				'title'      => esc_html__( 'Footer Bottom Border Color', 'cliper' ),
				'desc'       => esc_html__( 'Set footer bottom border color form here.', 'cliper' ),
				'output'     => '.footer-bottom',
				'default'    => array(
					'top'    => '0',
					'right'  => '0',
					'bottom' => '0',
					'left'   => '0',
					'style'  => 'solid',
					'color'  => '#182044',
				),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
            array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Footer Bottom Links Color', 'cliper' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
            array(
				'id'         => 'footer_bottom_link_color',
				'type'       => 'link_color',
				'title'      => esc_html__( 'Footer Bottom Link', 'cliper' ),
				'output'     => '.footer-bottom a',
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
            array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Footer Bottom Spacing', 'cliper' ),
				'dependency' => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
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
					'top'    => '30',
					'bottom' => '30',
					'unit'   => 'px',
                ),
				'dependency'  => array( 'enable_footer_styling|hide_footer', '==|==', 'true|false' ),
            ),
		)
	)
);