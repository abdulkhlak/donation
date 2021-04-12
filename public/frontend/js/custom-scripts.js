/*-------------------------------------------------------------------*/
/* Project: Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template */
/* Ver: 1.0.2*/
/* Date: 21-11-2017*/
/* Author: xenioushk*/
/*-------------------------------------------------------------------*/

jQuery(function (jQuery) {

    "use strict";

    // 00. RTL status check.
    var rtl_status = false;
    if (jQuery('html').is('[dir]')) {
        rtl_status = true;
    }

    jQuery.fn.center = function (parent) {
        if (parent) {
            parent = this.parent();
        } else {
            parent = window;
        }
        this.css({
            "position": "absolute",
            "top": (((jQuery(parent).height() - this.outerHeight()) / 2) + jQuery(parent).scrollTop() + "px"),
            "left": (((jQuery(parent).width() - this.outerWidth()) / 2) + jQuery(parent).scrollLeft() + "px")
        });
        return this;
    }

    // 00. RTL status check.
    var rtl_status = false;
    if (jQuery('html').is('[dir]')) {
        rtl_status = true;
    }

    // DETECT TOUCH DEVICE

    function is_touch_device() {
        return !!('ontouchstart' in window) || (!!('onmsgesturechange' in window) && !!window.navigator.maxTouchPoints);
    }

    // ANIMATIONS //
    function animations() {

        animations = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 120,
            mobile: false,
            live: true
        });

        animations.init();

    }

    // ONE PAGE SMOOTH SCROLLING

    function smooth_scrolling() {

        jQuery(".nav_menu").on("click", function () {

            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                var offset = jQuery('.header-wrapper').outerHeight();

                if (jQuery('.stuck').length === 1) {
                    offset = jQuery('.stuck').outerHeight();
                } else {
                    offset = parseInt(offset, 0) + 24;
                }

                if (target.length) {
                    jQuery('html,body').animate({
                        scrollTop: target.offset().top - parseInt(offset, 0)
                    }, 1300);

                    return false;

                }

            }

        });

    }

    // CUSTOM BACKGROUND.

    if (jQuery(".section-custom-bg").length) {

        jQuery(".section-custom-bg").each(function () {

            var jQuerythis = jQuery(this);

            var bg_img = "images/home_1_slider_1.jpg",
                    bg_color = "#000000",
                    bg_opacity = "0.5",
                    bg_color_2 = "#000000",
                    bg_opacity_2 = "0.8",
                    bg_position = "center center",
                    bg_repeat = "no-repeat",
                    bg_size = "cover",
                    bg_overflow = "hidden";



            // Background Image.

            if (jQuerythis.is('[data-bg_img]')) {
                bg_img = ', url("' + jQuerythis.data('bg_img') + '")';
            } else {
                bg_img = ', url("' + bg_img + '")';
            }

            // Background Color.

            if (jQuerythis.is('[data-bg_color]')) {
                bg_color = jQuerythis.data('bg_color');
            }

            if (jQuerythis.is('[data-bg_opacity]')) {
                bg_opacity = jQuerythis.data('bg_opacity');
            }

            var jQuerycolor_overlay = hexToRgbA(bg_color, bg_opacity);

            jQuerycolor_overlay_2 = jQuerycolor_overlay;

            if (jQuerythis.is('[data-gardient]') && jQuerythis.data('gardient') == true) {

                if (jQuerythis.is('[data-bg_color_2]')) {
                    bg_color_2 = jQuerythis.data('bg_color_2');
                }

                if (jQuerythis.is('[data-bg_opacity_2]')) {
                    bg_opacity_2 = jQuerythis.data('bg_opacity_2');
                }

                var jQuerycolor_overlay_2 = hexToRgbA(bg_color_2, bg_opacity_2);

            }

            // Background Position.

            var jQuerybg_position = "";

            if (jQuerythis.is('[data-bg_position]')) {
                jQuerybg_position += 'background-position: ' + jQuerythis.data('bg_position') + ';';
            } else {
                jQuerybg_position += 'background-position: ' + bg_position + '; ';
            }

            // Background Repeat.

            var jQuerybg_repeat = "";

            if (jQuerythis.is('[data-bg_repeat]')) {
                jQuerybg_repeat += 'background-repeat: ' + jQuerythis.data('bg_repeat') + ';';
            } else {
                jQuerybg_repeat += 'background-repeat: ' + bg_repeat + '; ';
            }

            // Background Size.

            var jQuerybg_size = "";

            if (jQuerythis.is('[data-bg_size]')) {
                jQuerybg_size += 'background-size: ' + jQuerythis.data('bg_size') + ';';
            } else {
                jQuerybg_size += 'background-size: ' + bg_size + '; ';
            }

            // Background Overflow.

            var jQuerybg_overflow = "";

            if (jQuerythis.is('[data-bg_overflow]')) {
                jQuerybg_overflow += 'overflow: ' + jQuerythis.data('bg_overflow') + ';';
            } else {
                jQuerybg_overflow += 'overflow: ' + bg_overflow + '; ';
            }

            jQuerythis.attr("style", "background:linear-gradient( " + jQuerycolor_overlay + ",  " + jQuerycolor_overlay_2 + " )" + bg_img + "; " + jQuerybg_position + " " + jQuerybg_repeat + " background-attachment: inherit; " + jQuerybg_size + " " + jQuerybg_overflow + "");

        });

    }

    // CUSTOM EMPTY HIGHT.

    if (jQuery(".custom-empty-space").length) {

        jQuery(".custom-empty-space").each(function () {

            var jQuerythis = jQuery(this);

            var height = "100px",
                    ext_class = "";

            if (jQuerythis.is('[data-height]')) {
                height = jQuerythis.data('height');
            }

            if (jQuerythis.is('[data-class]')) {
                jQuerythis.addClass(jQuerythis.data('class'));
            }

            jQuerythis.attr("style", 'height:' + height + ';');

        });

    }


    // BANNER.

    if (jQuery(".section-banner").length) {

        jQuery(".section-banner").each(function () {

            var jQuerythis = jQuery(this);

            var bg_img = "images/home_1_slider_1.jpg",
                    bg_color = "#000000",
                    bg_opacity = "0.5",
                    bg_color_2 = "#000000",
                    bg_opacity_2 = "0.8";

            if (jQuerythis.is('[data-bg_img]')) {
                bg_img = ', url("' + jQuerythis.data('bg_img') + '")';
            } else {
                bg_img = ', url("' + bg_img + '")';
            }

            if (jQuerythis.is('[data-bg_color]')) {
                bg_color = jQuerythis.data('bg_color');
            }

            if (jQuerythis.is('[data-bg_opacity]')) {
                bg_opacity = jQuerythis.data('bg_opacity');
            }

            var jQuerycolor_overlay = hexToRgbA(bg_color, bg_opacity);

            jQuerycolor_overlay_2 = jQuerycolor_overlay;

            if (jQuerythis.is('[data-gardient]') && jQuerythis.data('gardient') == true) {


                if (jQuerythis.is('[data-bg_color_2]')) {
                    bg_color_2 = jQuerythis.data('bg_color_2');
                }

                if (jQuerythis.is('[data-bg_opacity_2]')) {
                    bg_opacity_2 = jQuerythis.data('bg_opacity_2');
                }

                var jQuerycolor_overlay_2 = hexToRgbA(bg_color_2, bg_opacity_2);

            }


            jQuerythis.attr("style", "background:linear-gradient( " + jQuerycolor_overlay + ",  " + jQuerycolor_overlay_2 + " )" + bg_img + "; background-position: 100% top; background-repeat: repeat; background-attachment: inherit; background-size: cover; overflow:hidden;");

        });

    }

    // SLIDER 1

    function slider_resize() {

        if (jQuery(window).width() > 991) {

            jQuery(".slider-content").first().attr("style", "margin-top: 0px;");

        } else {

            jQuery(".slider-content").first().attr("style", "margin-top: 0px;");

        }


    }

    // SLIDER 1

    function slider_resize() {
        if (jQuery(window).width() > 991) {
            jQuery(".slider-content").first().attr("style", "margin-top: 0px;");
        } else {
            jQuery(".slider-content").first().attr("style", "margin-top: 0px;");
        }
    }

    function hexToRgbA(hex, opacity) {
        var c;
        if (/^#([A-Fa-f0-9]{3}){1,2}jQuery/.test(hex)) {
            c = hex.substring(1).split('');
            if (c.length === 3) {
                c = [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c = '0x' + c.join('');
            return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + opacity + ')';
        } else {
            return 'rgba("0,0,0,' + opacity + '")';
        }
    }

    // add animate.css class(es) to the elements to be animated
    function setAnimation(_elem, _InOut) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        _elem.each(function () {
            var jQueryelem = jQuery(this);
            var jQueryanimationType = 'animated ' + jQueryelem.data('animation-' + _InOut);
            jQueryelem.addClass(jQueryanimationType).one(animationEndEvent, function () {
                jQueryelem.removeClass(jQueryanimationType); // remove animate.css Class at the end of the animations
            });
        });
    }


    if (jQuery('.slider-wrap')) {

        var jQuerythis = jQuery('.slider-wrap');

        if (jQuerythis.is('[data-bg_img]')) {

            var bg_img = 'url("' + jQuerythis.data('bg_img') + '")';
            jQuerythis.css({
                'background-image': bg_img,
                'background-repeat': 'repeat',
                'background-position': 'center center',
                'background-size': 'cover'
            });

        }

    }

    if (jQuery("#slider_1").length) {

        // BG & Color Settings.
        jQuery("#slider_1").find('.slider_item_container').each(function () {
            var jQuerythis = jQuery(this);
            var bg_img = "",
                    bg_color = "#000000",
                    bg_opacity = "0.1";
            if (jQuerythis.is('[data-bg_img]')) {
                bg_img = ', url("' + jQuerythis.data('bg_img') + '")';
            }
            if (jQuerythis.is('[data-bg_color]')) {
                bg_color = jQuerythis.data('bg_color');
            }
            if (jQuerythis.is('[data-bg_opacity]')) {
                bg_opacity = jQuerythis.data('bg_opacity');
            }
            var jQuerycolor_overlay = hexToRgbA(bg_color, bg_opacity);

            jQuerythis.find('.item').before('<div class="slide-bg"></div>');

            jQuerythis.find('.slide-bg').attr("style", "background:linear-gradient( " + jQuerycolor_overlay + ",  " + jQuerycolor_overlay + " )" + bg_img + "; background-position: center center; background-repeat: no-repeat; background-attachment: inherit; background-size: cover; overflow:hidden;");

        });

        slider_resize();

        jQuery(window).on("resize", function () {
            if (jQuery(window).width() > 767) {
                slider_resize();
            } else {
                jQuery(".slider-content").removeAttr("style");
            }
        });

        // Carousel.

        var jQueryslider_1 = jQuery("#slider_1");

        var jQuerythis = jQueryslider_1;

        var items_val = 1,
                bg_effect_val = true,
                nav_val = false,
                dots_val = true,
                autoplay_val = true,
                autoplaytimeout_val = 10000;
        // Status.
        if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {
            jQuerythis.removeClass('owl-carousel');
            return '';
        }

        // Status.
        if (jQuerythis.attr('data-bg_effect') && !isNaN(jQuerythis.data('bg_effect'))) {
            bg_effect_val = jQuerythis.data('bg_effect');
        }
        // navigation status.
        if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {
            nav_val = jQuerythis.data('nav');
        }

        // navigation status.
        if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {
            dots_val = jQuerythis.data('dots');
        }
        // Autoplay status.
        if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {
            autoplay_val = jQuerythis.data('autoplay');
        }
        // Autoplay status.
        if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {
            autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
        }

        jQueryslider_1.owlCarousel({
            rtl: rtl_status,
            callbacks: true,
            margin: 0,
            items: items_val,
            loop: true,
            autoplay: autoplay_val,
            autoplayTimeout: autoplaytimeout_val,
            autoplayHoverPause: false,
            dots: dots_val,
            nav: nav_val,
            responsive: {
                0: {
                    items: items_val,
                    nav: false,
                    loop: true,
                    dots: false
                },
                600: {
                    items: items_val,
                    nav: false,
                    loop: true,
                    dots: false
                },
                1000: {
                    items: items_val
                }
            },
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });




        var jQueryslider_animation = jQueryslider_1;



        // Fired before current slide change
        jQueryslider_animation.on('change.owl.carousel', function (event) {
            var jQuerycurrentItem = jQuery('.owl-item', jQueryslider_animation).eq(event.item.index);
            var jQueryelemsToanim = jQuerycurrentItem.find("[data-animation-out]");
            setAnimation(jQueryelemsToanim, 'out');
        });


        // Fired after current slide has been changed

        jQueryslider_animation.on('changed.owl.carousel', function (event) {
            var jQuerycurrentItem = jQuery('.owl-item', jQueryslider_animation).eq(event.item.index);
            var jQueryelemsToanim = jQuerycurrentItem.find("[data-animation-in]");
            setAnimation(jQueryelemsToanim, 'in');

        });



        if (bg_effect_val === true) {

            jQueryslider_animation.on('translated.owl.carousel', function (e) {
                jQuery(".active .slide-bg").addClass("slidezoom");
            });

            jQueryslider_animation.on('translate.owl.carousel', function (e) {
                jQuery(".active .slide-bg").removeClass("slidezoom");
            });

        }


    }


    // STICKY HEADER & MENU

    if (jQuery(".main-header").attr('data-sticky_header')) {

        jQuery('.main-header .header-wrapper').waypoint('sticky', {
            wrapper: '<div class="sticky-wrapper" />',
            stuckClass: 'stuck'
        });

    }

    // HIGHLIGHT CAROUSEL

    if (jQuery(".highlight-carousel").length) {
        var jQueryhighlight_carousel = jQuery('.highlight-carousel');
        jQueryhighlight_carousel.each(function () {
            var jQuerythis = jQuery(this);

            var items_val = 3,
                    nav_val = true,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;
            // Status.
            if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {

                jQuerythis.removeClass('owl-carousel');
                return '';
            }
            // no of items
            if (jQuerythis.attr('data-items') && !isNaN(jQuerythis.data('items'))) {
                items_val = jQuerythis.data('items');
            }
            // navigation status.
            if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {
                nav_val = jQuerythis.data('nav');
            }

            // navigation status.
            if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {
                dots_val = jQuerythis.data('dots');
            }
            // Autoplay status.
            if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {
                autoplay_val = jQuerythis.data('autoplay');
            }
            // Autoplay status.
            if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {
                autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
            }

            jQuerythis.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });
        });
    }

    // EVENT CAROUSEL

    if (jQuery(".event-carousel").length) {
        var jQueryevent_carousel = jQuery('.event-carousel');
        jQueryevent_carousel.each(function () {
            var jQuerythis = jQuery(this);

            var items_val = 2,
                    nav_val = true,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;
            // Status.
            if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {

                jQuerythis.removeClass('owl-carousel');
                return '';
            }
            // no of items
            if (jQuerythis.attr('data-items') && !isNaN(jQuerythis.data('items'))) {
                items_val = jQuerythis.data('items');
            }
            // navigation status.
            if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {
                nav_val = jQuerythis.data('nav');
            }

            // navigation status.
            if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {
                dots_val = jQuerythis.data('dots');
            }
            // Autoplay status.
            if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {
                autoplay_val = jQuerythis.data('autoplay');
            }
            // Autoplay status.
            if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {
                autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
            }

            jQuerythis.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });
        });
    }

    // GALLERY.

    if (jQuery('.gallery-light-box').length) {

        jQuery('.gallery-light-box').venobox();

    }

    // GALLERY CAROUSEL

    if (jQuery(".gallery-carousel").length) {

        var jQuerygallery_carousel = jQuery('.gallery-carousel');

        jQuerygallery_carousel.each(function () {

            var jQuerythis = jQuery(this);

            var items_val = 5,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;


            // Status.
            if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {

                jQuerythis.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if (jQuerythis.attr('data-items') && !isNaN(jQuerythis.data('items'))) {

                items_val = jQuerythis.data('items');
            }

            // navigation status.

            if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {

                nav_val = jQuerythis.data('nav');

            }

            // navigation status.


            if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {

                dots_val = jQuerythis.data('dots');

            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {

                autoplay_val = jQuerythis.data('autoplay');
            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {

                autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
            }


            jQuerythis.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });

    }

    // SERVICE CAROUSEL

    if (jQuery(".service-carousel").length) {
        var jQueryservice_carousel = jQuery('.service-carousel');
        jQueryservice_carousel.each(function () {
            var jQuerythis = jQuery(this);

            var items_val = 3,
                    nav_val = true,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;
            // Status.
            if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {

                jQuerythis.removeClass('owl-carousel');
                return '';
            }
            // no of items
            if (jQuerythis.attr('data-items') && !isNaN(jQuerythis.data('items'))) {
                items_val = jQuerythis.data('items');
            }
            // navigation status.
            if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {
                nav_val = jQuerythis.data('nav');
            }

            // navigation status.
            if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {
                dots_val = jQuerythis.data('dots');
            }
            // Autoplay status.
            if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {
                autoplay_val = jQuerythis.data('autoplay');
            }
            // Autoplay status.
            if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {
                autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
            }

            jQuerythis.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });
        });
    }

    // COUNTER

    if (jQuery(".counter").length) {
        jQuery('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    //CLIENTS LOGOS

    if (jQuery(".logo-items").length) {

        var jQuerylogo_items = jQuery('.logo-items');

        jQuerylogo_items.each(function () {

            var jQuerythis = jQuery(this);

            var items_val = 6,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;


            // Status.
            if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {

                jQuerythis.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if (jQuerythis.attr('data-items') && !isNaN(jQuerythis.data('items'))) {

                items_val = jQuerythis.data('items');
            }

            // navigation status.

            if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {

                nav_val = jQuerythis.data('nav');

            }

            // navigation status.


            if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {

                dots_val = jQuerythis.data('dots');

            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {

                autoplay_val = jQuerythis.data('autoplay');
            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {

                autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
            }


            jQuerythis.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });

    }

    // TEAM CAROUSEL.

    if (jQuery(".team-carousel").length) {

        var jQueryteam_carousel = jQuery('.team-carousel');

        jQueryteam_carousel.each(function () {

            var jQuerythis = jQuery(this);

            var items_val = 3,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;


            // Status.
            if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {

                jQuerythis.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if (jQuerythis.attr('data-items') && !isNaN(jQuerythis.data('items'))) {

                items_val = jQuerythis.data('items');
            }

            // navigation status.

            if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {

                nav_val = jQuerythis.data('nav');

            }

            // navigation status.


            if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {

                dots_val = jQuerythis.data('dots');

            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {

                autoplay_val = jQuerythis.data('autoplay');
            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {

                autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
            }


            jQuerythis.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });

    }

    // TESTIMONIAL CAROUSEL.

    if (jQuery(".testimonial-container").length) {

        var jQuerytestimonial_container = jQuery('.testimonial-container');

        jQuerytestimonial_container.each(function () {

            var jQuerythis = jQuery(this);

            var items_val = 2,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;


            // Status.
            if (jQuerythis.attr('data-carousel') && jQuerythis.data('carousel') !== 1) {

                jQuerythis.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if (jQuerythis.attr('data-items') && !isNaN(jQuerythis.data('items'))) {

                items_val = jQuerythis.data('items');
            }

            // navigation status.

            if (jQuerythis.attr('data-nav') && !isNaN(jQuerythis.data('nav'))) {

                nav_val = jQuerythis.data('nav');

            }

            // navigation status.


            if (jQuerythis.attr('data-dots') && !isNaN(jQuerythis.data('dots'))) {

                dots_val = jQuerythis.data('dots');

            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplay') && !isNaN(jQuerythis.data('autoplay'))) {

                autoplay_val = jQuerythis.data('autoplay');
            }

            // Autoplay status.

            if (jQuerythis.attr('data-autoplaytimeout') && !isNaN(jQuerythis.data('autoplaytimeout'))) {

                autoplaytimeout_val = jQuerythis.data('autoplaytimeout');
            }


            jQuerythis.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });


    }

    // GOOGLE MAP FOR CONTACT & EVENT PAGE.

    if (jQuery('#map_canvas').length) {

        var map;

        jQuery('#map_canvas').css({
            'height': '400px'
        });

        map = new GMaps({
            div: '#map_canvas',
            lat: -12.043333,
            lng: -77.028333
        });

    }

    // CONTACT FORM

    function email_checkRegexp(o, regexp) {

        if (!(regexp.test(o.val()))) {

            return false;

        } else {

            return true;

        }

    }

    if (jQuery('#contact-form').length) {

        var jQuerycontact_form = jQuery("#contact-form");

        var jQuerycontact_submit_btn = jQuerycontact_form.find("button.btn-custom");
        var jQueryuser_name = jQuerycontact_form.find("#user_name");
        var jQueryuser_email = jQuerycontact_form.find("#user_email");
        var jQueryemail_subject = jQuerycontact_form.find("#email_subject");
        var jQueryemail_message = jQuerycontact_form.find("#email_message");

        var emailRegex = /^[a-zA-Z0-9.!#jQuery%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*jQuery/;

        var jQueryall_fields = jQuery([]).add(jQueryuser_name).add(jQueryuser_email).add(jQueryemail_subject).add(jQueryemail_message);


        jQueryall_fields.val("");

        var jQueryerror_border = "border-bottom: 1px solid red;";
        var contact_form_bValid, user_name_bValid, user_email_bValid, user_email_subject_bValid, user_email_message_bValid;


        jQuerycontact_form.find("button[type=submit]").on("click", function () {

            contact_form_bValid = true;

            if (jQueryuser_name.val() === "") {

                user_name_bValid = false;
                jQueryuser_name.next("span").remove();
                jQueryuser_name.attr("style", jQueryerror_border).after("<span class='error'>" + jQueryuser_name.attr("data-msg") + "</span>");

            } else {
                user_name_bValid = true;
                jQueryuser_name.removeAttr("style").next("span").remove();

            }

            contact_form_bValid = contact_form_bValid && user_name_bValid;


            if (jQueryuser_email.val() === "" || email_checkRegexp(jQueryuser_email, emailRegex) == false) {

                user_email_bValid = false;
                jQueryuser_email.next("span").remove();
                jQueryuser_email.attr("style", jQueryerror_border).after("<span class='error'>" + jQueryuser_email.attr("data-msg") + "</span>");

            } else {
                user_email_bValid = true;
                jQueryuser_email.removeAttr("style").next("span").remove();

            }

            contact_form_bValid = contact_form_bValid && user_email_bValid;


            if (jQueryemail_subject.val() === "") {

                user_email_subject_bValid = false;
                jQueryemail_subject.next("span").remove();
                jQueryemail_subject.attr("style", jQueryerror_border).after("<span class='error'>" + jQueryemail_subject.attr("data-msg") + "</span>");

            } else {
                user_email_subject_bValid = true;
                jQueryemail_subject.removeAttr("style").next("span").remove();
            }

            contact_form_bValid = contact_form_bValid && user_email_subject_bValid;

            if (jQueryemail_message.val() === "") {

                user_email_message_bValid = false;
                jQueryemail_message.next("span").remove();
                jQueryemail_message.attr("style", jQueryerror_border).after("<span class='error'>" + jQueryemail_message.attr("data-msg") + "</span>");

            } else {
                user_email_message_bValid = true;
                jQueryemail_message.removeAttr("style").next("span").remove();

            }

            contact_form_bValid = contact_form_bValid && user_email_message_bValid;

            if (contact_form_bValid === true) {

                jQueryall_fields.attr("disabled", "disabled");
                jQuerycontact_submit_btn.after("<span class='form_msg'>Please wait ....</span>").attr("disabled", "disabled");

                jQuery.ajax({
                    url: "contact_email.php",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        safety_key: 'dynatf',
                        user_name: jQueryuser_name.val(),
                        user_email: jQueryuser_email.val(),
                        email_subject: jQueryemail_subject.val(),
                        email_message: jQueryemail_message.val()
                    },
                    success: function (data) {


                        if (data.status === 1) {

                            jQuerycontact_submit_btn.next("span").remove();
                            jQuerycontact_submit_btn.after("<span class='form_msg'>" + data.msg + "</span>");

                            setTimeout(function () {

                                jQueryall_fields.removeAttr("disabled").val("");

                                jQuerycontact_submit_btn.next("span").slideUp('slow', function () {
                                    jQuery(this).remove();
                                    jQuerycontact_submit_btn.removeAttr("disabled");
                                });

                            }, 3000)


                        } else {

                            jQueryall_fields.removeAttr("disabled");

                        }

                    },
                    error: function (xhr, textStatus, e) {
                        alert("Email can not be sent. Please try again.");
                        return;
                    }

                });


            }

            return false;

        })

    }

    // VENOBOX VIDEO.

    jQuery(document).ready(function () {
        jQuery('.venobox').venobox();
    });


    //WoW Animation.
    animations();

    //One Page Scrolling.
    smooth_scrolling();


    // BACK TO TOP BUTTON.

    if (jQuery('#backTop').length === 1) {

        jQuery('#backTop').backTop({
            'theme': 'custom'
        });

    }

    // PRELOADER

    jQuery(window).on("load", function () {

        jQuery("#preloader").fadeOut(500);

    });

});

//  DEPENDING DROPDOWN MENU  DISTRICT/NEAREST

jQuery(document).ready(function() {

    jQuery('select[name="district_id"]').on('change', function() {
        var districtID = jQuery(this).val();
       // debugger;
        if(districtID) {
            jQuery.ajax({
                url: 'findCityWithDistrictID/'+districtID,
                type: "GET",
                dataType: "json",
                success:function(data) {
//debugger;

                    jQuery('select[name="nearest_id"]').empty();
                    jQuery.each(data, function(key, value) {
                        //debugger;
                        jQuery('select[name="nearest_id"]').append('<option value="'+ value.id +'">'+ value.nearest_name +'</option>');
                    });


                }
            });
        }else{
            jQuery('select[name="nearest_id"]').empty();
        }
    });
});


// WARRAMTY
jQuery('body').on('change','input[name="gender"]',function () {
    var n = jQuery(this).val();
    debugger;


    if (n=='female')
    {
        jQuery('.women').show();

    }else {
        jQuery('.women').hide();
    }
});

// LAST DONATED
jQuery('body').on('change','input[name="blood_before"]',function () {
    var n = jQuery(this).val();
    debugger;


    if (n=='1')
    {
        jQuery('.last_donated').show();

    }else {
        jQuery('.last_donated').hide();
    }
});

