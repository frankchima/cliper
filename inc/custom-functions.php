<?php

/*------------------------------
    GET OPTIONS
------------------------------*/
if ( ! function_exists( 'cliper_get_option' ) ) {
        
    /**
     * cliper_get_option
     *
     * @param  string $option accetp string value id
     * @param  mixed $default value is null
     * @return mixed boolean or string
     */
    function cliper_get_option( $option = '', $default = null ) {
        $options = get_option( CLIPER_OPTION_KEY );
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}

/*-------------------------------
    PAGE LAYOUT STYLE
--------------------------------*/
if ( ! function_exists( 'cliper_blog_layout' ) ) {
    function cliper_blog_layout( $type = 'columns' ){
        $sidebar = 'no_sidebar';
        if ( 'full_width' == cliper_get_option( 'blog_pages_layout', CLIPER_LAYOUT ) ) {
            $sidebar = 'no_sidebar';
            $cliper_columns_layout = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
        }elseif ( 'left_sidebar' == cliper_get_option( 'blog_pages_layout', CLIPER_LAYOUT ) && is_active_sidebar( 'main-sidebar' ) ) {
            $sidebar = 'left_sidebar';
            $cliper_columns_layout = 'col-lg-8 blog__content__wrap';
        }elseif ( 'right_sidebar' == cliper_get_option( 'blog_pages_layout', CLIPER_LAYOUT ) && is_active_sidebar( 'main-sidebar' ) ) {
            $sidebar = 'right_sidebar';
            $cliper_columns_layout = 'col-lg-8 blog__content__wrap';
        }else{
            $cliper_columns_layout = 'col-lg-10 offset-lg-1';
        }
        if ( 'columns' == $type ) {
            return $cliper_columns_layout;
        }
        if ( 'sidebar' == $type ) {
            return $sidebar;
        }
    }
}

/*-------------------------------
    SINGLE POST LAYOUT STYLE
--------------------------------*/
if ( ! function_exists( 'cliper_blog_details_layout' ) ) {
    function cliper_blog_details_layout( $type = 'columns' ){
        $sidebar = 'no_sidebar';
        if ( 'full_width' == cliper_get_option( 'post_details_layout', CLIPER_LAYOUT ) ) {
            $sidebar = 'no_sidebar';
            $cliper_columns_layout = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
        }elseif ( 'left_sidebar' == cliper_get_option( 'post_details_layout', CLIPER_LAYOUT ) && is_active_sidebar( 'main-sidebar' ) ) {
            $sidebar = 'left_sidebar';
            $cliper_columns_layout = 'col-lg-8 blog__content__wrap';
        }elseif ( 'right_sidebar' == cliper_get_option( 'post_details_layout', CLIPER_LAYOUT ) && is_active_sidebar( 'main-sidebar' ) ) {
            $sidebar = 'right_sidebar';
            $cliper_columns_layout = 'col-lg-8 blog__content__wrap';
        }else{
            $cliper_columns_layout = 'col-lg-10 offset-lg-1';
        }
        if ( 'columns' == $type ) {
            return $cliper_columns_layout;
        }
        if ( 'sidebar' == $type ) {
            return $sidebar;
        }
    }
}

/*-------------------------------
    POST LAYOUT STYLE
--------------------------------*/
if ( ! function_exists( 'cliper_post_layout' ) ) {
    function cliper_post_layout(){
        if ( 'one_column' == cliper_get_option( 'blog_post_grid_layout', CLIPER_COLUMNS ) ) {
            $post_columns = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
        }elseif ( 'two_column' == cliper_get_option( 'blog_post_grid_layout', CLIPER_COLUMNS ) ) {
            $post_columns = 'col-md-6 col-lg-6 col-sm-12 col-xs-12';
        }elseif ( 'three_column' == cliper_get_option( 'blog_post_grid_layout', CLIPER_COLUMNS ) ) {
            $post_columns = 'col-md-6 col-lg-4 col-sm-12 col-xs-12';
        }else{
            $post_columns = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
        }
        return $post_columns;
    }
}

/*------------------------------
    HEADER LAYOUT STYLE
-------------------------------*/
if ( ! function_exists( 'cliper_header_layout' ) ) {
    function cliper_header_layout( $args = [] ){

        $result  =  array();
        $layouts = array(
            'header-1'  => CLIPER_ROOT_IMAGE . '/header/header_1.png',
            'header-2'  => CLIPER_ROOT_IMAGE . '/header/header_2.png',
            'header-3'  => CLIPER_ROOT_IMAGE . '/header/header_3.png',
            'header-4'  => CLIPER_ROOT_IMAGE . '/header/header_4.png',
            'header-5'  => CLIPER_ROOT_IMAGE . '/header/header_5.png',
            'header-6'  => CLIPER_ROOT_IMAGE . '/header/header_6.png',
            'header-7'  => CLIPER_ROOT_IMAGE . '/header/header_7.png',
            'header-8'  => CLIPER_ROOT_IMAGE . '/header/header_7.png',
            'header-9'  => CLIPER_ROOT_IMAGE . '/header/header_1.png',
            'header-10' => CLIPER_ROOT_IMAGE . '/header/header_10.png',
            'header-11' => CLIPER_ROOT_IMAGE . '/header/header_11.png',
            'header-12' => CLIPER_ROOT_IMAGE . '/header/header_12.png',
            'header-13' => CLIPER_ROOT_IMAGE . '/header/header_13.png',
        );

        foreach ( $layouts as $key => $value ) {
            if (in_array( $key, $args )) {
               $result[$key] = $value;
            }
        }
        return $result;
    }
}

/*-------------------------------
    BACKGROUND & OVERLAY
--------------------------------*/
if ( !function_exists('cliper_any_background') ) {
    /**
     * [cliper_any_background receved background data form option panel and return background data]
     * @param  [type] $background_data received background data form codester option ID.
     * @return $background string
     */
    function cliper_any_background($background_data,$default='rgba(0,0,0,0)'){

        $background = cliper_get_option($background_data);
        if ( !empty($background) ) {
            $background = $background;
        }else{
            $background = array();
        }
        if (array_key_exists('color', $background)) {
            $color = $background['color'];
        }else{
            $color = $default;
        }
        if (array_key_exists('image', $background)) {
            $image = $background['image'];
        }else{
            $image = '';
        }
        if (array_key_exists('repeat', $background)) {
            $repeat = $background['repeat'];
        }else{
            $repeat = 'repeat';
        }
        if (array_key_exists('attachment', $background)) {
            $attachment = $background['attachment'];
        }else{
            $attachment = 'scroll';
        }
        if (array_key_exists('position', $background)) {
            $position = $background['position'];
        }else{
            $position = 'center center';
        }
        if (array_key_exists('size', $background)) {
            $size = $background['size'];
        }else{
            $size = 'auto';
        }
        if ( $size == 'initial' || $size == 'inherit' || $size == '' ) {
           $size = '';
        }else{
            $size = '/'.$size.'';
        }
        if (!empty($image)) {
            $background_image = " url($image) $repeat $attachment $position ".( isset($size) ? $size : " ")."";
        }else{
            $background_image = '';
        }
        
        $background = $color.$background_image;
        return $background;
    }
}

/*-------------------------------
    META BACKGROUND & OVERLAY
--------------------------------*/
if ( !function_exists('cliper_meta_background') ) {
    /**
     * [cliper_meta_background receved background data form option panel and return background data]
     * @param  [type] $background_data received background data form codester option ID.
     * @return $background string
     */
    function cliper_meta_background($background_data, $default='#ffffff'){

        $background = $background_data;
        if ( !empty($background) ) {
            $background = $background;
        }else{
            $background = array();
        }
        if (array_key_exists('color', $background)) {
            $color = $background['color'];
        }else{
            $color = $default;
        }
        if (array_key_exists('image', $background)) {
            $image = $background['image'];
        }else{
            $image = '';
        }
        if (array_key_exists('repeat', $background)) {
            $repeat = $background['repeat'];
        }else{
            $repeat = 'repeat';
        }
        if (array_key_exists('attachment', $background)) {
            $attachment = $background['attachment'];
        }else{
            $attachment = 'scroll';
        }
        if (array_key_exists('position', $background)) {
            $position = $background['position'];
        }else{
            $position = 'center center';
        }
        if (array_key_exists('size', $background)) {
            $size = $background['size'];
        }else{
            $size = 'auto';
        }
        if ( $size == 'initial' || $size == 'inherit' || $size == '' ) {
           $size = '';
        }else{
            $size = '/'.$size.'';
        }
        if (!empty($image)) {
            $background_image = " url($image) $repeat $attachment $position ".( isset($size) ? $size : " ")."";
        }else{
            $background_image = '';
        }
        
        $background = $color.$background_image;
        return $background;
    }
}

/*---------------------------
    METABOX
-----------------------------*/
if ( !function_exists( 'cliper_metabox_value' ) ) {
    function cliper_metabox_value( $meta_key ) {
        if ( get_post_meta( get_the_ID(), $meta_key, true ) ) {
            $meta_value = get_post_meta( get_the_ID(), $meta_key, true );
        } else {
            $meta_value = array();
        }
        return $meta_value;
    }
}

/*---------------------------
    PARSE META DATA
----------------------------*/
if ( !function_exists( 'cliper_meta_data' ) ) {
    function cliper_meta_data( $get_data, $default = '' ) {
        $data = $get_data;
        if ( !empty( $data ) ) {
            $data = $data;
        } else {
            $data = $default;
        }
        return $data;
    }
}

/*---------------------------
    COLOR
----------------------------*/
if ( !function_exists( 'cliper_any_color' ) ) {
    function cliper_any_color( $color_data, $default = '' ) {
        $color = cliper_get_option( $color_data );
        if ( !empty( $color ) ) {
            $color = $color;
        } else {
            $color = $default;
        }
        return $color;
    }
}

/*---------------------------
    OVERLALY
----------------------------*/
if ( !function_exists('cliper_any_opacity') ) {
    function cliper_any_opacity($opacity_data,$default = '65'){
        $opacity = cliper_get_option($opacity_data);
        if ($opacity) {
            $opacity = $opacity;
        }else{
            $opacity = $default;
        }
        return $opacity;
    }
}

/*---------------------------
    SWITCH
----------------------------*/
if ( !function_exists( 'cliper_any_switch' ) ) {
    function cliper_any_switch( $switch_data, $default = false ) {
        $switch = cliper_get_option( $switch_data );
        if ( $switch == true ) {
            $switch = $switch;
        } else {
            $switch = $default;
        }
        return $switch;
    }
}

/*---------------------------
    PARSE DATA
----------------------------*/
if ( !function_exists( 'cliper_any_data' ) ) {
    function cliper_any_data( $get_data, $default = '' ) {
        $data = cliper_get_option( $get_data );
        if ( !empty( $data ) ) {
            $data = $data;
        } else {
            $data = $default;
        }
        return $data;
    }
}

/*---------------------------
    BODY OPEN FUNCTION
----------------------------*/
if ( !function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/*---------------------------
    APPLY HEADER IN SHOP
----------------------------*/
add_action( 'woocommerce_page_header', 'cliper_title' );

/*----------------------------
    GET SVG LOGO
------------------------------*/
if ( !function_exists( 'cliper_get_logo_type_tag' ) ) {
    function cliper_get_logo_type_tag( $url='' ){
        if( $url == '' ){
            return '<img src="'.esc_url( $url ).'" alt="'.get_bloginfo( 'name' ).'">';
        }
        try{
            $url_basename = basename( $url ); 
            $svg_ext      = explode( '.',$url_basename )[1];

            if( $svg_ext != 'svg' ){
                return '<img src="'.esc_url( $url ).'" alt="'.get_bloginfo( 'name' ).'">';
            }
            $get_svg_file = wp_remote_get( $url );
            $svg_file     = wp_remote_retrieve_body( $get_svg_file );
            $find_string  = '<svg';
            $position     = strpos( $svg_file, $find_string );
            $new_svg_file = substr( $svg_file, $position );
            return $new_svg_file;
        }catch( \Exception $e ) {
            return '<img src="'.esc_url( $url ).'" alt="'.get_bloginfo( 'name' ).'">';
        }
    }
}


/*----------------------------
    LOGO WITH STICKY
------------------------------*/
if ( !function_exists( 'cliper_logo_with_sticky' ) ){
    function cliper_logo_with_sticky(){
        $default_logo = get_theme_mod( 'custom_logo' );
        $default_logo = wp_get_attachment_image_url( $default_logo, 'full');

        $logo        = cliper_get_option( 'logo' );
        $logo        = isset( $logo['url'] ) ? $logo['url'] : '';

        $sticky_logo = cliper_get_option( 'sticky_logo' );
        $sticky_logo = isset( $sticky_logo['url'] ) ? $sticky_logo['url'] : '';

        if ( '' == $default_logo && isset( $logo ) ) {
            $default_logo = $logo;
        }

        if ( '' == $sticky_logo && cliper_get_option( 'sticky_menu' ) == true ) {
            $sticky_logo = $default_logo;
        }

        /*---------------------------
            OVERWRITE PAGE LOGO
        ----------------------------*/
        $page_meta_array  = cliper_metabox_value('_cliper_page_metabox');
        $page_logo_switch = isset( $page_meta_array['overwrite_page_logo'] ) ? $page_meta_array['overwrite_page_logo'] : false;

        if( is_page() && '1' == $page_logo_switch ){            
            $page_default_logo = $page_meta_array['logo'];
            $page_sticky_logo  = $page_meta_array['sticky_logo'];
            $default_logo      = isset( $page_meta_array['logo']['url'] ) ? $page_meta_array['logo']['url'] : $default_logo;
            $sticky_logo       = isset( $page_meta_array['sticky_logo']['url'] ) ? $page_meta_array['sticky_logo']['url'] : $sticky_logo;

            if ( empty( $sticky_logo ) && cliper_get_option( 'sticky_menu' ) == true ) {
                $sticky_logo = $default_logo;
            }
        }
        
        ?>
        <?php if ( !empty( $default_logo ) &&  !empty( $sticky_logo ) ) : ?>
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="custom-logo-link default-logo">
                <?php echo cliper_get_logo_type_tag( $default_logo ); ?>
            </a>
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="custom-logo-link sticky-logo">
                <?php echo cliper_get_logo_type_tag( $sticky_logo ); ?>
            </a>
        <?php elseif( !empty( $default_logo ) && empty( $sticky_logo ) && cliper_get_option('sticky_menu') == false ): ?>
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="custom-logo-link">
                <?php echo cliper_get_logo_type_tag( $default_logo ); ?>
            </a>
        <?php else: ?>
        <h3>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
            </a>
        </h3>
    <?php  endif;
    }
}

/*---------------------------
    DEFAULT LOGO
----------------------------*/
if ( !function_exists('cliper_default_logo') ) {
    function cliper_default_logo(){
        if ( has_custom_logo() ) :
            the_custom_logo('navbar-brand'); 
        else: ?>
            <h3>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo esc_html( get_bloginfo('name') ); ?>
                </a>
            </h3>
        <?php
        endif;
    }
}

/*--------------------------
    FAVICON OR SITE ICON
---------------------------*/
if ( !function_exists('cliper_favicon_setup') ) {
    function cliper_favicon_setup() {
        if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
            $favicon               = cliper_get_option( 'favicon_icon' );
            $favicon_iphone        = cliper_get_option( 'favicon_iphone' );
            $favicon_iphone_retina = cliper_get_option( 'favicon_iphone_retina' );
            $favicon_ipad          = cliper_get_option( 'favicon_ipad' );
            $favicon_ipad_retina   = cliper_get_option( 'favicon_ipad_retina' );

            if ( isset( $favicon['url'] ) && !empty( $favicon['url'] ) ) {
                echo '<link rel="'.esc_attr__( 'shortcut icon', 'cliper' ).'" href="'. esc_url( $favicon['url'] ) .'"/>';
            }else{
                echo '<link rel="'.esc_attr__( 'shortcut icon', 'cliper' ).'" href="'.esc_url( CLIPER_ROOT_IMAGE . '/favicon.png' ).'"/>';
            }
            if ( isset( $favicon_iphone['url'] ) && !empty( $favicon_iphone['url'] ) ) {
                echo '<link rel="apple-touch-icon" sizes="57x57" href="'. esc_url( $favicon_iphone['url'] ) .'" >';
            }
            if ( isset( $favicon_iphone_retina['url'] ) && !empty( $favicon_iphone_retina['url'] ) ) {
                echo '<link rel="apple-touch-icon" sizes="114x114" href="'. esc_url( $favicon_iphone_retina['url'] ) .'" >';
                echo '<link name="msapplication-TileImage" href="'. esc_url( $favicon_iphone_retina['url'] ) .'" >';
            }
            if ( isset( $favicon_ipad['url'] ) && !empty( $favicon_ipad['url'] ) ) {
                echo '<link rel="apple-touch-icon" sizes="72x72" href="'. esc_url( $favicon_ipad['url'] ) .'" >';
            }
            if ( isset( $favicon_ipad_retina['url'] ) && !empty( $favicon_ipad_retina['url'] ) ) {
                echo '<link rel="apple-touch-icon" sizes="144x144" href="'. esc_url( $favicon_ipad_retina['url'] ) .'" >';
            }
        }
    }
    add_action( 'wp_head', 'cliper_favicon_setup', 1 );
}

/*---------------------------
    HEADER META TAGS
----------------------------*/
if ( !function_exists('cliper_header_meta_tag') ) {
    function cliper_header_meta_tag(){
        echo cliper_get_option('header_meta_tags');
    }
    add_action( 'wp_head', 'cliper_header_meta_tag', 1 );
}

/*---------------------------
    FOOTER ANALITYCS CODE
----------------------------*/
if ( !function_exists('cliper_google_analitycs') ) {
    function cliper_google_analitycs(){
        echo cliper_get_option('custom_script_analytics');
    }
    add_action( 'wp_footer', 'cliper_google_analitycs', 1 );
}

/*---------------------------
    PRELOADER
----------------------------*/
if ( !function_exists('cliper_preloader') ) {
    function cliper_preloader(){
        if ( '1' == cliper_get_option( 'enable_preloader', true ) ) {
            get_template_part( 'template-parts/global/preloader' );
        }
    }
}

/*--------------------------
    SCROLL TO TOP
----------------------------*/
if ( !function_exists('cliper_scrolltop') ) {
    function cliper_scrolltop(){ ?>
        <?php if( '1' == cliper_get_option( 'enable_scroll_top', true ) ) : ?>
            <!--SCROLL TO TOP-->
            <a href="#scrolltop" class="scrolltop"><i class="ti ti-angle-up"></i></a>
        <?php endif; 
    }
}

if ( !function_exists('cliper_scroll_top_script') ) {
    function cliper_scroll_top_script(){

        $scroll_top_switch = cliper_get_option( 'enable_scroll_top', true );
        $scroll_top_easing = cliper_get_option( 'scroll_top_easing', 'easeOutExpo' );
        $animation_time    = cliper_get_option( 'scroll_top_animation_time', 1500 );

        if ( $scroll_top_switch == true ) {
            $scroll_top_scripts = '
                jQuery(document).ready(function(){
                    "use strict";
                    jQuery("a.scrolltop").on("click", function (event) {
                        var id     = jQuery(this).attr("href");
                        var offset = 60;
                        var target = jQuery(id).offset().top - offset;
                        jQuery("html, body").animate({
                            scrollTop: target
                        }, '.$animation_time.', "'.$scroll_top_easing.'");
                        event.preventDefault();
                    });
                });
            ';
        }else{
            return false;
        }
        wp_add_inline_script( 'cliper-active', $scroll_top_scripts );
    }
}
add_action( 'wp_enqueue_scripts', 'cliper_scroll_top_script' );

/*---------------------------
AFTER BODY
---------------------------*/
if ( !function_exists( 'cliper_after_body_content' ) ) {
    function cliper_after_body_content() {
        if ( function_exists( 'cliper_preloader' ) ) {
            cliper_preloader();
        }
        if ( function_exists( 'cliper_scrolltop' ) ) {
            cliper_scrolltop();
        }
    }
}
add_action( 'wp_body_open', 'cliper_after_body_content' );


/*---------------------------
mobile MENU
-----------------------------*/
if ( !function_exists( 'cliper_mobile_menu' ) ) {
    function cliper_mobile_menu() {

        $menu_style          = cliper_get_option( 'mobile_menu_style', 'center' );
        $contact_number      = cliper_get_option( 'contact_number', '#' );
        $contact_location    = cliper_get_option( 'contact_location', '#' );
        $mobile_menu_scripts = array(
            'style'    => $menu_style,
            'contact'  => $contact_number,
            'location' => $contact_location,
        );
        wp_localize_script( 'cliper-active', 'mobile_menu_scripts', $mobile_menu_scripts );
    }
}
add_action( 'wp_enqueue_scripts', 'cliper_mobile_menu' );

/*---------------------------
    MENU STICKY
-----------------------------*/
if ( !function_exists( 'cliper_menu_sticky' ) ) {
    function cliper_menu_sticky() {
        if ( '1' == cliper_get_option( 'sticky_menu', true ) ) {
            $menu_scripts = '
                jQuery(document).ready(function(){
                    "use strict";
                    jQuery("#mainnav-area").sticky({
                        topSpacing: 0
                    });
                });
            ';
        } else {
            return false;
        }
        wp_add_inline_script( 'cliper-active', $menu_scripts );
    }
}
add_action( 'wp_enqueue_scripts', 'cliper_menu_sticky' );

/*----------------------------
    MENU FALBACK
-----------------------------*/
if (!function_exists('cliper_menu_default_fallback')) {
    function cliper_menu_default_fallback() {
        if ( is_user_logged_in() ) {
        ?>
        <div id="cliper-main-navigation" class="stellarnav">            
            <ul id="cliper-nav" class="nav navbar-nav cliper-pull-right">
                <li>
                    <a href="<?php echo admin_url(); ?>nav-menus.php">
                        <?php esc_html_e( 'Set Main Menu Here...', 'cliper' ); ?>
                    </a>
                </li>
            </ul>
        </div>
        <?php
        }
    }
}

/*---------------------------
    SIDEBAR STICKY
-----------------------------*/
if ( !function_exists( 'cliper_sidebar_sticky' ) ) {
    function cliper_sidebar_sticky() {
        if ( '1' == cliper_get_option( 'sticky_sidebar', true ) ) {
            $sidebar_scripts = '
                jQuery(document).ready(function(){
                    "use strict";
                    var sticky_sidebar = jQuery(".content-area .blog__content__wrap,.content-area .blog__widgets__wrap");
                    sticky_sidebar.theiaStickySidebar({
                        additionalMarginTop: 30
                    });
                });
            ';
        } else {
            return false;
        }

        if ( '1' == cliper_get_option( 'sticky_shop_sidebar', true ) ) {
            $sidebar_scripts = '
                jQuery(document).ready(function(){
                    "use strict";
                    var sticky_sidebar = jQuery(".content-area .product__content__wrap,.content-area .product__widgets__wrap");
                    sticky_sidebar.theiaStickySidebar({
                        additionalMarginTop: 0
                    });
                });
            ';
        } else {
            return false;
        }

        wp_add_inline_script( 'cliper-active', $sidebar_scripts );
    }
}
add_action( 'wp_enqueue_scripts', 'cliper_sidebar_sticky' );

/*---------------------------
    FOOTER STICKY
-----------------------------*/
if ( !function_exists( 'cliper_footer_sticky' ) ) {
    function cliper_footer_sticky() {
        if ( '1' == cliper_get_option( 'sticky_footer' ) && cliper_get_option( 'hide_footer' ) == false ) {
            $footer_scripts = '
                jQuery(document).ready(function(){
                    "use strict";
                    var window_width = jQuery(window).width();
                    if (window_width > 900) {
                        jQuery(".footer-area").footerReveal({
                            shadow: false,
                            zIndex: -999
                        });
                        var footer_area = jQuery(".footer-area");
                        footer_area.prev().css({
                            "background": "#ffffff",
                        });
                    }
                });
            ';
        } else {
            return false;
        }
        wp_add_inline_script( 'cliper-active', $footer_scripts );
    }
}
add_action( 'wp_enqueue_scripts', 'cliper_footer_sticky' );


/*---------------------------
    CUSTOM SCRIPTS
-----------------------------*/
if ( !function_exists( 'cliper_custom_scripts' ) ) {
    function cliper_custom_scripts() {
        if ( cliper_get_option( 'custom_script' ) ) {
            $footer_scripts = cliper_get_option( 'custom_script' );
        } else {
            return false;
        }
        wp_add_inline_script( 'cliper-active', $footer_scripts );
    }
}
add_action( 'wp_enqueue_scripts', 'cliper_custom_scripts' );


/*------------------------------
    SOCIAL PROFILE LINK
-------------------------------*/
if ( !function_exists('cliper_social_links') ) {
    function cliper_social_links(){
        $social_links = cliper_get_option('social_bookmark');
        if ($social_links) {
            if (count($social_links)) {
            ?>
            <div class="social-profile">
                <ul>
                    <?php foreach ($social_links as $single_link) : ?>
                    <li><a href="<?php echo esc_url( $single_link['bookmark_url'] ); ?>" target="_blank"><i class="<?php echo esc_attr( $single_link['bookmark_icon'] ); ?>"></i></a></li>  
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php
            }
        }
    }
}

/*------------------------------
    FOOTER COPYRIGHT
-------------------------------*/
if ( !function_exists( 'cliper_copyright' ) ) {
    function cliper_copyright() {

        $author_name = wp_get_theme()->get( 'Author' );
        $author_link = wp_get_theme()->get( 'AuthorURI' );
        $link_static = '<a target="_blank" href="' . $author_link . '">' . $author_name . '</a>';

        if ( cliper_get_option( 'copyright_text' ) ) {
            $copyright_text = cliper_get_option( 'copyright_text' );
        } else {
            $copyright_text = sprintf( __( 'Copyright {COPYRIGHT} %s {YEAR} All Right Reserved', 'cliper' ), $link_static );
        }
        $copyright_text = str_replace( ['{COPYRIGHT}', '{YEAR}'], ['&copy;', date( 'Y' )], $copyright_text );
        echo wp_kses( $copyright_text, wp_kses_allowed_html( 'post' ) );
    }
}

/*----------------------------
    PAGE TITLE
-----------------------------*/
if ( !function_exists('cliper_title') ) {
    function cliper_title(){ ?>
        <?php
            if ( is_page() ) {
                $page_meta_array = cliper_metabox_value('_cliper_page_metabox');
                $enable_title    = isset( $page_meta_array['enable_title'] ) ? $page_meta_array['enable_title'] : false;
                $custom_title    = isset( $page_meta_array['custom_title'] ) ? $page_meta_array['custom_title'] : '';
            }
            $cliper_blog_title = cliper_get_option( 'blog_page_title' );
        ?>
        <div class="banner-area white">
            <div class="banner-area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        
                        <?php if ( (is_home() && is_front_page() ) || is_page_template( 'blog-classic.php' ) ) : ?>

                            <div class="page-title">
                                <?php if( $cliper_blog_title ==! '' ): ?>
                                <h1><?php echo esc_html( $cliper_blog_title ); ?></h1>
                                <?php else: ?>
                                <h1><?php esc_html_e('Blog Page','cliper'); ?></h1>
                                <?php endif; ?>

                                <?php if (get_bloginfo( 'description')) :?>
                                <p>
                                    <?php bloginfo( 'description' ); ?>
                                </p>
                                <?php endif; ?>
                            </div>

                        <?php elseif( class_exists("WooCommerce") && is_shop() ): ?>

                            <div class="page-title">                            
                                <h1>
                                    <?php
                                        $title_text = cliper_get_option('shop_page_title') ? cliper_get_option('shop_page_title') : __( 'Shop Page', 'cliper' );
                                        echo esc_html( $title_text );
                                    ?>
                                </h1>

                                <?php if( '1' == cliper_get_option('enable_shop_description') && '1' != cliper_get_option('custom_shop_description') ): ?>
                                <?php if ( the_archive_description() ) : ?>
                                <p><?php the_archive_description(); ?></p>
                                <?php endif; ?>
                                <?php elseif( '1' == cliper_get_option('enable_shop_description') && '1' == cliper_get_option('custom_shop_description') ): ?>
                                <p><?php echo esc_html( cliper_get_option('shop_page_description') ); ?></p>
                                <?php endif; ?>

                            </div>

                        <?php elseif( is_page() ): ?>
                        
                            <div class="page-title">
                                <h1>
                                    <?php
                                        if ( $enable_title == true && !empty($custom_title) ) {
                                            echo esc_html( $custom_title );
                                        }else{
                                           wp_title( $sep = ' ');
                                        }
                                     ?>
                                </h1>
                            </div>

                            <?php if( '1' == cliper_get_option( 'show_page_breadcrumb', true ) ) : ?>
                            <div class="breadcumb">
                                <?php if (function_exists('cliper_breadcrumbs')) {
                                    cliper_breadcrumbs();
                                } ?>
                            </div>
                            <?php endif; ?>

                        <?php elseif( is_single() ): ?>

                            <div class="page-title">
                                <h1>
                                    <?php
                                        if ( 'portfolio' == get_post_type() ) {
                                            $title_text = cliper_get_option('portfolio_custom_title') ? cliper_get_option('portfolio_custom_title') : __( 'Work Details', 'cliper' );
                                            if ( '1' == cliper_get_option('enable_portfolio_custom_title' ) && !empty( $title_text ) ) {
                                                echo esc_html( $title_text );
                                            }else{
                                                wp_title( $sep = ' ');
                                            }
                                        }elseif ( 'product' == get_post_type() ) {
                                            $title_text = cliper_get_option('product_custom_title') ? cliper_get_option('product_custom_title') : __( 'Product Details', 'cliper' );
                                            if ( '1' == cliper_get_option('enable_product_custom_title' ) && !empty( $title_text ) ) {
                                                echo esc_html( $title_text );
                                            }else{
                                                wp_title( $sep = ' ');
                                            }
                                        }else{
                                            $title_text = cliper_get_option('post_custom_title') ? cliper_get_option('post_custom_title') : __( 'News Details', 'cliper' );
                                            if ( '1' == cliper_get_option('enable_post_custom_title' ) && !empty( $title_text ) ) {
                                                echo esc_html( $title_text );
                                            }else{
                                                wp_title( $sep = ' ');
                                            }
                                        }
                                    ?>
                                </h1>
                                
                                <?php if( '1' == cliper_get_option( 'show_post_breadcrumb', true ) ) : ?>
                                <div class="breadcumb">
                                    <?php if ( function_exists('cliper_breadcrumbs') ) {
                                        cliper_breadcrumbs();
                                    } ?>
                                </div>
                                <?php endif; ?>

                            </div>
                            <?php if ( '1' == cliper_get_option('enable_post_banner_top_meta' ) ) :?>
                            <div class="breadcumb">
                                <?php cliper_posted_on(); ?>
                            </div>
                            <?php endif; ?>

                            <?php if( get_post_type() === 'post' && '1' == cliper_get_option('enable_post_banner_author_thumb' ) ) : ?>

                                <?php
                                    global $post;
                                    $author_id   = $post->post_author;
                                    $user_id     = get_current_user_id();
                                    $usermeta    = get_user_meta( $user_id,'cliper_profile_options',true );
                                    $designation = isset( $usermeta['designation'] ) ? $usermeta['designation'] : '';
                                ?>
                                <div class="single__cliper-post-author">
                                    <div class="cliper-author-thumb__wrap">
                                        <a class="cliper-author-thumbnail" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID', $author_id ) ) ); ?>">
                                            <img src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'email', $author_id ) ) ); ?>" alt="<?php the_title_attribute( array('echo' => true)); ?>">
                                        </a>
                                    </div>
                                    <div class="signle__cliper-post-author__details">
                                        <a class="cliper-author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'display_name', $author_id ) ) ); ?>"><?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></a>
                                        <?php if( $designation ) : ?>
                                        <p class="author__desig"><?php echo esc_html( $designation ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                        <?php elseif( is_search() ): ?>

                            <div class="page-title">
                                <h1><?php esc_html_e( 'Search Results', 'cliper' ); ?></h1>
                                <p><?php  printf(__( 'Search Result For "%s"','cliper'), get_search_query() ) ?></p>
                            </div>
                            
                        <?php elseif(is_archive()): ?>
                            
                            <?php if ( isset($_GET['author_downloads'] ) && $_GET['author_downloads'] == 'true' ) :?>

                                <?php get_template_part( 'edd/author/author-download-top-meta' ); ?>
                                
                            <?php else: ?>

                                <div class="page-title">
                                    <h1>
                                        <?php the_archive_title(); ?>
                                    </h1>
                                </div>
                                <div class="breadcumb">
                                    <?php
                                        if (function_exists('cliper_breadcrumbs')) {
                                            cliper_breadcrumbs();
                                        }
                                    ?>
                                    <p>
                                        <?php the_archive_description(); ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                        <?php else: ?>

                            <div class="page-title">
                                <h1>
                                    <?php wp_title( $sep = ' '); ?>
                                </h1>
                            </div>
                            <div class="breadcumb">
                                <p>
                                    <?php bloginfo( 'description' ); ?>
                                </p>
                            </div>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <?php
                if ( 'post' === get_post_type() && is_single() && function_exists( 'cliper_post_banner_multimeta' ) && '1' == cliper_get_option('enable_post_banner_bottom_meta' ) ) {
                    cliper_post_banner_multimeta();
                }
            ?>
        </div>
    <?php
    }
}


