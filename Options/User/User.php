<?php

/*------------------------------------------
CONTROL CORE CLASSES FOR AVOID ERRORS
--------------------------------------------*/
if ( class_exists( 'CSF' ) ) {

    /*-----------------------------------
    	SECTION UNIQUE ID
    ------------------------------------*/
    $ahost_profile_options = 'cliper_profile_options';

    /*-----------------------------------
    SAVING DATA TYPE SECTION
    ------------------------------------*/
    CSF::createProfileOptions( $ahost_profile_options,
        array(
            'data_type' => 'serialize', /* The type of the database save options. `serialize` or `unserialize` */
        )
    );

    /*-----------------------------------
    	DESIGNATION SECTION
    ------------------------------------*/
    CSF::createSection( $ahost_profile_options,
        array(
            'fields' => array(
                array(
                    'id'    => 'designation',
                    'type'  => 'text',
                    'title' => 'Designation',
                ),
            ),
        )
    );

    /*-----------------------------------
    	USER SOCIAl PROFILE SECTION
    ------------------------------------*/
    CSF::createSection( $ahost_profile_options,
        array(
            'title'  => esc_html__( 'User Social Bookmark', 'cliper' ),
            'icon'   => 'fa fa-share-alt',
            'fields' => array(
                array(
                    'id'           => 'social_share',
                    'type'         => 'group',
                    'title'        => esc_html__( 'Add Social Share', 'cliper' ),
                    'button_title' => esc_html__( 'Add New Social', 'cliper' ),
                    'desc'         => esc_html__( 'Set the social bookmark icon and link here. Easy to use it just click the add icon button and search your social icon and set the url for the profile .', 'cliper' ),
                    'fields'       => array(
                        array(
                            'id'      => 'bookmark_icon',
                            'type'    => 'icon',
                            'title'   => esc_html__( 'Social Icon', 'cliper' ),
                            'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, Linkedin, YouTube ect. )', 'cliper' ),
                            'default' => 'fa fa-facebook',
                        ),
                        array(
                            'id'      => 'bookmark_url',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Profile Url', 'cliper' ),
                            'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourprofile. also you can add (facebook, twitter, Linkedin, YouTube etc.)', 'cliper' ),
                            'default' => 'http://facebook.com/yourprofile',
                        ),
                    ),
                ),
            ),
        )
    );
}
