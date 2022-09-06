<?php

/*-----------------------------------
    TOP BAR SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Header_Tab',
        'title'  => esc_html__( 'Top Bar', 'cliper' ),
        'icon'   => 'fa fa-bars',
        'fields' => array(

            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Mainmenu Topbar', 'cliper' ),
            ),
            array(
                'id'      => 'enable_topbar',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Topbar', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable topbar you can set ( YES / NO )', 'cliper' ),
                'default' => false,
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Enable Elementor Topbar', 'cliper' ),
                'dependency' => array( 'enable_topbar', '==', 'true' ),
            ),
            array(
                'id'      => 'add_topbar_template',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Add Topbar Template', 'cliper' ),
                'desc'    => esc_html__( 'If you want to set Elementor template as topbar template you can set ( YES / NO )', 'cliper' ),
                'default' => false,
                'dependency' => array( 'enable_topbar', '==', 'true' ),
            ),
            array(
                'id'      => 'elementor_topbar',
                'type'    => 'select',
                'title'   => esc_html__( 'Select Topbar Style', 'cliper' ),
                'desc'    => esc_html__( 'You can chose and select topbar type here..', 'cliper' ),
                'options' => cliper_get_elementor_post_array(),
                'dependency' => array( 'enable_topbar|add_topbar_template', '==|==', 'true|true' ),
            ),

            array(
                'id'         => 'phone_number',
                'type'       => 'text',
                'title'      => esc_html__( 'Phone Number', 'cliper' ),
                'desc'       => esc_html__( 'Set the topbar contact phone number.', 'cliper' ),
                'default'    => '+8801234567890',
                'dependency' => array( 'enable_topbar|add_topbar_template', '==|==', 'true|false' ),
            ),
            array(
                'id'         => 'email_address',
                'type'       => 'text',
                'title'      => esc_html__( 'Email Address', 'cliper' ),
                'desc'       => esc_html__( 'Set the topbar contact email address.', 'cliper' ),
                'default'    => 'admin@example.com',
                'dependency' => array( 'enable_topbar|add_topbar_template', '==|==', 'true|false' ),
            ),
        )
    )
);