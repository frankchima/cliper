<?php 

/*-----------------------------------
    HEADER TAB SECTION
------------------------------------*/
CSF::createSection( CLIPER_OPTION_KEY,
	array(
	    'title'  => esc_html__( 'Scroll To Top', 'cliper' ),
	    'icon'   => 'fa fa-arrow-up',
	    'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Scroll To Top Button', 'cliper' ),
			),
			array(
				'id'      => 'enable_scroll_top',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Scroll Top', 'cliper' ),
				'desc'    => esc_html__( 'If you want to enable or disable scroll to top button you can set ( YES / NO )', 'cliper' ),
				'default' => true,
			),
			array(
				'id'      => 'scroll_top_easing',
				'type'    => 'select',
				'title'   => esc_html__( 'Scroll Top Animation', 'cliper' ),
				'desc'    => esc_html__( 'You can set specific easing animation style in every page form here.', 'cliper' ),
				'options' => array(
					'easeInSine'       => 'easeInSine',
					'easeOutSine'      => 'easeOutSine',
					'easeInOutSine'    => 'easeInOutSine',
					'easeInQuad'       => 'easeInQuad',
					'easeOutQuad'      => 'easeOutQuad',
					'easeInOutQuad'    => 'easeInOutQuad',
					'easeInCubic'      => 'easeInCubic',
					'easeOutCubic'     => 'easeOutCubic',
					'easeInOutCubic'   => 'easeInOutCubic',
					'easeInQuart'      => 'easeInQuart',
					'easeOutQuart'     => 'easeOutQuart',
					'easeInOutQuart'   => 'easeInOutQuart',
					'easeInQuint'      => 'easeInQuint',
					'easeOutQuint'     => 'easeOutQuint',
					'easeInOutQuint'   => 'easeInOutQuint',
					'easeInExpo'       => 'easeInExpo',
					'easeOutExpo'      => 'easeOutExpo',
					'easeInOutExpo'    => 'easeInOutExpo',
					'easeInCirc'       => 'easeInCirc',
					'easeOutCirc'      => 'easeOutCirc',
					'easeInOutCirc'    => 'easeInOutCirc',
					'easeInBack'       => 'easeInBack',
					'easeOutBack'      => 'easeOutBack',
					'easeInOutBack'    => 'easeInOutBack',
					'easeInElastic'    => 'easeInElastic',
					'easeOutElastic'   => 'easeOutElastic',
					'easeInOutElastic' => 'easeInOutElastic',
					'easeInBounce'     => 'easeInBounce',
					'easeOutBounce'    => 'easeOutBounce',
					'easeInOutBounce'  => 'easeInOutBounce',
				),
				'dependency' => array( 'enable_scroll_top', '==', 'true' ),
				'default'    => 'easeOutExpo',
			),
			array(
				'id'          => 'scroll_top_animation_time',
				'type'        => 'spinner',
				'title'       => esc_html__( 'Scroll To Top Animation Time', 'cliper' ),
				'desc'        => esc_html__( 'You can set time for animation.', 'cliper' ),
				'min'         => 100,
				'max'         => 5000,
				'step'        => 100,
				'unit'        => ' ',
				'output_mode' => 'width',
				'default'     => 1500,
				'dependency'  => array( 'enable_scroll_top', '==', 'true' ),
			),
	    ),
	)
);