(function ($) {
    jQuery(document).on('ready', function ($) {
        "use strict";

        /*---------------------------
            SMOOTH SCROLL
        -----------------------------*/
        $('ul#cliper-nav li a[href^="#"]').on('click', function (event) {
            var id = $(this).attr("href");
            var offset = 60;
            var target = $(id).offset().top - offset;
            $('html, body').animate({
                scrollTop: target
            }, 1500, "easeInOutExpo");
            event.preventDefault();
        });
        
        /*---------------------------
            MENU ALIGN CLASS
        ----------------------------*/
        var Body_Class        = $('body');
        var Menu_Has_Children = $('.menu-item-has-children');
        var window_width      = $(window).width();

        if ( window_width < 992 ) {
            Body_Class.addClass('menu__mobile__style');
        }else{
            Body_Class.removeClass('menu__mobile__style');
        }

        if ( window_width < 1200 ) {
            Menu_Has_Children.addClass('drop-left');
        }else{
            Menu_Has_Children.removeClass('drop-left');
        }

        $(window).on( 'resize', function () {
            var window_width = $(window).width();

            if ( window_width < 992 ) {
                Body_Class.addClass('menu__mobile__style');
            }else{
                Body_Class.removeClass('menu__mobile__style');
            }

            if ( window_width < 1200 ) {
                Menu_Has_Children.addClass('drop-left');
            }else{
                Menu_Has_Children.removeClass('drop-left');
            }
        });
        var Menu_Last_Child   = $('ul#cliper-nav > li:last-child.menu-item-has-children');
        Menu_Last_Child.addClass('drop-left');

        /*----------------------------
            mobile & DROPDOWN MENU
        ------------------------------*/
        var style    = 'center';
        var contact  = '#';
        var location = '#';
        
        if(typeof mobile_menu_scripts !== 'undefined' ){
            if ( typeof mobile_menu_scripts.style != 'undefined' ){
                style = mobile_menu_scripts.style;
            }
            if ( typeof mobile_menu_scripts.contact != 'undefined' ){
                contact = mobile_menu_scripts.contact;
            }
            if ( typeof mobile_menu_scripts.location != 'undefined' ){
                location = mobile_menu_scripts.location;
            }
        }
        jQuery('.stellarnav').stellarNav({
            theme        : 'cliper-light-nav',
            breakpoint   : 992,
            menuLabel    : '',
            sticky       : false,
            position     : style,
            openingSpeed : 250,
            closingDelay : 250,
            showArrows   : true,
            phoneBtn     : contact,
            phoneLabel   : 'Call Us',
            locationBtn  : location,
            locationLabel: 'Location',
            closeBtn     : false,
            closeLabel   : 'Close',
            mobileMode   : false,
            scrollbarFix : false
        });

        /*-----------------------------
            MENU HAMBERGER ICON
        ------------------------------*/
        var hamburger = $('.navifation-top-area svg');
        $('a.menu-toggle').on('click', function () {
            var menuclass = $('#cliper-main-navigation').attr('class');
            if ('stellarnav cliper-light-nav mobile active' == menuclass || 'stellarnav cliper-light-nav left mobile active' == menuclass || 'stellarnav cliper-light-nav right mobile active' == menuclass) {
                hamburger.addClass('active');
            }else if ('stellarnav cliper-light-nav mobile' == menuclass || 'stellarnav cliper-light-nav left mobile' == menuclass || 'stellarnav cliper-light-nav right mobile' == menuclass) {
                hamburger.removeClass('active');
            }
            return false;
        });

        var hamber_toggle_icon = $('.humberger__menu__toggle');
        $('a.menu-toggle').append(hamber_toggle_icon);

        $('a.close-menu').on('click',function(){
            hamburger.removeClass('active');
            return false;
        });

        $(window).on('resize', function () {
            var menuclass = $('#cliper-main-navigation').attr('class');
            if ('stellarnav cliper-light-nav cliper-desktop-nav' == menuclass || 'stellarnav cliper-light-nav left cliper-desktop-nav' == menuclass || 'stellarnav cliper-light-nav right cliper-desktop-nav' == menuclass ) {
                hamburger.removeClass('active');
            }
        });

        if ( window_width > 992 ) {
            /*-----------------------------
                MAGIC LINE MENU
            ------------------------------*/
            var currentItem = $('ul#cliper-nav > li.current-menu-item');
            if ( currentItem.length > 0 ) {
                currentItem.append('<div class="wee"></div>');
                var $thisnav = currentItem.offset().left;
                $('ul#cliper-nav > li.menu-item').on({
                    mouseenter: function() {
                        var $left = $(this).offset().left - $thisnav;
                        var $width = $(this).outerWidth();
                        var $start = 0;
                        $('.wee').css({
                            'left': $left,
                            'width': $width
                        });
                    },
                    mouseleave: function() {
                        var $initwidth = currentItem.width();
                        $('.wee').css({
                            'left': '0',
                            'width': $initwidth
                        });
                    },
                });
            }
        }

        /*----------------------------------
            mobile MENU
        -----------------------------------*/
        var offcanvas_content_area = $( '.offcanvas__content__main__wrap' );
        var offcanvas_open_switch  = $( '.offcanvas__content__open__trigger' );
        var offcanvas_close_switch = $( '.offcanvas__content__close__trigger' );
        offcanvas_open_switch.on('click', function () {
            offcanvas_content_area.removeClass('inactive').addClass('active');
        });
        offcanvas_close_switch.on('click', function () {
            offcanvas_content_area.removeClass('active').addClass('inactive');
        });

        var offcanvas_menu_area         = $( '.offcanvas__mobile__menu__main__wrapper' );
        var offcanvas_menu_open_switch  = $( '.offcanvas__menu__open__trigger' );
        var offcanvas_menu_close_switch = $( '.offcanvas__menu__close__trigger' );
        offcanvas_menu_open_switch.on('click', function () {
            offcanvas_menu_area.removeClass('inactive').addClass('active');
        });
        offcanvas_menu_close_switch.on('click', function () {
            offcanvas_menu_area.removeClass('active').addClass('inactive');
        });
        
        /*----------------------------------
            OFFCANVAS MENU
        -----------------------------------*/
        var offCanvasNav = $('.offcanvas__navigation'),
            SubMenu = offCanvasNav.find('.sub-menu');

        /*ADD TOGGLE BUTTON WITH OFF CANVAS SUB MENU*/
        SubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

        /*CLOSE OFF CANVAS SUB MENU*/
        SubMenu.slideUp();

        /*CATEGORY SUB MENU TOGGLE*/
        offCanvasNav.on('click', 'li a, li .menu-expand', function (e) {
            var $this = $(this);
            if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length) {
                    $this.parent('li').removeClass('active');
                    $this.siblings('ul').slideUp();
                } else {
                    $this.parent('li').addClass('active');
                    $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                    $this.closest('li').siblings('li').find('ul:visible').slideUp();
                    $this.siblings('ul').slideDown();
                }
            }
        });


        /*----------------------------
            CENTER LOGO MENU
        -----------------------------*/
        var expanding_toggle   = $('.expanding__nav__toggle'),
        close_expanding_toggle = $('.colse__expanding__nav__toggle'),
        body_class             = $('body'),
        add_expand_class       = 'menu__expand';
        expanding_toggle.on('click',function(e){
            body_class.addClass(add_expand_class);
            e.preventDefault();
        });
        close_expanding_toggle.on('click',function(e){
            body_class.removeClass(add_expand_class);
            e.preventDefault();
        });

        /*----------------------------
            LANGUAGE SELECTOR
        -----------------------------*/
        var language_changer = $('.language-button');
        language_changer.on('click',function(){
            $('.language__list').slideToggle();
        });

        /*-----------------------------
            SEARCH FORM
        ------------------------------*/
        var searchForm = $(document).find('#search-main-form-style-one').attr('class');
        if ( 'search-main-form-style-one' == searchForm ) {            
            $('.search-button').on('click',function() {
                $('body').addClass('mode-search');
                $('.search-main-form-style-one input[type="text"]').focus();
                $(this).addClass('close-search');
                return false;
            });
            $('.search-close').on('click',function() {
                $('body').removeClass('mode-search');
                $('.search-button').removeClass('close-search');
                return false;
            });
        }

        /*----------------------------
            HEADER SIDEBAR
        -----------------------------*/
        $('body').css('overflow-x','hidden');
        $('a.menu-button').on('click',function(){
            $('.header-widget-area').toggleClass('open_widget');
            $('.open_widget .close-header-widget').on('click',function(){
                $('.header-widget-area').removeClass('open_widget');
            });
            $(window).on('scroll',function(){
                $('.header-widget-area').removeClass('open_widget');
            });
            return false;
        });

        /*----------------------------
            SCROLL TO TOP
        ------------------------------*/
        $(window).on('scroll', function () {
            var $totalHeight = $(window).scrollTop();
            var $scrolltop = $(".scrolltop");
            if ($totalHeight > 300) {
                $(".scrolltop").fadeIn();
            } else {
                $(".scrolltop").fadeOut();
            }

            if ($totalHeight + $(window).height() === $(document).height()) {
                $scrolltop.css("bottom", "90px");
            } else {
                $scrolltop.css("bottom", "20px");
            }


        });

        /*----------------------------
            BLOG MASONRY
        ------------------------------*/
        var $container = $('.blog__grid,.download__grid');
        $container.imagesLoaded( function() {
            $container.masonry();    
        });

        /*-----------------------------
            VIDEO RESPONSIVE
        -------------------------------*/
        $(".post-media,.post-content").fitVids();

        /*-----------------------------
            SELECT DROPDOWN STYLE
        -------------------------------*/
        var select_Ids = $('.edd_price_options select,.cliper-single-widgets select:not(.widget_product_categories select,.widget_layered_nav select),.download__filter__edd__sorting select,.download__orderby__shoring__filter select,select:not(.widget_product_categories select,.widget_layered_nav select)');
        $('select').addClass('wide');
        select_Ids.niceSelect();
        $('.nice-select').after('<div class="clearfix"></div>');

        /*---------------------------
            PLACEHOLDER ANIMATION
        ----------------------------*/
        // Placeholdem(document.querySelectorAll('[placeholder]'));

        /*---------------------------
            BLOG GALLERY SLIDER
        -----------------------------*/
        var postCarousel = $('.posts-gallery');
        if (postCarousel.length > 0) {
            postCarousel.owlCarousel({
                merge          : true,
                smartSpeed     : 1000,
                loop           : true,
                nav            : true,
                center         : false,
                dots           : false,
                navText        : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                autoplay       : true,
                autoplayTimeout: 3000,
                margin         : 0,
                responsiveClass: true,
                responsive     : {
                    0    : {
                        items: 1
                    },
                    600  : {
                        items: 1
                    },
                    1000 : {
                        items: 1
                    },
                    1200 : {
                        items: 1
                    }
                }
            });
        }

        /*----------------------------
            IMAGE LEAGY LOAD
        ------------------------------*/
        var cliper_lagy_switch    = '0';        
        if(typeof cliper_lagy_load !== 'undefined' ){
            if ( typeof cliper_lagy_load.cliper_lagy_switch != 'undefined' ){
                cliper_lagy_switch = cliper_lagy_load.cliper_lagy_switch;
            }
        }
        if( cliper_lagy_switch === 1){
            var img_tag  = $("img");
            var img_link = '';
            img_tag.each(function(index) {
                img_link = $(this).attr( 'src' );
                $(this).attr( 'data-src', img_link );
            });
            img_tag.loadScroll(500);
        }

    }(jQuery));
})(jQuery);

