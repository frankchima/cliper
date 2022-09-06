<?php 

/*-----------------------------------------
	CONTROL CORE CLASSES FOR AVOID ERRORS
------------------------------------------*/
if( class_exists( 'CSF' ) ) {

	/*------------------------
		UNIQUE META ID
	-------------------------*/
	$tax_prefix = 'cliper_category_metabox';

	/*-----------------------------------
		PAGE METABOX SECTION
	------------------------------------*/
	CSF::createTaxonomyOptions( $tax_prefix,
		array(
			'taxonomy'  => 'category',
			'data_type' => 'serialize',
		)
	);

	/*-----------------------------------
		PAGE METABOX SECTION
	------------------------------------*/
	CSF::createSection( $tax_prefix,
		array(
			'fields' => array(
	            array(
					'id'      => 'enable_category_icon',
					'type'    => 'switcher',
					'title'   => esc_html__( 'Add Category Icon ?', 'cliper' ),
					'desc'    => esc_html__( 'If you want to set category icon you can set from here.', 'cliper' ),
					'default' => false,
	            ),
				array(
					'id'          => 'cat_icon_type',
					'type'        => 'select',
					'title'       => 'Select',
					'placeholder' => 'Select an option',
					'options'     => array(
						'font_icon'  => esc_html__( 'Font Icon', 'cliper' ),
						'image_icon' => esc_html__( 'Image Icon', 'cliper' ),
					),
					'default'    => 'font_icon',
					'dependency' => array( 'enable_category_icon', '==', 'true' ),
				),
				array(
					'id'         => 'category_icon',
					'type'       => 'icon',
					'title'      => esc_html__( 'Category Icon', 'cliper' ),
					'dependency' => array( 'enable_category_icon|cat_icon_type', '==|==', 'true|font_icon' ),
				),
				array(
					'id'         => 'category_image_icon',
					'type'       => 'media',
					'preview'    => true,
					'url'        => false,
					'title'      => esc_html__( 'Category Image Icon', 'cliper' ),
					'dependency' => array( 'enable_category_icon|cat_icon_type', '==|==', 'true|image_icon' ),
				),
			)
		)
	);
}
