<?php

/*------------------------------
    HEADER BACKGROUND
-------------------------------*/
if(!function_exists('cliper_header_background_image_load' )){
    function cliper_header_background_image_load(){

        if ( is_page() ) {
            /*----------------------------
                PAGE META DATA
            -----------------------------*/
            $page_meta_array = cliper_metabox_value('_cliper_page_metabox' );

            /*---------------------------
                PAGE HEADER META
            -----------------------------*/
            $enable_header_styling  = isset( $page_meta_array['enable_header_styling'] ) ? $page_meta_array['enable_header_styling'] : false;
            $menu_align              = isset( $page_meta_array['menu_align'] ) ? $page_meta_array['menu_align'] : CLIPER_HEADER_ALIGN;
            $menu_color              = isset( $page_meta_array['menu_color'] ) ? $page_meta_array['menu_color'] : '##131313';
            $menu_hover              = isset( $page_meta_array['menu_hover'] ) ? $page_meta_array['menu_hover'] : '#438FF9';
            $menu_sticky_color       = isset( $page_meta_array['menu_sticky_color'] ) ? $page_meta_array['menu_sticky_color'] : '#00274e';
            $menu_sticky_hover_color = isset( $page_meta_array['menu_sticky_hover_color'] ) ? $page_meta_array['menu_sticky_hover_color'] : '#438FF9';

            /*---------------------------
                MENU DROPDOWN
            ----------------------------*/
            $menu_dropdown_color            = isset( $page_meta_array['menu_dropdown_color'] ) ? $page_meta_array['menu_dropdown_color'] : '##8B8B8B';
            $menu_dropdown_hover_color      = isset( $page_meta_array['menu_dropdown_hover_color'] ) ? $page_meta_array['menu_dropdown_hover_color'] : '#438FF9';
            $menu_dropdown_hover_background = isset( $page_meta_array['menu_dropdown_hover_background'] ) ? $page_meta_array['menu_dropdown_hover_background'] : '#E3EEFE';
            $menu_border_color              = isset( $page_meta_array['menu_border_color'] ) ? $page_meta_array['menu_border_color'] : 'rgba(255,255,255,0.15)';

            /* ---------------------------
                MENU ITEM ANIMATED BORDER
            -----------------------------*/
            $enable_menu_item_animated_border          = isset( $page_meta_array['enable_menu_item_animated_border'] ) ? $page_meta_array['enable_menu_item_animated_border'] : false;
            $enable_dropdown_menu_item_animated_border = isset( $page_meta_array['enable_dropdown_menu_item_animated_border'] ) ? $page_meta_array['enable_dropdown_menu_item_animated_border'] : false;

            /*---------------------------
                PAGE BARNER META
            -----------------------------*/
            $enable_banner_overlay  = isset( $page_meta_array['enable_overlay'] ) ? $page_meta_array['enable_overlay'] : false;
            $banner_overlay_opacity = isset( $page_meta_array['banner_overlay_opacity'] ) ? $page_meta_array['banner_overlay_opacity'] : '0.70';

            /*---------------------------
                PAGE FOOTER META
            -----------------------------*/
            $enable_footer_styling = isset( $page_meta_array['enable_footer_styling'] ) ? $page_meta_array['enable_footer_styling'] : false;
            $footer_overlay_opacity = isset( $page_meta_array['footer_overlay_opacity'] ) ? $page_meta_array['footer_overlay_opacity'] : '01';

            /*---------------------------
                PAGE CUSTOM CSS META
            -----------------------------*/
            $page_cs_css = isset( $page_meta_array['page_cs_css'] ) ? $page_meta_array['page_cs_css'] : '';
        }

        $custom_css = "";

        /*--------------------------
            HEADER BACKGROUND
        ---------------------------*/
        
        
        $breadcrumb_bg = cliper_get_option('breadcrumb_bg');
        $breadcrumb_bg_image = isset($breadcrumb_bg['background-image']['url']) && !empty($breadcrumb_bg['background-image']['url']) ? $breadcrumb_bg['background-image']['url'] : '';
        $breadcrumb_bg_image_size = isset($breadcrumb_bg['background-size']) && !empty($breadcrumb_bg['background-size']) ? $breadcrumb_bg['background-size'] : 'cover';
        $breadcrumb_bg_image_position = isset($breadcrumb_bg['background-position']) && !empty($breadcrumb_bg['background-position']) ? $breadcrumb_bg['background-position'] : 'center center';
        $breadcrumb_bg_image_repeat = isset($breadcrumb_bg['background-repeat']) && !empty($breadcrumb_bg['background-repeat']) ? $breadcrumb_bg['background-repeat'] : 'no-repeat';
        $breadcrumb_bg_image_attachment = isset($breadcrumb_bg['background-attachment']) && !empty($breadcrumb_bg['background-attachment']) ? $breadcrumb_bg['background-attachment'] : 'scroll';


        if ( $breadcrumb_bg_image ) {
            
            $custom_css .= "
                .banner-area-bg {
                    background-image: url($breadcrumb_bg_image );
                }
            ";
        
        }
        

        /*--------------------------
            HEADER TEXT COLOR
        ---------------------------*/
        $header_text_color = cliper_get_option( 'header_textcolor', '#ffffff' );
        
        if( !empty( $header_text_color ) && isset( $header_text_color ) ){            
            $header_text_color = $header_text_color;
        }else{
            $header_text_color = get_header_textcolor();
            $header_text_color = '#'.$header_text_color;
        }
        $custom_css .="
            .banner-area{
                text-align:".cliper_get_option( 'header_text_align', 'center' ).";
            }
            .page-title h1,
            .page-title,
            .breadcumb,
            .breadcumb a,
            .breadcumb a span{
                color:".$header_text_color.";
            }
        ";

        /*---------------------------
            TEXT LOGO COLOR
        -----------------------------*/
        $custom_css .="
            .navbar-header h3 a{
                color:".cliper_get_option( 'logo_color', '#1A152E' ).";
            }
            .is-sticky .navbar-header h3 a{
                color:".cliper_get_option( 'sticky_logo_color', '#1A152E' ).";
            }
        ";

        /*-----------------------------
            TEXT LOGO COLOR ON mobile
        ------------------------------*/
        $custom_css .="
            @media (max-width: 991px) and (min-width: 768px){
                .navbar-header h3 a {
                    color:".cliper_get_option( 'mobile_logo_color', '#1A152E' ).";
                }
                .is-sticky .navbar-header h3 a {
                    color:".cliper_get_option( 'mobile_sticky_logo_color', '#1A152E' ).";
                }
            }
            @media only screen and (max-width: 767px){
                .navbar-header h3 a {
                    color:".cliper_get_option( 'mobile_logo_color', '#1A152E' ).";
                }
                .is-sticky .navbar-header h3 a {
                    color:".cliper_get_option( 'mobile_sticky_logo_color', '#1A152E' ).";
                }
            }
        ";


        /*-------------------------------
            MENU ALIGN
        --------------------------------*/
        if ( is_page() && $enable_header_styling == true ) {
            if ( $menu_align == 'left' ) {
                $custom_css .="
                    #cliper-main-navigation{
                        margin-left:inherit;
                    }
                ";
            }
            if ( $menu_align == 'center' ) {
                $custom_css .="
                    #cliper-main-navigation{
                        text-align:". cliper_meta_data( $menu_align ) .";
                    }
                ";
            }
            if ( $menu_align == 'right' ) {
                $custom_css .="
                    #cliper-main-navigation{
                        margin-right:inherit;
                    }
                ";
            }
        }else{
            if ( cliper_get_option( 'menu_align', CLIPER_HEADER_ALIGN ) == 'left' ) {
                $custom_css .="
                    #cliper-main-navigation{
                        margin-left:inherit;
                    }
                ";
            }
            if ( cliper_get_option( 'menu_align', CLIPER_HEADER_ALIGN ) == 'center' ) {
                $custom_css .="
                    #cliper-main-navigation{
                        text-align:".cliper_get_option( 'menu_align' ).";
                    }
                ";
            }
            if ( cliper_get_option( 'menu_align', CLIPER_HEADER_ALIGN ) == 'right' ) {
                $custom_css .="
                    #cliper-main-navigation{
                        margin-right:inherit;
                    }
                ";
            }
        }

        /*--------------------------------
            MENU BACKGROUND OPACITY
        ---------------------------------*/
        $custom_css .="
            .mainnav-area-bg {
                opacity: .".cliper_get_option( 'menu_bg_opacity', '0' ).";
            }
        ";

        /*-------------------------------
            STICKY MENU BACKGROUND OPACITY
        --------------------------------*/
        $custom_css .="
			.is-sticky .mainnav-area-bg {
			 	opacity: .".cliper_get_option( 'sticky_menu_bg_opacity', '1' ).";
			}
        ";

        /*-------------------------------
            MENU COLORS
        --------------------------------*/
        if ( is_page() && $enable_header_styling == true ) {
            // Menu Color        
            $custom_css .="
                ul#cliper-nav li a {
                    color: ". cliper_meta_data( $menu_color ) .";
                }
            ";

            // Sticky Menu Color        
            $custom_css .="
                .is-sticky ul#cliper-nav li a,
                ul#cliper-nav li li a {
                    color: ". cliper_meta_data( $menu_sticky_color ) .";
                }
            ";

            // Menu Hover Color
            $custom_css .="
                ul#cliper-nav li a:hover,
                ul#cliper-nav li.active > a,
                ul#cliper-nav li.current-menu-parent > a,
                ul#cliper-nav li.current-menu-item > a,
                ul#cliper-nav li.hover > a,
                ul#cliper-nav li:hover > a{
                    color: ". cliper_meta_data( $menu_hover ) .";
                }
            ";

            // Sticky Menu Hover Color
            $custom_css .="
                .is-sticky ul#cliper-nav li > a:hover,
                .is-sticky ul#cliper-nav > li:hover > a,
                .is-sticky ul#cliper-nav li ul li > a:hover,
                .is-sticky ul#cliper-nav li.active > a,
                .is-sticky ul#cliper-nav li.hover > a,
                .is-sticky ul#cliper-nav li.current-menu-parent > a,
                .is-sticky ul#cliper-nav li.current-menu-item > a {
                    color: ". cliper_meta_data( $menu_sticky_hover_color ) .";
                }
            ";

            // Dorpdown Color
            $custom_css.="
                ul#cliper-nav li li a,
                .is-sticky ul#cliper-nav li li a{
                    color: ". cliper_meta_data( $menu_dropdown_color ) ." !important;
                }
            ";
            $custom_css.="
                ul#cliper-nav li ul li.hover > a,
                ul#cliper-nav li.has-sub li.current-menu-item > a,
                .is-sticky ul#cliper-nav li ul li.hover > a{
                    color: ". cliper_meta_data( $menu_dropdown_hover_color ) ." !important;
                    background: ". cliper_meta_data( $menu_dropdown_hover_background ) ." !important;
                }
            ";
        }else{
            // Menu Color        
            $custom_css .="
    			ul#cliper-nav li a {
    				color: ".cliper_get_option( 'menu_color', '#131313' ).";
    			}
            ";

            // Sticky Menu Color        
            $custom_css .="
                .is-sticky ul#cliper-nav li a,
                ul#cliper-nav li li a {
                    color: ".cliper_get_option( 'menu_sticky_color', '#131313' ).";
                }
            ";

            // Menu Hover Color
            $custom_css .="
                ul#cliper-nav li a:hover,
                ul#cliper-nav li.active > a,
                ul#cliper-nav li.current-menu-parent > a,
                ul#cliper-nav li.current-menu-item > a,
                ul#cliper-nav li.hover > a,
                ul#cliper-nav li:hover > a{
                    color: ".cliper_get_option( 'menu_hover', '#438FF9' ).";
                }
            ";

            // Sticky Menu Hover Color
            $custom_css .="
                .is-sticky ul#cliper-nav li > a:hover,
                .is-sticky ul#cliper-nav > li:hover > a,
                .is-sticky ul#cliper-nav li ul li > a:hover,
                .is-sticky ul#cliper-nav li.active > a,
                .is-sticky ul#cliper-nav li.hover > a,
                .is-sticky ul#cliper-nav li.current-menu-parent > a,
                .is-sticky ul#cliper-nav li.current-menu-item > a {
                    color: ".cliper_get_option( 'menu_sticky_hover_color', '#438FF9' ).";
                }
            ";

            // Dropdown Colors
            $custom_css.="
                ul#cliper-nav li li a,
                .is-sticky ul#cliper-nav li li a{
                    color: ".cliper_get_option( 'menu_dropdown_color', '#8B8B8B' )." !important;
                }
            ";
            $custom_css.="
                ul#cliper-nav li ul li.hover > a,
                ul#cliper-nav li.has-sub li.current-menu-item > a,
                .is-sticky ul#cliper-nav li ul li.hover > a{
                    color: ".cliper_get_option( 'menu_dropdown_hover_color', '#438FF9' )." !important;
                    background: ".cliper_get_option( 'menu_dropdown_hover_background', '#E3EEFE' )." !important;
                }
            ";
        }
        
        /*-------------------------------
            MENU ITEM ANIMATED BORDER
        --------------------------------*/
        if( is_page() && '1' == cliper_meta_data( $enable_menu_item_animated_border, '0' ) ){

            $custom_css .="
                @media only screen and (min-width: 992px) {            
                    ul#cliper-nav>li.menu-item .wee {
                        display: block;
                    }
                }
            ";
        }elseif( '1' == cliper_get_option( 'enable_menu_item_animated_border', '0' ) ){

            $custom_css .="
                @media only screen and (min-width: 992px) {            
                    ul#cliper-nav>li.menu-item .wee {
                        display: block;
                    }
                }
            ";
        }

        /*-------------------------------
            MENU DROPDOWN ITEM ANIMATED BORDER
        --------------------------------*/
        if( is_page() && '1' == cliper_meta_data( $enable_dropdown_menu_item_animated_border, '0' ) ){

            $custom_css .="
                @media only screen and (min-width: 992px) {
                    ul#cliper-nav li ul li {
                        margin-bottom: 20px;
                        padding-left: 10px;
                        display: block;
                    }
                
                    ul#cliper-nav li ul li:last-child {
                        margin-bottom: 0;
                    }
                    .stellarnav ul li.mega>ul>li ul li a,
                    ul#cliper-nav li ul li a,
                    .is-sticky ul#cliper-nav li ul li a {
                        position: relative;
                        padding: 0;
                        display: inline-block;
                    }
                
                    .stellarnav ul li.mega>ul>li ul li a:after,
                    ul#cliper-nav li ul li a:after {
                        content: '';
                        width: 0%;
                        height: 1px;
                        background: #438FF9;
                        position: absolute;
                        right: 0;
                        bottom: 0;
                        transition: 0.5s;
                        transform: rotate(0) !important;
                    }
                    
                    .stellarnav ul li.mega>ul>li ul li a:hover:after,
                    ul#cliper-nav li ul li a:hover:after,
                    ul#cliper-nav li ul li:hover > a:after {
                        width: 100%;
                        left: 0;
                        right: auto;
                    }
                }
            ";
        }elseif( '1' == cliper_get_option( 'enable_dropdown_menu_item_animated_border', '0' ) ){

            $custom_css .="
                @media only screen and (min-width: 992px) {
                    ul#cliper-nav li ul li {
                        margin-bottom: 20px;
                        padding-left: 10px;
                        display: block;
                    }
                
                    ul#cliper-nav li ul li:last-child {
                        margin-bottom: 0;
                    }
                
                    .stellarnav ul li.mega>ul>li ul li a,
                    ul#cliper-nav li ul li a,
                    .is-sticky ul#cliper-nav li ul li a {
                        position: relative;
                        padding: 0;
                        display: inline-block;
                    }
                    .stellarnav ul li.mega>ul>li ul li a:after,
                    ul#cliper-nav li ul li a:after {
                        content: '';
                        width: 0%;
                        height: 1px;
                        background: #438FF9;
                        position: absolute;
                        right: 0;
                        bottom: 0;
                        transition: 0.5s;
                        transform: rotate(0) !important;
                    }
                    .stellarnav ul li.mega>ul>li ul li a:hover:after,
                    ul#cliper-nav li ul li a:hover:after,
                    ul#cliper-nav li ul li:hover > a:after {
                        width: 100%;
                        left: 0;
                        right: auto;
                        transform: rotate(0);
                    }
                }
            ";
        }
        
        /*-------------------------------
            MENU BOTTOM AREA BORDER COLOR
        --------------------------------*/
        $custom_css .="
            .mainnav-area{
                border-color:".cliper_get_option( 'menu_border_color', 'rgba(255, 255, 255, 0)' ).";
            }
        ";

        /*-------------------------------
            mobile mobile MENU STYLE
        --------------------------------*/

        if( 'offcanvas' == cliper_get_option( 'mobile_menu_style', 'static' ) ){

            $custom_css .="
                @media only screen and (max-width: 992px) {
                    #cliper-main-navigation {
                        display: none;
                    }
                }
            ";
        }
        
        $custom_css .="
            @media only screen and (max-width: 991px) {
                .mainnav-area{
                    border-color:".cliper_get_option( 'mobile_menu_border_color','rgba(255, 255, 255, 0.15)' ).";
                }
                .mainnav-area-bg {
                    opacity: .".cliper_get_option( 'mobile_menu_bg_opacity', '1' ).";
                }
                .is-sticky .mainnav-area-bg {
                    opacity: .".cliper_get_option( 'mobile_menu_sticky_bg_opacity', '1' ).";
                }

                .menu-toggle.full {
                    color: ".cliper_get_option( 'mobile_menu_hamburger_color', '#1A152E' )." !important;
                    border-color:".cliper_get_option( 'mobile_menu_hamburger_color', '#1A152E' ).";
                }
                .line {
                    stroke: ".cliper_get_option( 'mobile_menu_hamburger_color', '#1A152E' ).";
                }

                .is-sticky .menu-toggle.full {
                    color: ".cliper_get_option( 'mobile_sticky_menu_hamburger_color', '#1A152E' ).";
                    border-color: ".cliper_get_option( 'mobile_sticky_menu_hamburger_color', '#1A152E' ).";
                }
                .is-sticky .line {
                    stroke: ".cliper_get_option( 'mobile_sticky_menu_hamburger_color', '#1A152E' ).";
                }
                ul#cliper-nav li a,
                ul#cliper-nav li li a,
                .is-sticky ul#cliper-nav li a,
                .is-sticky ul#cliper-nav li li a {
                    color: ".cliper_get_option( 'mobile_menu_color', '#00274e' )." !important;
                }

                ul#cliper-nav li.has-sub.open > a,
                ul#cliper-nav > li > a:hover,
                ul#cliper-nav li.active > a,
                ul#cliper-nav li.current-menu-item > a,
                ul#cliper-nav li.open.menu-item-has-children > a {
                    background: ".cliper_get_option( 'mobile_menu_hover_background', '#ffffff' )." !important;
                    color: ".cliper_get_option( 'mobile_menu_hover', '#438FF9' )." !important;
                }
            }
        ";

        /*-------------------------------
            FOOTER BACKGROUND & OVERLAY
        --------------------------------*/        
        if ( is_page() && !empty( $footer_overlay_opacity ) && $enable_footer_styling == true ) {
            $custom_css.="
                .footer-area-bg:after{
                    opacity:".cliper_meta_data( $footer_overlay_opacity )." !important;
                }
            ";
        }else{
            $custom_css.="
                .footer-area-bg:after{
                    opacity:".cliper_get_option( 'footer_overlay_opacity', 0.5 ).";
                }
            ";
        }

        /*---------------------------------
            SINGLE BLOG POST DROPCAPS
        ----------------------------------*/
        if ( '1' == cliper_get_option( 'show_dropcaps', false ) ) {

            $custom_css.="
                .single .format-standard .post-content > p:first-of-type {
                    overflow: hidden;
                }

                .single .format-standard .post-content > p:first-of-type::first-letter {
                    color: #438FF9;
                    float: left;
                    font-size: 90px;
                    font-weight: 600;
                    margin-right: 10px;
                    line-height: 1;
                    overflow: hidden;
                    clear: both;
                }
            ";
        }

        /*----------------------------------
            CSS ALL DEVICE
        -----------------------------------*/
        if( cliper_get_option( 'custom_css' ) ){
            $custom_css .= cliper_get_option( 'custom_css' );
        }

        /*----------------------------------
            CSS IPAD DEVICE
        -----------------------------------*/
        if( cliper_get_option( 'custom_css_ipad' ) ){
            $custom_css.="
                @media (min-width: 1024px) and (max-width: 1400px) {
                    ".cliper_get_option( 'custom_css_ipad' )."
                }
            ";
        }

        /*----------------------------------
            CSS TABLET DEVICE
        -----------------------------------*/
        if( cliper_get_option( 'custom_css_tablet' ) ){
            $custom_css.="
                @media (min-width: 768px) and (max-width: 991px) {
                    ".cliper_get_option( 'custom_css_tablet' )."
                }
            ";
        }

        /*----------------------------------
            CSS mobile DEVICE
        -----------------------------------*/
        if( cliper_get_option( 'custom_css_mobile' ) ){
            $custom_css.="
                @media only screen and (max-width: 767px) {
                    ".cliper_get_option( 'custom_css_mobile' )."
                }
            ";
        }

        /*----------------------------------
            PAGE CUSTOM CSS
        -----------------------------------*/
        if ( is_page() ) {
            $custom_css .= cliper_meta_data( $page_cs_css );
        }

        /*----------------------------------
            CSS OUTPUT STYLE
        -----------------------------------*/
        wp_add_inline_style( 'cliper-main-style', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'cliper_header_background_image_load' );