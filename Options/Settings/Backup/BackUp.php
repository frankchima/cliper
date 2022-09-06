<?php

/*-----------------------------------
    BACKUP OPTIONS SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'title'  => esc_html__( 'Backup Options', 'cliper' ),
        'icon'   => 'fa fa-share-square-o',
        'fields' => array(
            array(
                'id'    => 'backup_options',
                'type'  => 'backup',
                'title' => esc_html__( 'Backup Your All Options', 'cliper' ),
                'desc'  => esc_html__( 'If you want to take backup your option you can backup here.', 'cliper' ),
            ),
        ),
    )
);