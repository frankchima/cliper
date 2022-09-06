<?php

/*------------------------
	UNIQUE META ID
-------------------------*/
$audio_prefix   = '_cliper_audio';

/*-----------------------------------
    POST AUDIO METABOX SECTION
------------------------------------*/
CSF::createMetabox( $audio_prefix,
	array(
		'title'           => esc_html__( 'Post Settings', 'cliper' ),
		'post_type'       => 'post',
		'data_type'       => 'unserialize',
		'context'         => 'normal',
		'priority'        => 'high',
		'post_formats'    => 'audio',
		'show_restore'    => true,
		'output_css'      => true,
		'theme'           => 'dark',
	)
);

/*-----------------------------------
    AUDIO SECTION
------------------------------------*/
CSF::createSection( $audio_prefix,
	array(
		'title'  => esc_html__( 'Audio Post Setting', 'cliper' ),
		'fields' => array(
		    array(
				'id'          => '_cliper_audio_url',
				'type'        => 'text',
				'title'       => esc_html__( 'Audio Url', 'cliper' ),
				'subtitle'    => esc_html__( 'Paste here a valid audio url which is support auto embed with WordPress for post audio player preview.', 'cliper' ),
				'placeholder' => 'https://soundcloud.com/luiguibleand/luigui-bleand-filling-feat-goldy-boy',
				'default'     => 'https://soundcloud.com/luiguibleand/luigui-bleand-filling-feat-goldy-boy',
				'validate'    => 'csf_validate_url',
		    ),
		)
	)
);

/*-----------------------------------
    RETURN AUDIO PREVIEW
------------------------------------*/
if( !function_exists('cliper_audio_preview') ) {
	/**
	 * @return [string] audio url for audio post
	 */
	function cliper_audio_preview(){
		$url = esc_url( get_post_meta( get_the_ID(), '_cliper_audio_url', 1 ) );
		if ( !empty( $url ) ) {			
     		return '<div class="post-media">'.wp_oembed_get( $url ).'</div>';
		}
	}
}