;
(function ($) {

    "use strict";


    jQuery(document).on('ready', function () {


        /*===============================  
             Sticky 
        ================================*/
        jQuery(window).on('scroll', function (event) {
            var scroll = jQuery(window).scrollTop();
            if (scroll < 110) {
                jQuery(".header-nav").removeClass("sticky");
            } else {
                jQuery(".header-nav").addClass("sticky");
            }
        });

        /*===============================  
             Mobile Menu 
        ================================*/
        jQuery(".navbar-toggler").on('click', function () {
            jQuery(this).toggleClass('active');
        });

        jQuery(".navbar-nav a").on('click', function () {
            jQuery(".navbar-toggler").removeClass('active');
        });
        var subMenu = jQuery(".sub-menu-bar .navbar-nav .sub-menu");

        if (subMenu.length) {
            subMenu.parent('li').children('a').append(function () {
                return '<button class="sub-nav-toggler"> <i class="fal fa-angle-down"></i> </button>';
            });

            var subMenuToggler = jQuery(".sub-menu-bar .navbar-nav .sub-nav-toggler");

            subMenuToggler.on('click', function () {
                jQuery(this).parent().parent().children(".sub-menu").slideToggle();
                return false
            });

        }

        /*===============================  
             side menu Project 1
        ================================*/
        jQuery('.canvas_open').on('click', function () {
            jQuery('.offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
        });

        jQuery('.canvas_close,.off_canvars_overlay').on('click', function () {
            jQuery('.offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
        });

        var $offcanvasNav = jQuery('.offcanvas_main_menu'),
            $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
        $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');

        $offcanvasNavSubMenu.slideUp();

        $offcanvasNav.on('click', 'li a, li .menu-expand', function (e) {
            var $this = $(this);
            if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length) {
                    $this.siblings('ul').slideUp('slow');
                } else {
                    $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                    $this.siblings('ul').slideDown('slow');
                }
            }
            if ($this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/)) {
                $this.parent().toggleClass('menu-open');
            } else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
                $this.toggleClass('menu-open');
            }
        });

        /*===============================  
             features active
        ================================*/
        var mousehover = jQuery('.about-2-area');
        mousehover.on('mouseover', '.item', function () {
            jQuery('.item.active').removeClass('active');
            jQuery(this).addClass('active');
        });


        /*===============================  
             Isotope Project 1
        ================================*/
        var isotope = jQuery('.container');
        isotope.imagesLoaded(function () {
            var jQuerygrid = jQuery('.grid').isotope({
                transitionDuration: '1s',
            });

            var projectfilter = jQuery('.project-menu ul');
            projectfilter.on('click', 'li', function () {
                var filterValue = jQuery(this).attr('data-filter');
                jQuerygrid.isotope({
                    filter: filterValue
                });
            });

            var projectfilter2 = jQuery('.project-menu ul li');
            projectfilter2.on('click', function (event) {
                jQuery(this).siblings('.active').removeClass('active');
                jQuery(this).addClass('active');
                event.preventDefault();
            });
        });
        var isotopegrid = jQuery('.grid-2');
        isotopegrid.isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: 1,
            }
        })

        /*===============================  
             hero slider SLICK JS
        ================================*/
        function mainSlider() {

            var BasicSlider = jQuery('.hero-slider');
            var BasicSlider2 = jQuery('.hero-slider-2');

            BasicSlider.on('init', function (e, slick) {
                var $firstAnimatingElements = jQuery('.hero-area:first-child').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            });
            BasicSlider2.on('init', function (e, slick) {
                var $firstAnimatingElements = jQuery('.hero-14-area:first-child').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            });

            BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
                var $animatingElements = jQuery('.hero-area[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                doAnimations($animatingElements);
            });

            BasicSlider2.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
                var $animatingElements = jQuery('.hero-14-area[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                doAnimations($animatingElements);
            });

            BasicSlider.slick({
                autoplay: true,
                autoplaySpeed: 10000,
                pauseOnHover: false,
                dots: true,
                fade: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false,
                            arrows: false
                        }
                }
            ]
            });
            BasicSlider2.slick({
                autoplay: true,
                autoplaySpeed: 10000,
                pauseOnHover: false,
                dots: false,
                fade: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false,
                            arrows: false
                        }
                }
            ]
            });

            function doAnimations(elements) {
                var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                elements.each(function () {
                    var $this = $(this);
                    var $animationDelay = $this.data('delay');
                    var $animationType = 'animated ' + $this.data('animation');
                    $this.css({
                        'animation-delay': $animationDelay,
                        '-webkit-animation-delay': $animationDelay
                    });
                    $this.addClass($animationType).one(animationEndEvents, function () {
                        $this.removeClass($animationType);
                    });
                });
            }
        }
        mainSlider();

        /*===============================  
             PORTFOLIO ACTIVE SLICK JS
        ================================*/
        var Slider1 = jQuery('.portfolio-active');
        Slider1.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "370px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "80px",
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0px",
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0px",
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "140px",
                        arrows: false,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "0px",
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        var Slider2 = jQuery('.testimonial-active');
        Slider2.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        var Slider3 = jQuery('.testimonial-2-active');
        Slider3.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,

        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        var Slider4 = jQuery('.testimonial-3-active');
        Slider4.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,

        });

        /*===============================  
             TEAM ACTIVE SLICK JS
        ================================*/
        var Slider5 = jQuery('.team-active');
        Slider5.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "140px",
                        arrows: false,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "0px",
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             TEAM 5 ACTIVE SLICK JS
        ================================*/
        var Slider6 = jQuery('.team-5-active');
        Slider6.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 4,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        var Slider7 = jQuery('.screenshot-active');
        Slider7.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        var Slider8 = jQuery('.brand-list');
        Slider8.slick({
            arrows: false,
            dots: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        var Slider9 = jQuery('.service-11-active');
        Slider9.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,

                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             client slide  SLICK JS
        ================================*/
        var Slider10 = jQuery('.client-slide');
        Slider10.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false,

                    }
            }
        ]
        });

        /*===============================  
             COUNTER Active
        ================================*/
        if (jQuery('.count').length) {
            jQuery('.count').appear(function () {
                jQuery(this).prop('Counter', 0).animate({
                    Counter: jQuery(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        jQuery(this).text(Math.ceil(now));
                    }
                });
            }, {
                accY: 0
            });
        }

        /*===============================  
             PROGRESS LINE Active
        ================================*/
        if (jQuery('.progress-line').length) {
            jQuery('.progress-line').appear(function () {
                var el = jQuery(this);
                var percent = el.data('width');
                jQuery(el).css('width', percent + '%');
            }, {
                accY: 0
            });
        }
        if (jQuery('.count-box').length) {
            jQuery('.count-box').appear(function () {
                var $t = jQuery(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text()
                    }).animate({
                        countNum: n
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function () {
                            $t.find(".count-text").text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $t.find(".count-text").text(this.countNum);
                        }
                    });
                }

            }, {
                accY: 0
            });
        }

        /*===============================  
             Magnific Popup
        ================================*/
        var videopopup = jQuery('.video-popup');
        videopopup.magnificPopup({
            type: 'iframe'
        });


        /*===============================  
             Magnific Popup
        ================================*/
        var imagepopup = jQuery('.image-popup');
        imagepopup.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        
        /*===============================  
             wow js
        ================================*/

        if ($('.wow').length) {
            var wow = new WOW({
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 250, // distance to the element when triggering the animation (default is 0)
                mobile: true, // trigger animations on mobile devices (default is true)
                live: true // act on asynchronously loaded content (default is true)
            });
            wow.init();
        }





        /*===============================  
             Back to top
        ================================*/

        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > 600) {
                jQuery('.back-to-top').fadeIn(200)
            } else {
                jQuery('.back-to-top').fadeOut(200)
            }
        });
        jQuery('.back-to-top').on('click', function (event) {
            jQuery('html, body').animate({
                scrollTop: 0,
            }, 1500);
            event.preventDefault();
        });

    });


    jQuery(window).on('load', function (event) {

        /*===============================  
             Prealoder 
        ================================*/
        jQuery('.preloader').delay(500).fadeOut(500);
    });

})(jQuery);