/*------------------------------
    COMMENT FORM FIELD
-------------------------------*/
if ( !function_exists( 'cliper_comment_form_default_fields' ) ) {

    function cliper_comment_form_default_fields( $fields ) {
        global $aria_req;
        $commenter     = wp_get_current_commenter();
        $req           = get_option( 'require_name_email' );
        $aria_req      = ( $req ? " aria-required='true' " : '' );
        $required_text = ' ';
        $fields        = array(
            'author' => '<div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' placeholder="' . esc_attr__( 'Your Name *', 'cliper' ) . '">
                            </div>',
            'email'  => '<div class="col-sm-6">
                                <input type="email" name="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" ' . $aria_req . ' placeholder="' . esc_attr__( 'Your Email *', 'cliper' ) . '">
                            </div>
                        </div>
                    </div>'
        );
        return $fields;
    }
}
add_filter( 'comment_form_default_fields', 'cliper_comment_form_default_fields' );


/*-----------------------------------------
    OVERWRITE COMMENT FORM DEFAULT
-------------------------------------------*/
if ( !function_exists( 'cliper_comment_form_defaults' ) ) {

    function cliper_comment_form_defaults( $defaults ) {
        global $aria_req;
        $defaults = array(
            'class_form'           => 'cliper-comment-form',
            'title_reply'          => esc_html__( 'Leave A Comment', 'cliper' ),
            'comment_field'        => '<div class="form-group mb0">
                                    <textarea name="comment" placeholder="' . esc_attr__( 'Your Comment', 'cliper' ) . '" ' . $aria_req . ' rows="10"></textarea>
                                </div>',
            'comment_notes_before' => '',
            'submit_button'         => '<input name="submit" type="submit" id="submit" class="submit" value="'. esc_html__( 'Send Message', 'cliper' ).'"> <i class="fas fa-angle-right"></i>',
        );
        return $defaults;
    }
}
add_filter( 'comment_form_defaults', 'cliper_comment_form_defaults' );


