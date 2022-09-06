<?php

/*-----------------------------------
    CUSTOM JAVASCRIPT SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'parent' => 'Scripts_Tab',
        'title'  => esc_html__( 'Custom JavaScript', 'cliper' ),
        'icon'   => 'fa fa-code',
        'fields' => array(
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom JavaScript Code', 'cliper' ),
            ),
            array(
                'id'       => 'custom_script',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom javaScript here with javascript selector. this javascript code will be applied in all pages and post.', 'cliper' ),
                'settings' => array(
                    'mode'        => 'javascript',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
        ),
    )
);