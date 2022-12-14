<?php 

/*-----------------------------------
    SOCIAL SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
	array(
        'title'  => esc_html__( 'Socials', 'cliper' ),
        'icon'   => 'fa fa-share-alt',
        'fields' => array(

            array(
                'id'           => 'social_bookmark',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Bookmark', 'cliper' ),
                'button_title' => esc_html__( 'Add New Social', 'cliper' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Easy to use it just click the add icon button and search your social icon and set the url for the profile .', 'cliper' ),
                'fields'       => array(
                    array(
                        'id'      => 'bookmark_title',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Social Title', 'cliper' ),
                        'desc'    => esc_html__( 'Set the social profile title like ( facebook, twitter, Linkedin, YouTube ect. )', 'cliper' ),
                        'default' => 'Facebook'
                    ),
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'cliper' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, YouTube ect. )', 'cliper' ),
                        'default' => 'fa fa-facebook'
                    ),
                    array(
                        'id'      => 'bookmark_url',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Profile Url', 'cliper' ),
                        'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourprofile. also you can add (facebook, twitter, linkedin, YouTube etc.)', 'cliper' ),
                        'default' => 'http://facebook.com/yourprofile'
                    ),
                ),
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Header Social', 'cliper' ),
            ),
            array(
                'id'         => 'enable_social',
                'type'       => 'switcher',
                'title'      => esc_html__( 'Enable Header Social', 'cliper' ),
                'desc'       => esc_html__( 'If you want to enable or disable top bar social profile you can set ( YES / NO )', 'cliper' ),
                'default'    => false,
            ),
            array(
                'id'      => 'social_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Header Social Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the header social bookmark color from here.', 'cliper' ),
                'default' => '#6c90b9',
                'output'  => array( 'color' => '.top-bar .social-profile ul li a' ),
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'id'      => 'social_bg_color',
                'type'    => 'color',
                'title'      => esc_html__( 'Header Social Background Color', 'cliper' ),
                'desc'       => esc_html__( 'Set the header social bookmark background color from here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( 'background-color' => '.top-bar .social-profile ul li a' ),
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'id'     => 'social_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Header Social Border', 'cliper' ),
                'desc'   => esc_html__( 'Set the header social border form here.', 'cliper' ),
                'output' => '.top-bar .social-profile ul li a',
                'default' => array(
                    'top'    => '0',
                    'right'  => '0',
                    'bottom' => '0',
                    'left'   => '0',
                    'style'  => 'solid',
                    'color'  => '',
                ),
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'id'               => 'social_border_radius',
                'type'             => 'slider',
                'title'            => esc_html__( 'Header Social Border Radius', 'cliper' ),
                'desc'             => esc_html__( 'Set the header social border radius form here.', 'cliper' ),
                'min'              => 0,
                'max'              => 100,
                'step'             => 1,
                'unit'             => 'px',
                //'default'          => 0.5,
                'output_mode'      => 'border-radius',
                'output'           => '.top-bar .social-profile ul li a',
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Header Social Hover', 'cliper' ),
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'id'      => 'social_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Header Social Hover Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the header social hover bookmark color from here.', 'cliper' ),
                'default' => '#6c90b9',
                'output'  => array( 'color' => '.top-bar .social-profile ul li a:hover' ),
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'id'      => 'social_hover_bg_color',
                'type'    => 'color',
                'title'      => esc_html__( 'Header Social Hover Background Color', 'cliper' ),
                'desc'       => esc_html__( 'Set the header social hover bookmark background color from here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( 'background-color' => '.top-bar .social-profile ul li a:hover' ),
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'id'     => 'social_hover_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Header Social Hover Border', 'cliper' ),
                'desc'   => esc_html__( 'Set the header social hover border form here.', 'cliper' ),
                'output' => '.top-bar .social-profile ul li a:hover',
                'default' => array(
                    'top'    => '0',
                    'right'  => '0',
                    'bottom' => '0',
                    'left'   => '0',
                    'style'  => 'solid',
                    'color'  => '',
                ),
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),
            array(
                'id'               => 'social_hover_border_radius',
                'type'             => 'slider',
                'title'            => esc_html__( 'Header Social Hover Border Radius', 'cliper' ),
                'desc'             => esc_html__( 'Set the header social hover border radius form here.', 'cliper' ),
                'min'              => 0,
                'max'              => 100,
                'step'             => 1,
                'unit'             => 'px',
                //'default'          => 0.5,
                'output_mode'      => 'border-radius',
                'output'           => '.top-bar .social-profile ul li a:hover',
                'dependency' => array( 'enable_social', '==', 'true' ),
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Offcanvas Social', 'cliper' ),
            ),
            array(
                'id'         => 'enable_offcanvas_social',
                'type'       => 'switcher',
                'title'      => esc_html__( 'Enable Header Social', 'cliper' ),
                'desc'       => esc_html__( 'If you want to enable or disable top bar social profile you can set ( YES / NO )', 'cliper' ),
                'default'    => false,
            ),
            array(
                'id'      => 'offcanvas_social_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Header Social Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the header social bookmark color from here.', 'cliper' ),
                'default' => '#6c90b9',
                'output'  => array( 'color' => '.offcanvas__social ul li a:hover' ),
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'id'      => 'offcanvas_social_bg_color',
                'type'    => 'color',
                'title'      => esc_html__( 'Header Social Background Color', 'cliper' ),
                'desc'       => esc_html__( 'Set the header social bookmark background color from here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( 'background-color' => '.offcanvas__social ul li a:hover' ),
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'id'     => 'offcanvas_social_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Header Social Border', 'cliper' ),
                'desc'   => esc_html__( 'Set the header social border form here.', 'cliper' ),
                'output' => '.offcanvas__social ul li a:hover',
                'default' => array(
                    'top'    => '0',
                    'right'  => '0',
                    'bottom' => '0',
                    'left'   => '0',
                    'style'  => 'solid',
                    'color'  => '',
                ),
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'id'               => 'offcanvas_social_border_radius',
                'type'             => 'slider',
                'title'            => esc_html__( 'Header Social Border Radius', 'cliper' ),
                'desc'             => esc_html__( 'Set the header social border radius form here.', 'cliper' ),
                'min'              => 0,
                'max'              => 100,
                'step'             => 1,
                'unit'             => 'px',
                //'default'          => 0.5,
                'output_mode'      => 'border-radius',
                'output'           => '.offcanvas__social ul li a:hover',
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Offcanvas Social Hover', 'cliper' ),
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'id'      => 'offcanvas_social_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Header Social Hover Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the header social hover bookmark color from here.', 'cliper' ),
                'default' => '#6c90b9',
                'output'  => array( 'color' => '.offcanvas__social ul li a:hover:hover' ),
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'id'      => 'offcanvas_social_hover_bg_color',
                'type'    => 'color',
                'title'      => esc_html__( 'Header Social Hover Background Color', 'cliper' ),
                'desc'       => esc_html__( 'Set the header social hover bookmark background color from here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( 'background-color' => '.offcanvas__social ul li a:hover:hover' ),
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'id'     => 'offcanvas_social_hover_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Header Social Hover Border', 'cliper' ),
                'desc'   => esc_html__( 'Set the header social hover border form here.', 'cliper' ),
                'output' => '.offcanvas__social ul li a:hover:hover',
                'default' => array(
                    'top'    => '0',
                    'right'  => '0',
                    'bottom' => '0',
                    'left'   => '0',
                    'style'  => 'solid',
                    'color'  => '',
                ),
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),
            array(
                'id'               => 'offcanvas_social_hover_border_radius',
                'type'             => 'slider',
                'title'            => esc_html__( 'Header Social Hover Border Radius', 'cliper' ),
                'desc'             => esc_html__( 'Set the header social hover border radius form here.', 'cliper' ),
                'min'              => 0,
                'max'              => 100,
                'step'             => 1,
                'unit'             => 'px',
                //'default'          => 0.5,
                'output_mode'      => 'border-radius',
                'output'           => '.offcanvas__social ul li a:hover:hover',
                'dependency' => array( 'enable_offcanvas_social', '==', 'true' ),
            ),


            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Social', 'cliper' ),
            ),
            array(
                'id'      => 'enable_footer_social',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Footer Social', 'cliper' ),
                'desc'    => esc_html__( 'Set the footer social hide or not.', 'cliper' ),
                'default' => false,
            ),
            array(
                'id'      => 'footer_social_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Footer Social Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the footer social bookmark color from here.', 'cliper' ),
                'default' => '#6c90b9',
                'output'  => array( 'color' => '.footer-area .social-profile ul li a' ),
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
            array(
                'id'      => 'footer_social_bg_color',
                'type'    => 'color',
                'title'      => esc_html__( 'Footer Social Background Color', 'cliper' ),
                'desc'       => esc_html__( 'Set the footer social bookmark background color from here.', 'cliper' ),
                'default' => '',
                'output'  => array( 'background-color' => '.footer-area .social-profile ul li a' ),
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
            array(
                'id'     => 'footer_social_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Footer Social Border', 'cliper' ),
                'desc'   => esc_html__( 'Set the footer social border form here.', 'cliper' ),
                'output' => '.footer-area .social-profile ul li a',
                'default' => array(
                    'top'    => '0',
                    'right'  => '0',
                    'bottom' => '0',
                    'left'   => '0',
                    'style'  => 'solid',
                    'color'  => '',
                ),
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
            array(
                'id'               => 'footer_social_border_radius',
                'type'             => 'slider',
                'title'            => esc_html__( 'Footer Social Border Radius', 'cliper' ),
                'desc'             => esc_html__( 'Set the footer social border radius form here.', 'cliper' ),
                'min'              => 0,
                'max'              => 100,
                'step'             => 1,
                'unit'             => 'px',
                //'default'          => 0.5,
                'output_mode'      => 'border-radius',
                'output'           => '.footer-area .social-profile ul li a',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Social Hover', 'cliper' ),
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),

            array(
                'id'      => 'footer_social_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Footer Social Hover Color', 'cliper' ),
                'desc'    => esc_html__( 'Set the footer social hover bookmark color from here.', 'cliper' ),
                'default' => '#438FF9',
                'output'  => array( 'color' => '.footer-area .social-profile ul li a:hover' ),
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
            array(
                'id'      => 'footer_social_hover_bg_color',
                'type'    => 'color',
                'title'      => esc_html__( 'Footer Social Hover Background Color', 'cliper' ),
                'desc'       => esc_html__( 'Set the footer social hover bookmark background color from here.', 'cliper' ),
                'default' => '#ffffff',
                'output'  => array( 'background-color' => '.footer-area .social-profile ul li a:hover' ),
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
            array(
                'id'     => 'footer_social_hover_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Footer Social Hover Border', 'cliper' ),
                'desc'   => esc_html__( 'Set the footer social hover border form here.', 'cliper' ),
                'output' => '.footer-area .social-profile ul li a:hover',
                'default' => array(
                    'top'    => '0',
                    'right'  => '0',
                    'bottom' => '0',
                    'left'   => '0',
                    'style'  => 'solid',
                    'color'  => '',
                ),
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
            array(
                'id'               => 'footer_social_hover_border_radius',
                'type'             => 'slider',
                'title'            => esc_html__( 'Footer Social Hover Border Radius', 'cliper' ),
                'desc'             => esc_html__( 'Set the footer social hover border radius form here.', 'cliper' ),
                'min'              => 0,
                'max'              => 100,
                'step'             => 1,
                'unit'             => 'px',
                //'default'          => 0.5,
                'output_mode'      => 'border-radius',
                'output'           => '.footer-area .social-profile ul li a:hover',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),
        ),
    )
);