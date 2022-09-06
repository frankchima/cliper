<?php 
/*-----------------------------------
    MILICIOUS SETTING SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'title'  => esc_html__( 'Malicious Settings', 'cliper' ),
        //'parent' => 'General_Tab',
        'icon'   => 'fa fa-cog',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Get All Options In Customize Panel', 'cliper' ),
            ),
            array(
                'id'      => 'get_customize_option',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Get Options In Customized Panel?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to all get all options in customized panel you can enable or disable for getting options.', 'cliper' ),
                'default' => false,
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Malicious Option Settings', 'cliper' ),
            ),
            array(
                'id'      => 'enable_svg_upload',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Svg Upload ?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable svg upload you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
                'id'      => 'custom_file_upload_size',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Custom Upload Size ?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable custom upload size you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
				'id'         => 'file_upload_size',
				'type'       => 'slider',
				'title'      => esc_html__( 'File Upload Size', 'cliper' ),
				'desc'       => esc_html__( 'Set the file upload size here use max value 512MB and minimum value 1MB in decimal.', 'cliper' ),
				'min'        => 0,
				'max'        => 512,
				'step'       => 1,
				'unit'       => 'MB',
				'default'    => 256,
				'dependency' =>array('custom_file_upload_size','==','true'),
            ),
            array(
                'id'      => 'custom_memory_limit_size',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Custom Memory Limit Size ?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable custom memory limit size you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
            array(
				'id'         => 'memory_limit',
				'type'       => 'slider',
				'title'      => esc_html__( 'Memory Limit Size', 'cliper' ),
				'desc'       => esc_html__( 'Set the memory limit size here default value is 256M.', 'cliper' ),
				'min'        => 1,
				'max'        => 2448,
				'step'       => 1,
				'unit'       => 'MB',
				'default'    => 256,
				'dependency' =>array('custom_memory_limit_size','==','true'),
            ),
            array(
                'id'      => 'exclude_post_type',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Exclude Post Types ?', 'cliper' ),
                'desc'    => esc_html__( 'If you want to exclude any post types you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),
			array(
				'id'         => 'exclude_portfolio',
				'type'       => 'checkbox',
				'title'      => esc_html__( 'Exclude Portfolio Post', 'cliper' ),
				'label'      => esc_html__( 'Exclude Portfolio', 'cliper' ),
				'default'    => true,
				'dependency' =>array('exclude_post_type','==','true'),
			),
        ),
    )
);