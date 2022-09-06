<?php

/*-----------------------------------
    BLOG SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
	array(
		'parent' => 'Blog_Post_Page_Tab',
		'title'  => esc_html__( 'Blog', 'cliper' ),
		'icon'   => 'fa fa-book',
		'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Layout', 'cliper' ),
            ),
            array(
                'id'      => 'blog_pages_layout',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Blog Layout', 'cliper' ),
                'desc'    => esc_html__( 'You can chose and select blog layout style type from here. NOTE: If you select left or right sidebar but not use any widget it will get 10 columns.', 'cliper' ),
                'options' => array(
					'left_sidebar'  => CLIPER_ROOT_IMAGE . '/pages/3/left_sidebar.png',
					'right_sidebar' => CLIPER_ROOT_IMAGE . '/pages/3/right_sidebar.png',
					'full_width'    => CLIPER_ROOT_IMAGE . '/pages/3/full_width.png',
                ),
                'default' => 'right_sidebar',
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Post Grid Layout', 'cliper' ),
            ),
            array(
                'id'      => 'blog_post_grid_layout',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Post Grid Layout', 'cliper' ),
                'desc'    => esc_html__( 'You can chose and select blog post grid layout style type from here.', 'cliper' ),
                'options' => array(
					'one_column'   => CLIPER_ROOT_IMAGE . '/posts/layout__1.png',
					'two_column'   => CLIPER_ROOT_IMAGE . '/posts/layout__2.png',
					'three_column' => CLIPER_ROOT_IMAGE . '/posts/layout__3.png',
                ),
                'default' => 'one_column',
            ),

			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Blog Page Title', 'cliper' ),
			),
	      	array(
				'id'      => 'blog_page_title',
				'type'    => 'text',
				'title'   => esc_html__( 'Blog Page Title', 'cliper' ),
				'desc'    => esc_html__( 'Set the main blog page title here like ( Our Blog )', 'cliper' ),
				'default' => 'Blog Page',
	    	),

			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Blog & Page Default Options', 'cliper' ),
			),
            array(
				'id'      => 'blog_excerpt_word',
				'type'    => 'slider',
				'title'   => esc_html__( 'Blog Excerpt Word', 'cliper' ),
				'desc'    => esc_html__( 'Set the words that how many words you want to show in every blog post item.', 'cliper' ),
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
				'unit'    => ' ',
				'default' => 20,
            ),
		    array(
				'id'      => 'sticky_sidebar',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Sticky Sidebar ?', 'cliper' ),
				'desc'    => esc_html__( 'You can set sticky blog page sidebar here. just set ( YES / NO ) for OFF or ON.', 'cliper' ),
				'default' => true,
		    ),
		    array(
				'id'      => 'show_posts_pagination',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Show Posts Pagination ?', 'cliper' ),
				'desc'    => esc_html__( 'You can set show or hide posts pagination set ( YES / NO ) for OFF or ON.', 'cliper' ),
				'default' => true,
		    ),
	    )
	)
);