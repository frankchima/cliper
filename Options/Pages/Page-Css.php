<?php

/*-----------------------------------
    CUSTOM CSS SECTION
------------------------------------*/
CSF::createSection( CLIPER_META_KEY,
	array(
		'title'  => esc_html__( 'Custom CSS', 'cliper' ),
        'parent' => 'Page_Meta_Tab',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Page Custom Css', 'cliper' ),
			),
            array(
                'id'       => 'page_cs_css',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in this page.', 'cliper' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
		)
	)
);