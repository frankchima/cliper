<?php

/*-----------------------------------
    SINGLE POST SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
	array(
		'parent' => 'Blog_Post_Page_Tab',
		'title'  => esc_html__( 'Post Details', 'cliper' ),
		'icon'   => 'fa fa-thumb-tack',
		'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Post Details Layout', 'cliper' ),
            ),
            array(
                'id'      => 'post_details_layout',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Post Details Layout', 'cliper' ),
                'desc'    => esc_html__( 'You can chose and select post details layout style type from here. NOTE: If you select left or right sidebar but not use any widget it will get 10 columns.', 'cliper' ),
                'options' => array(
					'left_sidebar'  => CLIPER_ROOT_IMAGE . '/pages/3/left_sidebar.png',
					'right_sidebar' => CLIPER_ROOT_IMAGE . '/pages/3/right_sidebar.png',
					'full_width'    => CLIPER_ROOT_IMAGE . '/pages/3/full_width.png',
                ),
                'default' => 'right_sidebar',
            ),
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Post General Settings', 'cliper' ),
			),
		    array(
				'id'      => 'show_dropcaps',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Show Dropcaps ?', 'cliper' ),
				'desc'    => esc_html__( 'If you on dropcaps it will be appear in single blog page. just set ( YES / NO )', 'cliper' ),
				'default' => false,
		    ),
		    array(
				'id'      => 'show_post_breadcrumb',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Show Post Breadcrumb ?', 'cliper' ),
				'desc'    => esc_html__( 'If you want to show or hide single blog post breadcrumb you can just set ( YES / NO )', 'cliper' ),
				'default' => true,
		    ),
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Single Post Custom Title', 'cliper' ),
			),
			array(
				'id'      => 'enable_post_custom_title',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Custom Post Title', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable post banner title to post title you can set ( YES / NO )', 'cliper' ),
				'default' => false,
			),
			array(
				'id'         => 'post_custom_title',
				'type'       => 'text',
				'title'      => esc_html__( 'Post Banner Title', 'cliper' ),
				'desc'       => esc_html__( 'Set your preferred custom banner title.', 'cliper' ),
				'default'    => esc_html__( 'News Details','cliper' ),
				'dependency' => array( 'enable_post_custom_title', '==', 'true' ),
			),
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Single Post Banner Meta', 'cliper' ),
			),
			array(
				'id'      => 'enable_post_banner_top_meta',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Single Post Banner Top Meta', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable post banner top meta you can set ( YES / NO )', 'cliper' ),
				'default' => false,
			),
			array(
				'id'      => 'enable_post_banner_bottom_meta',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Single Post Banner Bottom Meta', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable post banner bottom meta you can set ( YES / NO )', 'cliper' ),
				'default' => false,
			),
			array(
				'id'      => 'enable_post_banner_author_thumb',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Single Post Banner Author Thumb Meta', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable post banner author thumb meta you can set ( YES / NO )', 'cliper' ),
				'default' => false,
			),
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Single Portfolio Setting', 'cliper' ),
			),
			array(
				'id'      => 'enable_portfolio_custom_title',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Portfolio Custom Banner Title', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable portfolio custom title for portfolio single post you can set ( YES / NO )', 'cliper' ),
				'default' => false,
			),
			array(
				'id'         => 'portfolio_custom_title',
				'type'       => 'text',
				'title'      => esc_html__( 'Portfolio Banner Title', 'cliper' ),
				'desc'       => esc_html__( 'Set your preferred custom banner title for single portfolio post.', 'cliper' ),
				'default'    => esc_html__( 'Work Details','cliper' ),
				'dependency' => array( 'enable_portfolio_custom_title', '==', 'true' ),
			),
		),
	)
);