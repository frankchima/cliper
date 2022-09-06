<?php

/*------------------------
	UNIQUE META ID
-------------------------*/
$video_prefix   = '_cliper_video';

/*-----------------------------------
    POST VIDEO METABOX SECTION
------------------------------------*/
CSF::createMetabox( $video_prefix,
	array(
		'title'           => esc_html__( 'Post Settings', 'cliper' ),
		'post_type'       => 'post',
		'data_type'       => 'unserialize',
		'context'         => 'normal',
		'priority'        => 'high',
		'post_formats'    => 'video',
		'show_restore'    => true,
		'output_css'      => true,
		'theme'           => 'dark',
	)
);

/*-----------------------------------
    VIDEO SECTION
------------------------------------*/
CSF::createSection( $video_prefix,
	array(
		'title'  => esc_html__( 'Video Post Setting', 'cliper' ),
		'fields' => array(
		    array(
				'id'          => '_cliper_video_url',
				'type'        => 'text',
				'title'       => esc_html__( 'Video Url', 'cliper' ),
				'subtitle'    => esc_html__( 'Paste here a valid video url which is support auto embed with WordPress for post audio player preview.', 'cliper' ),
				'placeholder' => 'https://www.youtube.com/watch?v=qXfd2kK3hgQ',
				'default'     => 'https://www.youtube.com/watch?v=qXfd2kK3hgQ',
				'validate'    => 'csf_validate_url',
		    ),
		)
	)
);

/*-----------------------------------
    RETURN VIDEO PREVIEW
------------------------------------*/
if ( !function_exists('cliper_video_preview') ) {
	/**
	 * @return [string] video url for video post
	 */
	function cliper_video_preview(){
		$url = esc_url( get_post_meta( get_the_ID(), '_cliper_video_url', 1 ) );
		if ( !empty( $url ) ) {	
     		return '<div class="post-media">'.wp_oembed_get( $url ).'</div>';
     	}
	}
}