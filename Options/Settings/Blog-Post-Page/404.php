<?php

/*-----------------------------------
    404 PAGE SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
	array(
		'parent' => 'Blog_Post_Page_Tab',
		'title'  => esc_html__( '404 Page', 'cliper' ),
		'icon'   => 'fa fa-exclamation-triangle',
		'fields' => array(

			array(
				'type'    => 'subheading',
				'content' => esc_html__( '404 Page Settings', 'cliper' ),
			),
			array(
				'id'    => 'error_page_img',
				'type'  => 'media',
				'title' => esc_html__( 'Upload Error Page Image', 'cliper' ),
				'desc'  => esc_html__( 'Upload error page image width 1280px and height 800px or larger.', 'cliper' ),
				'default' => array(
					'url'      => CLIPER_ROOT_IMAGE . '/404.png',
				),
			),
			array(
				'id'                    => 'error_page_bg',
				'type'                  => 'background',
				'title'                 => esc_html__( '404 Page Background', 'cliper' ),
				'subtitle'              => esc_html__( 'Set the 404 page background.', 'cliper' ),
				'desc'                  => esc_html__( 'Set the 404 page background color, image and gradient color. If you set only first color field it will be a simple solid color for background and if set 2nd color field too it will be set a gradient color and if you set a image it will be set a background image.', 'cliper' ),
				'background_image'      => true,
				'background_position'   => true,
				'background_repeat'     => true,
				'background_attachment' => true,
				'background_size'       => true,
				'background_gradient'   => true,
				'background_origin'     => true,
				'background_clip'       => true,
				'background_blend_mode' => true,
				'output'                => '.error404',
				'default'               => array(
					'image'      => CLIPER_ROOT_IMAGE . '/404-bg.png',
					'repeat'     => 'no-repeat',
					'position'   => 'left center',
					'attachment' => 'scroll',
					'color'      => '#ffffff',
				),
			),
			array(
				'id'      => 'error_text',
				'type'    => 'text',
				'title'   => esc_html__( '404 Error Page Text', 'cliper' ),
				'desc'    => esc_html__( 'Set your 404 error title.', 'cliper' ),
				'default' => esc_html__( 'Oops! That page can&rsquo;t be found.', 'cliper' )
			),
			array(
				'id'      => 'enable_404_search_button',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable 404 Search Button', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable 404 page button you can set ( YES / NO )', 'cliper' ),
				'default' => true,
			),
			array(
				'id'      => 'enable_404_blank_header',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable 404 Blank Header?', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable 404 page blank header you can set ( YES / NO )', 'cliper' ),
				'default' => true,
			),
			array(
				'id'      => 'enable_404_blank_footer',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable 404 Blank Footer?', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable 404 page blank footer you can set ( YES / NO )', 'cliper' ),
				'default' => true,
			),
		),
	)
);