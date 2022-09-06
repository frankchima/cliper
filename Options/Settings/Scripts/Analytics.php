<?php

/*-----------------------------------
    GOOGLE ANALYTICS SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Scripts_Tab',
        'title'  => esc_html__( 'Google Analytics', 'cliper' ),
        'icon'   => 'fa fa-line-chart',
        'fields' => array(

            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Google Analytics Code', 'cliper' ),
            ),
            array(
                'id'       => 'custom_script_analytics',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write Here your Google Analytics Code. for get the analytics result. Just paste your google analytics code.', 'cliper' ),
                'sanitize' => false,
                'settings' => array(
                    'mode'        => 'htmlmixed',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => false,
                ),
            ),
        ),
    )
);