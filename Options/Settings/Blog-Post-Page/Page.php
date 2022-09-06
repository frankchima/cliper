<?php

/*-----------------------------------
    PAGE SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
	array(
		'parent' => 'Blog_Post_Page_Tab',
		'title'  => esc_html__( 'Page', 'cliper' ),
		'icon'   => 'fa fa-file-text-o',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Blog & Pages Content Area Spacing ( Top / Bottom )', 'cliper' ),
			),
            array(
				'id'      => 'content_spacing',
				'type'    => 'spacing',
				'title'   => esc_html__( 'Blog & Pages Spacing', 'cliper' ),
				'desc'    => esc_html__( 'Set the space in blog and page content. It will be appear in top and bottom section of the page and posts.', 'cliper' ),
				'left'    => false,
				'right'   => false,
				'units'   => array( 'px','px','em','%','cm','pt' ),
				'output'  => '.content-area.section-padding',
				'default' => array(
					'top'    => '100',
					'bottom' => '100',
					'unit'   => 'px',
                ),
            ),
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Show Page Breadcrumb ', 'cliper' ),
			),
		    array(
				'id'      => 'show_page_breadcrumb',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Show Page Breadcrumb ?', 'cliper' ),
				'desc'    => esc_html__( 'If you want to show or hide page breadcrumb you can set ( YES / NO )', 'cliper' ),
				'default' => true,
		    ),
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Disable Next / Prev Navigation', 'cliper' ),
			),
			array(
				'id'      => 'disable_page_navigation',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Disable Next / Prev Navigation', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable Next / Prev pagination form page you can set ( YES / NO )', 'cliper' ),
				'default' => false,
			),
		),
	)
);