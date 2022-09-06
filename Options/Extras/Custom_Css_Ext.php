<?php

/*-----------------------------------
ADD ELEMENTOR FOOTER
------------------------------------*/
$header_footer_url = admin_url( 'edit.php?post_type=qheader-footer' );
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'title'  => esc_html__( 'Elementor Header Footer', 'cliper' ),
        'icon'   => 'far fa-building',
        'fields' => array(

        ),
    )
);

/*-----------------------------------
CUSTOM CSS SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Scripts_Tab',
        'title'  => esc_html__( 'Custom Css', 'cliper' ),
        'icon'   => 'fa fa-css3',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Theme Custom CSS', 'cliper' ),
            ),
            array(
                'id'   => 'custom_css_tab',
                'type' => 'tabbed',
                'tabs' => array(

                    array(
                        'title'  => esc_html__( 'All Device', 'cliper' ),
                        'icon'   => 'fa fa-css3',
                        'fields' => array(
                            array(
                                'type'    => 'subheading',
                                'content' => esc_html__( 'Custom CSS  ( All Device )', 'cliper' ),
                            ),
                            array(
                                'id'       => 'custom_css',
                                'type'     => 'code_editor',
                                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post.', 'cliper' ),
                                'settings' => array(
                                    'mode'        => 'css',
                                    'theme'       => 'dracula',
                                    'tabSize'     => 4,
                                    'smartIndent' => true,
                                    'autocorrect' => true,
                                ),
                            ),
                        ),
                    ),

                    array(
                        'title'  => esc_html__( 'Responsive Ipad / Ipad Pro', 'cliper' ),
                        'icon'   => 'fa fa-css3',
                        'fields' => array(
                            array(
                                'type'    => 'subheading',
                                'content' => esc_html__( 'Custom CSS  ( Medium Device or Ipad Pro )', 'cliper' ),
                            ),
                            array(
                                'id'       => 'custom_css_ipad',
                                'type'     => 'code_editor',
                                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 1024px maximum 1366px.', 'cliper' ),
                                'settings' => array(
                                    'mode'        => 'css',
                                    'theme'       => 'dracula',
                                    'tabSize'     => 4,
                                    'smartIndent' => true,
                                    'autocorrect' => true,
                                ),
                            ),
                        ),
                    ),

                    array(
                        'title'  => esc_html__( 'Responsive Tablet', 'cliper' ),
                        'icon'   => 'fa fa-css3',
                        'fields' => array(
                            array(
                                'type'    => 'subheading',
                                'content' => esc_html__( 'Custom CSS  ( Medium Device or Tablet )', 'cliper' ),
                            ),
                            array(
                                'id'       => 'custom_css_tablet',
                                'type'     => 'code_editor',
                                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 768px maximum 992px.', 'cliper' ),
                                'settings' => array(
                                    'mode'        => 'css',
                                    'theme'       => 'dracula',
                                    'tabSize'     => 4,
                                    'smartIndent' => true,
                                    'autocorrect' => true,
                                ),
                            ),
                        ),
                    ),

                    array(
                        'title'  => esc_html__( 'Responsive mobile', 'cliper' ),
                        'icon'   => 'fa fa-css3',
                        'fields' => array(
                            array(
                                'type'    => 'subheading',
                                'content' => esc_html__( 'Custom CSS  ( mobile Device )', 'cliper' ),
                            ),
                            array(
                                'id'       => 'custom_css_mobile',
                                'type'     => 'code_editor',
                                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be maximum 767px.', 'cliper' ),
                                'settings' => array(
                                    'mode'        => 'css',
                                    'theme'       => 'dracula',
                                    'tabSize'     => 4,
                                    'smartIndent' => true,
                                    'autocorrect' => true,
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    )
);