(function ($) {
    jQuery(window).on('load', function () {
        "use strict";
        /*--------------------------
            PRE LOADER
        ----------------------------*/
        $(".cliper-preeloader").fadeOut(1000);

        /*--------------------------
            ACTIVE WOW JS
        ----------------------------*/
        new WOW().init({
            boxClass: 'wow',
            offset  : 50,
            mobile  : false,
            live    : true
        });


        /**
         * This function concats the attributes of old elements
         */
         function concatHashToString(hash){
            var emptyStr = '';
            $.each(hash, function(index){
            emptyStr += ' ' + hash[index].name + '="' + hash[index].value + '"';
            });
            return emptyStr;
        }

        /**
         * This function replaces the DOM elements's tag name with you desire
         * Example:
         *        replaceElem('header','ram');
         *        replaceElem('div.header-one','ram');
         */
        function replaceElem(targetId, replaceWith){
            $(targetId).each(function(){
                var attributes        = concatHashToString(this.attributes);
                var replacingStartTag = '<' + replaceWith + attributes +'>';
                var replacingEndTag   = '</' + replaceWith + '>';
                $(this).replaceWith(replacingStartTag + $(this).html() + replacingEndTag);
            });
        }
        replaceElem('span.woocommerce-input-wrapper','div');

    });
})(jQuery);