/*------------------------------
    CUSTOM COMMENT
--------------------------------*/
if ( !function_exists('cliper_comment') ) {
    function cliper_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>

            <?php if( get_comment_type() == 'pingback' || get_comment_type() == 'trackback' ): ?>
        <li id="comment-<?php comment_ID() ?>" class="single-comment pingback-comment">

            <div class="comment-details">
                <div class="comment-meta">
                    <h4><?php comment_author_link(); ?></h4>
                    <a class="comment-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                        <?php printf( esc_html__('%1s','cliper'), get_comment_date() ); ?>
                    </a>
                </div>
                <div class="comment-content">
                    <?php wpautop( comment_text() ); ?>
                </div>
                <div class="comment-edit">
                    <?php  edit_comment_link( esc_html__( 'Edit Comment', 'cliper' ) ); ?>
                </div>
            </div>

            <?php endif; ?>

            <?php if( get_comment_type() == 'comment' ) : ?>
        <li id="comment-<?php comment_ID() ?>" class="single-comment">
            <div class="comment-details">
                <div class="comment-author">
                    <?php
                        $avatar_size = 100;
                        if ( $comment->comment_parent != '0' ) {
                            $avatar_size = 80; 
                        } 
                        echo get_avatar( $comment->comment_author_email,$avatar_size );
                    ?>
                </div>
                <div class="comment-meta">
                    <div class="comment-left-meta">
                        <h4 class="author-name"><?php comment_author_link(); ?></h4>
                        <a class="comment-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                            <?php printf( esc_html__('%1s','cliper'), get_comment_date() ); ?>
                        </a>
                    </div>
                </div>
                <div class="comment-content">
                    <?php wpautop( comment_text() ); ?>
                </div>
                <div class="comment-reply">
                    <?php
                        comment_reply_link( 
                            array_merge(
                                $args,
                                array(
                                    'depth'      => $depth, 
                                    'max_depth'  => $args['max_depth'],
                                    'reply_text' => '<i class="fa fa-reply"></i>'.esc_html__( 'Reply', 'cliper' ), 
                                )
                            )
                        );
                    ?>
                </div>
                <?php  if ( $comment->comment_approved == '0' ) : ?>
                <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.','cliper' ); ?></em><br/>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        <?php
    }
}

