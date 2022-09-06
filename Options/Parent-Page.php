<?php

if ( class_exists( 'CSF' ) ) {

    $info       = wp_get_theme();
    $name       = $info->get( 'Name' );
    $version    = $info->get( 'Version' );
    $version    = '<small>' . sprintf( __( '- Version %s', 'cliper' ) . '</small>', $version );
    $author     = $info->get( 'Author' );
    $author_uri = $info->get( 'AuthorURI' );
    $author_uri = '<small>' . esc_html__( 'BY', 'cliper' ) . ' <a target="_blank" href="' . esc_url( $author_uri ) . '">' . esc_html( $author ) . '</a></small>';
    $theme_uri  = $info->get( 'ThemeURI' );

    CSF::createOptions( CLIPER_OPTION_KEY, array(

        /*--------------------------
        FRAMEWORK TITLE
        ---------------------------*/
        'framework_title'    => sprintf( __( '%1$s WordPress Theme %2$s %3$s', 'cliper' ), $name, $version, $author_uri ),
        'framework_class'    => 'cliper',

        /*--------------------------
        MENU SETTINGS
        ---------------------------*/
        'menu_title'         => sprintf( __( '%s Options', 'cliper' ), $name ),
        'menu_slug'          => 'cliper_options',
        'menu_type'          => 'menu',
        'menu_capability'    => 'manage_options',
        'menu_icon'          => null,
        'menu_position'      => 2,
        'menu_hidden'        => false,

        /*--------------------------
        EXTRAS
        ---------------------------*/
        'show_bar_menu'      => true,
        'show_sub_menu'      => true,
        'show_in_network'    => true,
        'show_in_customizer' => cliper_get_option( 'get_customize_option', false ),

        'show_search'        => true,
        'show_reset_all'     => true,
        'show_reset_section' => true,
        'show_footer'        => true,
        'show_all_options'   => true,
        'show_form_warning'  => true,
        'sticky_header'      => true,
        'save_defaults'      => true,
        'ajax_save'          => true,

        /*--------------------------
        FOOTER
        ---------------------------*/
        'footer_credit'      => sprintf( __( 'Credited by %s', 'cliper' ), $author_uri ),
        'footer_text'        => sprintf( __( 'Made with love by %s', 'cliper' ), $author_uri ),
        'footer_after'       => '',
        'transient_time'     => 0,

        /*--------------------------
        TYPOGRAPHY OPTIONS
        ---------------------------*/
        'enqueue_webfont'    => true,
        'async_webfont'      => true,

        /*--------------------------
        OTHERS
        ---------------------------*/
        'output_css'         => true,
    ) );
}