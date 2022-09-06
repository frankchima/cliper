<?php

/*------------------------
	UNIQUE META ID
-------------------------*/
$gallery_prefix = '_cliper_gallery';

/*-----------------------------------
    POST GALLERY METABOX SECTION
------------------------------------*/
CSF::createMetabox( $gallery_prefix,
	array(
		'title'           => esc_html__( 'Post Settings', 'cliper' ),
		'post_type'       => 'post',
		'data_type'       => 'unserialize',
		'context'         => 'normal',
		'priority'        => 'high',
		'post_formats'    => 'gallery',
		'show_restore'    => true,
		'output_css'      => true,
		'theme'           => 'dark',
	)
);

/*-----------------------------------
    GALLERY SECTION
------------------------------------*/
CSF::createSection( $gallery_prefix,
	array(
		'title'  => esc_html__( 'Gallery Post Setting', 'cliper' ),
		'fields' => array(
			array(
				'id'          => '_cliper_gallery_images',
				'type'        => 'gallery',
				'title'       => esc_html__( 'Add Gallery Images', 'cliper' ),
				'desc'        => esc_html__( 'Please Upload OR Select Images From Media Library ( Note: Select Multiple Image For Gallery ).', 'cliper' ),
				'add_title'   => esc_html__( 'Add Images', 'cliper' ),
				'edit_title'  => esc_html__( 'Edit Gallery', 'cliper' ),
				'clear_title' => esc_html__( 'Remove Images', 'cliper' ),
			),
		)
	)
);

/*-----------------------------------
    RETURN GALLERY PREVIEW
------------------------------------*/
if ( !function_exists('cliper_gallery_preview') ) {
	/**
	 * @return [string] Images url for gallery post
	 */
	function cliper_gallery_preview(){
		$images = get_post_meta( get_the_ID(), '_cliper_gallery_images', 1 );

		$images = explode( ',', $images );
		if ( $images && count($images) > 1 ) {
			$gallery_slide = '<div class="post-media posts-gallery relative">';
			foreach ( $images as $image ) {
				$gallery_slide .='<div class="single-post-gallery"><a href="'.get_the_permalink().'"><img src="' . wp_get_attachment_image_url( $image, 'full' ) . '" alt="'.get_the_title().'"></a></div>';
			}
			$gallery_slide .= '</div>';
			return $gallery_slide;	
		}
	}
}