/*--------------------------
    POSTS PAGINATION
---------------------------*/
if ( !function_exists( 'cliper_pagination' ) ) {
    function cliper_pagination() {
        the_posts_pagination( array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="ti-arrow-left"></i>',
            'next_text'          => '<i class="ti-arrow-right"></i>',
            'type'               => 'list',
            'mid_size'           => 1,
        ) );
    }
}

/*------------------------
    POSTS PAGINATION CUSTOM
-------------------------*/
if ( !function_exists('cliper_custom_pagination') ) {
    function cliper_custom_pagination( $query = false ){

        global $wp_query;
        if ($query) {
            $temp_query = $wp_query;
            $wp_query   = $query;
        }

        /*Return early if there's only one page.*/
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
            return;
        }

        $big_data = 999999999;
        echo '<nav class="navigation pagination"><div class="nav-links">';
        echo paginate_links(array(
            'prev_text'          => '<i class="ti-arrow-left"></i>',
            'next_text'          => '<i class="ti-arrow-right"></i>',
            'screen_reader_text' => ' ',
            'mid_size'           => 1,
            'base'               => get_pagenum_link(1) . '%_%',
            'base'               => str_replace($big_data, '%#%', esc_url(get_pagenum_link($big_data))),
            'format'             => 'page/%#%',
            'current'            => max( 1, get_query_var('paged') ),
            'total'              => $wp_query->max_num_pages,
            'prev_next'          => true,
            'type'               => 'list',
        ));
        echo '</div></nav>';
    }
}

