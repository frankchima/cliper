<?php

if( !class_exists( 'OCDI_Plugin' ) ) {
    return;
}

/* -----------------------------
    IMPORT PAGE SETUP
 -------------------------------*/
function cliper_demo_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'Cliper Demo Content Importer', 'cliper' );
    $default_settings['menu_title']  = esc_html__( 'Import Cliper Demo', 'cliper' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'cliper-demo-import';

    return $default_settings;
}
add_filter( 'ocdi/plugin_page_setup', 'cliper_demo_page_setup' );

/* ----------------------------
    IMPPORT FILES
-------------------------------*/
function cliper_import_files() {
    return array(
        array(
            'import_file_name'               => 'Home V1',
            'import_file_url'                => CLIPER_ROOT_URI . '/lib/dummy-data/content/content.xml',
            'import_widget_file_url'         => CLIPER_ROOT_URI . '/lib/dummy-data/content/widgets.wie',
            'import_customizer_file_url'     => CLIPER_ROOT_URI . '/lib/dummy-data/content/customizer.dat',
            'local_import_theme_option_file' => trailingslashit( CLIPER_ROOT ) . '/lib/dummy-data/options/Cliper_Options.json',
            'import_preview_image_url'       => 'https://themeim.com/plugins/cliper/screenshot.png',
            'import_notice'                  => esc_html__( 'Make sure all the required plugins are activated.', 'cliper' ),
            'preview_url'                    => 'https://themeim.com/wp/cliper/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'cliper_import_files' );

/*------------------------------
    CS GET FILE UNSERIALIZE DATA
-------------------------------*/
function cliper_get_cs_decode_string( $string = '' ) {
    return unserialize( $string );
}

/* ----------------------------
    SETUP MENU & HOME AFTER IMPORT
-------------------------------*/
function saasmax_after_import( $selected_import ) {

    $options_file_path = isset( $selected_import['local_import_theme_option_file'] ) ? $selected_import['local_import_theme_option_file'] : '';

    if ( $options_file_path ) {
        $options_raw_data = OCDI\Helpers::data_from_file( $options_file_path );
        if ( !is_wp_error( $options_raw_data ) ) {
            update_option( 'cliper_options', cliper_get_cs_decode_string( $options_raw_data ) );
        }
    }

    if ( 'Home V1' === $selected_import['import_file_name'] ) {

        esc_html_e( 'Thank You! for installing demo ( Home V1 ).', 'cliper' );

        $front_page_id = get_page_by_title( 'Home V1' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        set_theme_mod( 'nav_menu_locations', array(
            'mainmenu' => $main_menu->term_id,
        ));

    } elseif ( 'Home V2' === $selected_import['import_file_name'] ) {

        esc_html_e( 'Thank You! for installing demo ( Home V2 ).', 'cliper' );

        $front_page_id = get_page_by_title( 'Home V2' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        set_theme_mod( 'nav_menu_locations', array(
            'mainmenu' => $main_menu->term_id,
        ));

    }
}
add_action( 'ocdi/after_import', 'saasmax_after_import' );


print_r(cliper_get_option('cliper_options'));