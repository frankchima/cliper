<?php

/**
*   Register Google Fonts.
*/

if ( !function_exists( 'cliper_get_google_font_url' ) ) {
    function cliper_get_google_font_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';
        
        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */        
        if ( 'off' !== esc_html_x( 'on', 'Poppins font: on or off', 'cliper' ) ) {
            $fonts[] = esc_html( 'Poppins:300,400,500,600,700,800,900' );
        }

        if ( 'off' !== esc_html_x( 'off', 'Roboto font: on or off', 'cliper' ) ) {
            $fonts[] = esc_html( 'Roboto:300,400,500,600,700' );
        }
        
        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => implode( '|', $fonts ),
                'subset' => $subsets,
            ), '//fonts.googleapis.com/css' );
        }
        return esc_url_raw( $fonts_url );
    }
}

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */

/**
 * Enqueue scripts and styles.
 */

if ( !function_exists( 'cliper_scripts' ) ) :

	function cliper_scripts() {

		/************************************
		*	    ALL CSS SCRIPTS HERE.       *
		*************************************/
        /*----------------------------
            GOOGLE FONTS
        -----------------------------*/
        wp_enqueue_style( 'cliper-google-font', cliper_get_google_font_url() );
        
        /*----------------------------
            THEME DEFAULT STYLESHEET
        -----------------------------*/
		wp_enqueue_style( 'cliper-style', get_stylesheet_uri(), array(), CLIPER_VERSION, 'all' );

        /*----------------------------
            PLUGINS
        -----------------------------*/
        wp_enqueue_style( 'animate', CLIPER_ROOT_CSS .'/plugins/animate.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'owl-carousel', CLIPER_ROOT_CSS .'/plugins/owl.carousel.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'stellarnav', CLIPER_ROOT_CSS .'/plugins/stellarnav.min.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'selectbox', CLIPER_ROOT_CSS .'/plugins/jquery.selectbox.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'nice-select', CLIPER_ROOT_CSS .'/plugins/nice-select.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'bootstrap', CLIPER_ROOT_CSS .'/plugins/bootstrap.min.css', array(), '4.6.0', 'all' );
		wp_enqueue_style( 'multi-step-form', CLIPER_ROOT_CSS .'/plugins/multi-step-form.css', array(), '1.0.0', 'all');

        /*----------------------------
            FONTS ICON
        -----------------------------*/
        wp_enqueue_style( 'themify', CLIPER_ROOT_CSS .'/icons/themify-icons.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'beicon', CLIPER_ROOT_CSS .'/icons/beicon.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'fontawesome', CLIPER_ROOT_CSS .'/icons/font-awesome.min.css', array(), '1.0.0', 'all' );

        /*----------------------------
            MAIN STYLESHEET
        ----------------------------*/
        wp_enqueue_style( 'cliper-default', CLIPER_ROOT_CSS .'/default.css', array(), CLIPER_VERSION, 'all' );
        wp_enqueue_style( 'cliper-typography', CLIPER_ROOT_CSS .'/typography.css', array(), CLIPER_VERSION, 'all' );
		wp_enqueue_style( 'cliper-header', CLIPER_ROOT_CSS .'/header.css', array(), CLIPER_VERSION, 'all' );
		wp_enqueue_style( 'cliper-blog', CLIPER_ROOT_CSS .'/blog-and-pages.css', array(), CLIPER_VERSION, 'all' );
		wp_enqueue_style( 'cliper-footer', CLIPER_ROOT_CSS .'/footer.css', array(), CLIPER_VERSION, 'all' );
		wp_enqueue_style( 'cliper-main-style', CLIPER_ROOT_CSS .'/features.css', array(), CLIPER_VERSION, 'all' );


		/*************************************
            ALL JQUERY SCRIPTS HERE
		**************************************/
        wp_enqueue_script( 'bootstrap', CLIPER_ROOT_JS . '/vendor/bootstrap.bundle.min.js', array( 'jquery' ), '4.6.0', true );
        wp_enqueue_script( 'preloader', CLIPER_ROOT_JS . '/preloader.js', array( 'jquery' ), '4.6.0', true );
        wp_enqueue_script( 'jquery-effects-core' );
        wp_enqueue_script( 'owl-carousel', CLIPER_ROOT_JS . '/owl.carousel.min.js', array( 'jquery' ), '2.0.0', true );
        wp_enqueue_script( 'wow', CLIPER_ROOT_JS . '/wow.min.js', array( 'jquery' ), '1.1.2', true );
        wp_enqueue_script( 'loadScroll', CLIPER_ROOT_JS . '/loadScroll.js', array( 'jquery' ), '1.1.2', true );
        wp_enqueue_script( 'stellarnav', CLIPER_ROOT_JS . '/stellarnav.min.js', array( 'jquery' ), '2.0.0', true );
        wp_enqueue_script( 'selectbox', CLIPER_ROOT_JS . '/jquery.selectbox.min.js', array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'nice-select', CLIPER_ROOT_JS . '/nice-select.min.js', array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'fitvids', CLIPER_ROOT_JS . '/jquery.fitvids.js', array( 'jquery' ), '1.1.0', true );
        // wp_enqueue_script( 'placeholdem', CLIPER_ROOT_JS . '/placeholdem.min.js', array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'menu-sticky', CLIPER_ROOT_JS . '/jquery.sticky.js', array( 'jquery' ), '1.0.4', true );
        wp_enqueue_script( 'footer-reval', CLIPER_ROOT_JS . '/footer-reveal.min.js', array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'resize-sensor', CLIPER_ROOT_JS . '/ResizeSensor.min.js', array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'sticky-sidebar', CLIPER_ROOT_JS . '/theia-sticky-sidebar.min.js', array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'masonry', array( 'jquery', 'imagesloaded' ) );
        wp_enqueue_script( 'cliper-active', CLIPER_ROOT_JS . '/main.js', array( 'jquery' ), CLIPER_VERSION, true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
	}

endif;
add_action( 'wp_enqueue_scripts', 'cliper_scripts' );

function cliper_default_style(){
    wp_enqueue_style('cliper-theme-style', CLIPER_ROOT_CSS . '/theme-style.css', array(), CLIPER_VERSION, 'all');

}

add_action('wp_enqueue_scripts', 'cliper_default_style', 11);

if(!function_exists('cliper_gutenbarg_support')) {

    function cliper_gutenbarg_support () {
        wp_enqueue_style( 'cliper-google-font', cliper_get_google_font_url() );
        wp_enqueue_style( 'fontawesome', CLIPER_ROOT_CSS .'/icons/font-awesome.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('cliper-gutenbarg', CLIPER_ROOT_CSS.'/gutenbarg.css', [], CLIPER_VERSION, 'all');
    }

    add_action('enqueue_block_editor_assets', 'cliper_gutenbarg_support');
}
