<?php 

/*-----------------------------------
    FAVICON ICON SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
           
        'title'  => esc_html__('Favicon Icon','cliper'),
        'icon'   => 'fa fa-star',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Favicon / Site Icon', 'cliper' ),
            ),
            array(
                'id'      => 'favicon_icon',
                'type'    => 'media',
                'title'   => esc_html__( 'Set Favicon Icon', 'cliper' ),
                'desc'    => esc_html__( 'Set the favicon icon size ( 16px x 16px ) OR ( 32px x 32px )', 'cliper' ),
                'preview' => true,
                'url'     => true,
            ),
            array(
                'id'      => 'favicon_iphone',
                'type'    => 'media',
                'title'   => esc_html__( 'Set Iphone Favicon Icon', 'cliper' ),
                'desc'    => esc_html__( 'Set the iphone favicon icon size ( 57px x 57px )', 'cliper' ),
                'preview' => true,
                'url'     => true,
            ),
            array(
                'id'      => 'favicon_iphone_retina',
                'type'    => 'media',
                'title'   => esc_html__( 'Set Iphone Retina Favicon Icon', 'cliper' ),
                'desc'    => esc_html__( 'Set the iphone retina favicon icon size ( 144px x 144px )', 'cliper' ),
                'preview' => true,
                'url'     => true,
            ),
            array(
                'id'      => 'favicon_ipad',
                'type'    => 'media',
                'title'   => esc_html__( 'Set Ipad Favicon Icon', 'cliper' ),
                'desc'    => esc_html__( 'Set the ipad favicon icon size ( 72px x 72px )', 'cliper' ),
                'preview' => true,
                'url'     => true,
            ),
            array(
                'id'      => 'favicon_ipad_retina',
                'type'    => 'media',
                'title'   => esc_html__( 'Set Ipad Retina Favicon Icon', 'cliper' ),
                'desc'    => esc_html__( 'Set the ipad retina favicon icon size ( 144px x 144px )', 'cliper' ),
                'preview' => true,
                'url'     => true,
            ),
        )
    )
);