/*------------------------
POSTS NAVIGATION
--------------------------*/
if ( !function_exists( 'cliper_navigation' ) ) {
    function cliper_navigation() {
        the_posts_navigation( array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="ti ti-angle-double-left"></i> ' . esc_html__( 'Older posts', 'cliper' ),
            'next_text'          => esc_html__( 'Newer posts', 'cliper' ) . ' <i class="ti ti-angle-double-right"></i>',
        ) );
    }
}

/*------------------------
    SINGLE POST NAVIGATION
--------------------------*/
if ( !function_exists( 'cliper_single_navigation' ) ) {
    function cliper_single_navigation() {
        the_post_navigation( array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="ti ti-angle-double-left"></i> ' . esc_html__( 'Prev Post', 'cliper' ),
            'next_text'          => esc_html__( 'Next Post', 'cliper' ) . ' <i class="ti ti-angle-double-right"></i>',
        ) );
    }
}

/*----------------------
    SINGLE POST NAVIGATION
------------------------*/
if ( !function_exists('cliper_post_navigation') ) {
    function cliper_post_navigation(){
        global $post;
        $next_post = get_adjacent_post(false, '', false);
        $prev_post = get_adjacent_post(false, '', true);
        ?>
        <div class="single-post-navigation">

            <?php if( !empty($prev_post) ): ?>
            <div class="prev-post">
                <a href="<?php echo esc_url( get_permalink($prev_post->ID) ); ?>">
                    <div class="arrow-link">
                        <i class="fa fa-arrow-left"></i>
                    </div>
                    <div class="title-with-link">
                        <span><?php esc_html_e( 'Prev Post', 'cliper' ) ?></span>
                        <h3><?php echo esc_html( wp_trim_words( $prev_post->post_title, 4, '.' ) ); ?></h3>
                    </div>
                </a>
            </div>
            <?php endif; ?>

            <div class="single-post-navigation-center-grid">
                <a href="<?php echo esc_url( home_url('/') ) ?>"><i class="fa fa-th-large"></i></a>
            </div>

            <?php if( !empty($next_post) ): ?>
            <div class="next-post">
                <a href="<?php echo esc_url( get_permalink($next_post->ID) ); ?>">
                    <div class="title-with-link">
                        <span><?php esc_html_e( 'Next Post', 'cliper' ) ?></span>
                        <h3><?php echo esc_html( wp_trim_words( $next_post->post_title, 4, '.' ) ); ?></h3>
                    </div>
                    <div class="arrow-link">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div>
            <?php endif; ?>

        </div>
    <?php
    }
}

