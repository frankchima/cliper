<?php

/*-----------------------------------
    HEADER META SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Scripts_Tab',
        'title'  => esc_html__( 'Header Meta', 'cliper' ),
        'icon'   => 'fa fa-info-circle',
        'fields' => array(

            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Header Meta Tags', 'cliper' ),
            ),
            array(
                'id'       => 'header_meta_tags',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write Here your header meta tag. example: ( <meta name="author" content="ShapeReign"> )', 'cliper' ),
                'sanitize' => false,
                'settings' => array(
                    'mode'        => 'htmlmixed',
                    'theme'       => 'shadowfox',
                    'tabSize'     => 4,
                    'smartIndent' => false,
                    'autocorrect' => false,
                ),
            ),
        ),
    )
);