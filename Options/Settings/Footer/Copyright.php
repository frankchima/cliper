<?php

$info       = wp_get_theme();
$author     = $info->get( 'Author' );    
$author_uri = $info->get( 'AuthorURI' );
$author_uri = '<a target="_blank" href="'. esc_url( $author_uri ) .'">'. esc_html( $author ) .'</a>';

/*-----------------------------------
    FOOTER TOP SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Footer_Tab',
        'title'  => esc_html__( 'Footer Copyright', 'cliper' ),
        'icon'   => 'fa fa-copyright',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Copyright Text', 'cliper' ),
            ),
            array(
                'id'            => 'copyright_text',
                'type'          => 'wp_editor',
                'title'         => esc_html__( 'Copyright Text', 'cliper' ),
                'desc'          => esc_html__( 'Set the footer copyright text. Use {YEAR} for showing year dynamically and use &copy; or {COPYRIGHT} for getting dynamically copyright sign.','cliper' ),
                'tinymce'       => true,
                'quicktags'     => true,
                'media_buttons' => false,
                'height'        => '200px',
                'default'       => sprintf( __( 'Copyright {COPYRIGHT} %s {YEAR} All Right Reserved.', 'cliper' ), $author_uri ),
            ),
        ),
    )
);