/*------------------------
    COMMENTS PAGINATION
-------------------------*/
if ( !function_exists( 'cliper_comments_pagination' ) ) {
    function cliper_comments_pagination() {
        the_comments_pagination( array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="ti-arrow-left"></i>',
            'next_text'          => '<i class="ti-arrow-right"></i>',
            'type'               => 'list',
            'mid_size'           => 1,
        ) );
    }
}

/*------------------------
    COMMENTS NAVIGATION
-------------------------*/
if ( !function_exists( 'cliper_comments_navigation' ) ) {
    function cliper_comments_navigation() {
        the_comments_navigation( array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="ti ti-angle-double-left"></i> ' . esc_html__( 'Older Comments', 'cliper' ),
            'next_text'          => esc_html__( 'Newer Comments', 'cliper' ) . ' <i class="ti ti-angle-double-right"></i>',
        ) );
    }
}

if ( !function_exists('cliper_related_posts_query') ) {
    /**
     * [cliper_related_posts_query for use in the loop, list 5 post titles related to first tag on current post]
     * @return [type] string
     */
    function cliper_related_posts_query(){

        global $post;
        $tags = wp_get_post_tags($post->ID);
        if ( $tags ) {
            $first_tag = $tags[0]->term_id;
            $args      = array(
                'tag__in'             => array( $first_tag ),
                'post__not_in'        => array( $post->ID ),
                'posts_per_page'      => 2,
                'ignore_sticky_posts' => 1
            );
            $related_query = new WP_Query($args); 
            if( $related_query->have_posts() ) { ?>
                <div class="related-post-warapper">
                    <h3><?php esc_html_e( 'Related Posts', 'cliper' ); ?></h3>
                    <div class="related-post">
                        <div class="row">
                            <?php                                    
                                while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="post__grid__layout__2 xs-mb50">
                                            <?php the_post_thumbnail(); ?>
												<div class="post-details <?php echo( has_post_thumbnail()? 'has__post__thumb' : '' ); ?> <?php if(has_post_thumbnail() ) { echo "have-img"; } else { 												 echo "have-not-img"; } ?>">
                                                <?php cliper_posted_on(); ?>
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <?php cliper_readmore_icon(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
    }
}

/*----------------------------------
    SINGLE POST / PAGES LINK PAGES
------------------------------------*/
if ( !function_exists( 'cliper_link_pages' ) ) {
    function cliper_link_pages() {
        wp_link_pages( array(
            'before'           => '<div class="page-links post-pagination"><p>' . esc_html__( 'Pages:', 'cliper' ) . '</p><ul><li>',
            'separator'        => '</li><li>',
            'after'            => '</li></ul></div>',
            'next_or_number'   => 'number',
            'nextpagelink'     => esc_html__( 'Next Page', 'cliper' ),
            'previouspagelink' => esc_html__( 'Prev Page', 'cliper' ),
        ) );
    }
}

/*----------------------------
    SEARCH FORM
------------------------------*/
if ( !function_exists('cliper_search_form') ) {
    function cliper_search_form(  $search_buttton=true, $is_button=true ) {
        ?>
        <div class="search-main-form">
            <form id="search-main-form" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="text" id="search" placeholder="<?php esc_attr_e('Search ...', 'cliper'); ?>" name="s">
                <?php if( $search_buttton == true ) : ?>
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                <?php endif; ?>
            </form>
            <?php if( $is_button==true ) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="home_btn"> <?php esc_html_e('Back to home Page', 'cliper'); ?> </a>
            <?php endif; ?>
        </div>
        <?php
    }
}

/*-------------------------------------
    SEARCH PAGE SEARCH FORM
-------------------------------------*/
if ( !function_exists('cliper_search_page_search_form') ) {
    function cliper_search_page_search_form() {
        ?>
        <div class="search-main-form">            
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" _lpchecked="1">
                <input type="text" name="s" class="form-control search-field" id="search" placeholder="<?php esc_attr_e('Enter here your search query', 'cliper'); ?>" value="<?php echo get_search_query(); ?>">
                <button type="submit" class="search-submit search_btn"> <?php esc_html_e('Search', 'cliper') ?> </button>
            </form>
        </div>
        <?php
    }
}

/*------------------------------
    POST PASSWORD FORM
-------------------------------*/
if ( !function_exists('cliper_password_form') ) {
    function cliper_password_form($form) {
    global $post;
    $label  =   'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $form   =   '<form class="protected-post-form" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
                    <span>'.esc_html__( "To view this protected post, enter the password below:", 'cliper' ).'</span>
                    <input name="post_password" id="' . $label . '" type="password"  placeholder="'.esc_attr__( "Enter Password", 'cliper' ).'">
                    <input type="submit" name="Submit" value="'.esc_attr__( "Submit",'cliper' ).'">
                </form>';
    return $form;
    }
}
add_filter( 'the_password_form', 'cliper_password_form' );

/*-------------------------------
    ADD CATEGORY NICENAMES IN BODY AND POST CLASS
--------------------------------*/
if ( !function_exists( 'cliper_post_class' ) ) {
    function cliper_post_class( $classes ) {

        global $post;
        if ( 'page' === get_post_type() ) {
            if ( !has_post_thumbnail() ) {
                $classes[] = 'no-post-thumbnail';
            }
        }

        if ( 'post' === get_post_type() ) {
            if ( !function_exists( 'post_like_count_and_social' ) ) {
                $classes[] = 'no-social-count';
            }

            if ( is_page_template( 'blog-classic.php' ) ) {
                $classes[] = 'blog-classic';
            }

            if ( is_single() ) {
                $classes[] = 'single-post-item';
            } else {
                $classes[] = 'single-post-item mb40';
            }
        }
        return $classes;
    }
}
add_filter( 'post_class', 'cliper_post_class' );

/*-------------------------------
    DAY LINK TO ARCHIVE PAGE
---------------------------------*/
if ( !function_exists( 'cliper_day_link' ) ) {
    function cliper_day_link() {
        $archive_year  = get_the_time( 'Y' );
        $archive_month = get_the_time( 'm' );
        $archive_day   = get_the_time( 'd' );
        echo get_day_link( $archive_year, $archive_month, $archive_day );
    }
}

/*--------------------------------
    GET COMMENT COUNT TEXT
----------------------------------*/
if ( !function_exists( 'cliper_comment_count_text' ) ) {
    function cliper_comment_count_text( $post_id ) {
        $comments_number = get_comments_number( $post_id );
        if ( $comments_number == 0 ) {
            $comment_text = esc_html__( 'No comment', 'cliper' );
        } elseif ( $comments_number == 1 ) {
            $comment_text = esc_html__( 'One comment', 'cliper' );
        } elseif ( $comments_number > 1 ) {
            $comment_text = $comments_number . esc_html__( ' Comments', 'cliper' );
        }
        echo esc_html( $comment_text );
    }
}

/*------------------------------------------
    GET POST TYPE ARRAY
--------------------------------------------*/
if ( !function_exists( 'cliper_get_elementor_post_array' ) ) {
    function cliper_get_elementor_post_array( $post_type = 'elementor_library' ) {
        $query = new WP_Query(
            array(
                'post_type'      => $post_type,
                'posts_per_page' => -1,
            )
        );
        $posts_array = $query->posts;
        if ( $posts_array ) {
            $post_title_array = wp_list_pluck( $posts_array, 'post_title', 'ID' );
        } else {
            $post_title_array['default'] = esc_html__( 'Default', 'cliper' );
        }
        return $post_title_array;
    }
}

/*--------------------------------------------------
    DROPDOWN CATEGORY
--------------------------------------------------*/
function cliper_get_terms_dropdown( $taxonomies, $args ) {
    $myterms = get_terms( $taxonomies, $args );
    $output  = "<div class='download__search__cats '><select name='download_cats'>";
    $output .= "<option value='all'>" . esc_html__( "All Categories", 'cliper' ) . "</option>";
    foreach ( $myterms as $term ) {
        $term_name = $term->name;
        $slug      = $term->slug;
        $output .= "<option value='" . $slug . "'>" . $term_name . "</option>";
    }
    $output .= "</select></div>";
    return $output;
}

/*-------------------------------------
    EXCERPT CUSTOM LENGTH
---------------------------------------*/
function cliper_excerpt_custom_lenth($value){
    if ( cliper_get_option( 'blog_excerpt_word' ) ) {
        $value = cliper_get_option( 'blog_excerpt_word' );
    }else{
        $value = 20;
    }
    return $value;
}
add_filter( 'excerpt_length', 'cliper_excerpt_custom_lenth' );

/**
 * Remove schema attributes from custom logo html
 *
 * @param string $html
 * @return string
 */
function cliper_remove_custom_logo_schema_attr( $html ) {
    return str_replace( array( 'itemprop="url"', 'itemprop="logo"' ), '', $html );
}
add_filter( 'get_custom_logo', 'cliper_remove_custom_logo_schema_attr' );


/**
 * Remove schema attributes from oembed iframe html
 *
 * @param string $html
 * @return string
 */
function cliper_remove_oembed_schema_attr( $return, $data, $url ) {
    if ( is_object( $data ) ) {
        $return = str_ireplace(
            array(
                'frameborder="0"',
                'scrolling="no"',
                'frameborder="no"',
            ),
            '',
            $return
        );
    }
    return $return;
}
add_filter( 'oembed_dataparse', 'cliper_remove_oembed_schema_attr', 10, 3 );

function cliper_remove_unwanted_attribute( $html, $url ) {

    if ( strpos( $url, 'google.com' ) !== false ) {
        $html = str_replace(
            array(
                'frameborder="0"',
                'scrolling="no"',
                'frameborder="no"',
                'marginheight="0"',
                'marginwidth="0"',
            ),
            '',
            $html
        );
    }

    return $html;
}
add_filter( 'embed_oembed_html', 'cliper_remove_unwanted_attribute', 10, 2 );


/**
 * cliper_move_comment_field_to_bottom() Remove cookie field and move comment field bottom.
 * @param  $fields array()
 * @return return comment form fields
 */
function cliper_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    unset( $fields['cookies'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'cliper_move_comment_field_to_bottom' );


/**
 * cliper_archive_count_span() This code filters the Archive widget to include the post count inside the link
 * @param  [type] $links
 * @return [type] $string 
 */
function cliper_archive_count_span( $links ) {
    $links = str_replace( '</a>&nbsp;(', ' <span>', $links );
    $links = str_replace( ')', '</span></a>', $links );
    return $links;
}
add_filter( 'get_archives_link', 'cliper_archive_count_span' );

function cliper_archive_dropdown_count_span( $links ) {
    $links = str_replace( '&nbsp;(', ' (', $links );
    $links = str_replace( '</span></a></option>', ')</option>', $links );
    return $links;
}
add_filter( 'get_archives_link', 'cliper_archive_dropdown_count_span' );


/**
 * cliper_category_count_span() category count show in a span.
 * @param  [type] $links
 * @return [type] $string
 */
function cliper_category_count_span($links) {
    $links = str_replace('</a> (', ' <span>', $links);
    $links = str_replace(')', '</span></a>', $links);
    return $links;
}
add_filter('wp_list_categories', 'cliper_category_count_span');

function cliper_category_dropdown_count_span($links) {
    $links = str_replace('&nbsp;(', ' <span>', $links);
    $links = str_replace(')</option>', '</span></option>', $links);
    return $links;
}
add_filter('wp_list_categories', 'cliper_category_dropdown_count_span');


/*---------------------------------
    CUSTOM CLASS IN CF7
----------------------------------*/
function cliper_custom_form_class_attr( $class ) {
    return $class;
}
add_filter( 'wpcf7_form_class_attr', 'cliper_custom_form_class_attr' );


/*---------------------------------
    REMOVE CF& UNWANTED P TAG.
----------------------------------*/
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

/*----------------------------------
    SUPPORT SVG UPLOAD
-----------------------------------*/
if ( !function_exists( 'cliper_mime_types' ) ) {
    function cliper_mime_types( $mimes ) {
        if ( '1' == cliper_get_option( 'enable_svg_upload', true ) ){
            $mimes['svg'] = 'image/svg+xml';
            $mimes['svgz'] = 'image/svg+xml';
        }
        return $mimes;
    }
    add_filter( 'upload_mimes', 'cliper_mime_types' );
}

function cliper_fix_mime_type_svg( $data = null, $file = null, $filename = null, $mimes = null ) {
    $ext = isset( $data['ext'] ) ? $data['ext'] : '';
    if ( strlen( $ext ) < 1 ) {
        $exploded = explode( '.', $filename );
        $ext      = strtolower( end( $exploded ) );
    }
    if ( $ext === 'svg' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svg';
    } elseif ( $ext === 'svgz' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svgz';
    }
    
    return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'cliper_fix_mime_type_svg', 75, 4 );

/*----------------------------------
    UPLOAD FILE SIZE LIMIT
-----------------------------------*/
if ( !function_exists( 'cliper_site_upload_size_limit' ) ) {
    function cliper_site_upload_size_limit( $size ) {

        // Set the upload size limit to 60 MB for users lacking the 'manage_options' capability.
        if ( ! current_user_can( 'manage_options' ) ) {
            // 60 MB.
            if ( '1' == cliper_get_option( 'custom_file_upload_size', false ) ) {
                $file_size = (int)cliper_get_option( 'file_upload_size', 256 );
                $size      = $file_size * 1024 * 1024;
            }
        }
        return $size;
    }
    add_filter( 'upload_size_limit', 'cliper_site_upload_size_limit', 20 );
}

/*----------------------------------
    ADDING MEMORY LIMIT
-----------------------------------*/
if ( !function_exists( 'cliper_site_memory_limit' ) ) {
    function cliper_site_memory_limit( $size ) {

        if ( ! current_user_can( 'manage_options' ) ) {
            if ( '1' == cliper_get_option( 'custom_memory_limit_size', false ) ) {
                $size = cliper_get_option( 'memory_limit' );
            }
        }
        return $size;
    }
    add_filter( 'admin_memory_limit', 'cliper_site_memory_limit' );
}

/*---------------------------------
    UNREGISER POST TYPE
----------------------------------*/
if ( !function_exists( 'cliper_remove_post_types' ) ) {
    function cliper_remove_post_types(){
        if ( '1' == cliper_get_option( 'exclude_post_type', false ) && '1' == cliper_get_option( 'exclude_portfolio', false ) ) {
            unregister_post_type( 'portfolio' );
        }
    }
    add_action( 'init', 'cliper_remove_post_types' );
}

function cliper_kses( $raw ) {
    $allowed_tags = array(
        'a' => array(
            'class'  => array(),
            'href'   => array(),
            'rel'    => array(),
            'title'  => array(),
            'target' => array(),
        ),
        'option' => array(
            'value' => array(),
        ),
        'abbr' => array(
            'title' => array(),
        ),
        'b'          => array(),
        'blockquote' => array(
            'cite' => array(),
        ),
        'cite' => array(
            'title' => array(),
        ),
        'code' => array(),
        'del'  => array(
            'datetime' => array(),
            'title'    => array(),
        ),
        'dd'  => array(),
        'div' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'dl' => array(),
        'dt' => array(),
        'em' => array(),
        'h1' => array(),
        'h2' => array(),
        'h3' => array(),
        'h4' => array(),
        'h5' => array(),
        'h6' => array(),
        'i'  => array(
            'class' => array(),
        ),
        'img' => array(
            'alt'    => array(),
            'class'  => array(),
            'height' => array(),
            'src'    => array(),
            'width'  => array(),
        ),
        'li' => array(
            'class' => array(),
        ),
        'ol' => array(
            'class' => array(),
        ),
        'p' => array(
            'class' => array(),
        ),
        'q' => array(
            'cite'  => array(),
            'title' => array(),
        ),
        'span' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'iframe' => array(
            'width'       => array(),
            'height'      => array(),
            'scrolling'   => array(),
            'frameborder' => array(),
            'allow'       => array(),
            'src'         => array(),
        ),
        'strike'                        => array(),
        'br'                            => array(),
        'small'                         => array(),
        'strong'                        => array(),
        'data-wow-duration'             => array(),
        'data-wow-delay'                => array(),
        'data-wallpaper-options'        => array(),
        'data-stellar-background-ratio' => array(),
        'ul'                            => array(
            'class' => array(),
        ),
    );
    if ( function_exists( 'wp_kses' ) ) { // WP is here
        $allowed = wp_kses( $raw, $allowed_tags );
    } else {
        $allowed = $raw;
    }
    return $allowed;
}