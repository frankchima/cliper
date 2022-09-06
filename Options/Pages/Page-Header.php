<?php

/*-----------------------------------
    PAGE BARNER SECTION
------------------------------------*/
CSF::createSection( CLIPER_META_KEY,
	array(
		'title'  => esc_html__( 'Page Header', 'cliper' ),
        'parent' => 'Page_Meta_Tab',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Page Header Options', 'cliper' ),
			),
			array(
				'id'      => 'enable_banner',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Banner', 'cliper' ),
				'desc'    => esc_html__( 'If you want to show or hide page banner you can set here by toggle ( YES / NO ).', 'cliper' ),
				'default' => true,
			),
			array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Custom Page Title', 'cliper' ),					
				'dependency' => array( 'enable_banner', '==', 'true' ),
			),
			array(
				'id'         => 'enable_title',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Enable Custom Title', 'cliper' ),
				'desc'       => esc_html__( 'If you need custom page title you can set here.', 'cliper' ),
				'default'    => false,
				'dependency' => array( 'enable_banner|enable_banner', '==|==', 'true|true' ),
			),
			array(
				'id'         => 'custom_title',
				'type'       => 'text',
				'title'      => esc_html__( 'Custom Page Title', 'cliper' ),
				'desc'       => esc_html__( 'Set your preferred custom page title.', 'cliper' ),
				'dependency' => array( 'enable_title|enable_banner', '==|==', 'true|true' ),
				'default'    => 'Your Title Here',
			),
			array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Banner Custom Overlay', 'cliper' ),					
				'dependency' => array( 'enable_banner', '==', 'true' ),
			),
			array(
				'id'         => 'enable_overlay',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Enable Overlay', 'cliper' ),
				'default'    => false,
				'dependency' => array( 'enable_banner', '==', 'true' ),
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
				'dependency'            => array( 'enable_overlay|enable_banner', '==|==', 'true|true' ),
            ),
            array(
				'id'          => 'banner_overlay_opacity',
				'type'        => 'slider',
				'title'       => esc_html__( 'Banner Overlay Opacity', 'cliper' ),
				'desc'        => esc_html__( 'Set the main Banner overlay opacity max value is 1 in decimal', 'cliper' ),
				'min'         => 0,
				'max'         => 1,
				'step'        => 0.01,
				'unit'        => '',
				'default'   => 0.5,
				'output_mode' => 'opacity',
				//'output'      => '.banner-area-bg:after',
				'dependency'  => array( 'enable_overlay|enable_banner', '==|==', 'true|true' ),
            ),


            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Enable Header Action Buttons', 'cliper' ),
            ),
            array(
                'id'      => 'enable_header_actions',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Header Action Buttons', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable header area action buttons you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
                'type'       => 'subheading',
                'content'    => esc_html__( 'Menu Action Buttons', 'cliper' ),
                'dependency' => array('enable_header_actions','==','true'),
            ),
            array(
                'id'         => 'enable_action',
                'type'       => 'switcher',
                'title'      => esc_html__( 'Enable Action Button', 'cliper' ),
                'desc'       => esc_html__( 'If you want to enable or disable action button in menu section you can set ( YES / NO )', 'cliper' ),
                'default'    => false,
                'dependency' => array('enable_header_actions','==','true'),
            ),
            array(
                'id'         => 'button_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Button Text', 'cliper' ),
                'desc'       => esc_html__( 'Set the button text here', 'cliper' ),
                'dependency' => array( 'enable_action', '==', 'true' ),
                'default'    => 'Sign Up',
            ),
            array(
                'id'         => 'button_url',
                'type'       => 'text',
                'title'      => esc_html__( 'Button Link', 'cliper' ),
                'desc'       => esc_html__( 'Set the button link here', 'cliper' ),
                'dependency' => array( 'enable_action', '==', 'true' ),
                'default'    => '#',
            ),
            array(
                'id'         => 'button_text_2',
                'type'       => 'text',
                'title'      => esc_html__( 'Button Text 2', 'cliper' ),
                'desc'       => esc_html__( 'Set the button text here', 'cliper' ),
                'dependency' => array( 'enable_action', '==', 'true' ),
                'default'    => 'Login',
            ),
            array(
                'id'         => 'button_url_2',
                'type'       => 'text',
                'title'      => esc_html__( 'Button Link 2', 'cliper' ),
                'desc'       => esc_html__( 'Set the button link here', 'cliper' ),
                'dependency' => array( 'enable_action', '==', 'true' ),
                'default'    => '#',
            ),


			array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Header Overwrites', 'cliper' ),
			),
			array(
				'id'         => 'overwrite_header',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Header Overwrite?', 'cliper' ),
				'desc'       => esc_html__( 'If you want to overwrite header options in menu section you can set ( YES / NO )', 'cliper' ),
				'default'    => false,
			),
			array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Header Bottom Search Category', 'cliper' ),
				'dependency' => array( 'overwrite_header', '==', 'true' ),
			),
			array(
				'id'         => 'enable_header_category_search',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Enable Header Category Search', 'cliper' ),
				'desc'       => esc_html__( 'If you want to enable or disable header category search in menu section you can set ( YES / NO )', 'cliper' ),
				'default'    => false,
				'dependency' => array( 'overwrite_header', '==', 'true' ),
			),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Header Layout', 'cliper' ),
                'dependency' => array( 'overwrite_header', '==', 'true' ),
            ),
			array(
				'id'         => 'overwrite_page_header',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Overwrite Page Header', 'cliper' ),
				'desc'       => esc_html__( 'If you want to overwrite header only for this page you can set enable or disable for set custom header in this page just set ( YES / NO )', 'cliper' ),
				'default'    => false,
				'dependency' => array( 'overwrite_header', '==', 'true' ),
			),
            array(
				'id'         => 'header_style',
				'type'       => 'image_select',
				'title'      => esc_html__( 'Header Style', 'cliper' ),
				'desc'       => esc_html__( 'Select the header style which you want to show on your website.', 'cliper' ),
				'options'    => cliper_header_layout( array( 'header-1', 'header-12', 'header-13' ) ),
				'default'    => CLIPER_HEADER_LAYOUT,
				'dependency' => array( 'overwrite_header|overwrite_page_header', '==|==', 'true|true' ),
            ),

            array(
				'type'       => 'subheading',
				'content'    => esc_html__( 'Page Logo', 'cliper' ),
				'dependency' => array( 'overwrite_header', '==', 'true' ),
            ),
			array(
				'id'         => 'overwrite_page_logo',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Overwrite Page Logo', 'cliper' ),
				'desc'       => esc_html__( 'If you want to overwrite logo only for this page you can set enable or disable for set custom logo in this page just set ( YES / NO )', 'cliper' ),
				'default'    => false,
				'dependency' => array( 'overwrite_header', '==', 'true' ),
			),
            array(
				'id'         => 'logo',
				'type'       => 'media',
				'title'      => esc_html__( 'Main Logo', 'cliper' ),
				'desc'       => esc_html__( 'Upload main logo width 180px and height 65px.', 'cliper' ),
				'default'    => '',
				'library'    => 'image',
				'preview'    => true,
				'url'        => false,
				'help'       => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'cliper' ),
				'dependency' => array( 'overwrite_header|overwrite_page_logo', '==|==', 'true|true' ),
            ),
            array(
				'id'         => 'sticky_logo',
				'type'       => 'media',
				'title'      => esc_html__( 'Sticky Logo', 'cliper' ),
				'desc'       => esc_html__( 'Upload sticky logo width 180px and height 65px.', 'cliper' ),
				'default'    => '',
				'library'    => 'image',
				'preview'    => true,
				'url'        => false,
				'help'       => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'cliper' ),
				'dependency' => array( 'overwrite_header|overwrite_page_logo', '==|==', 'true|true' ),
            ),
		)
	)
);