/*
 * Theme Name: Vniapp Onepage  template
 * File name: main.js
 * Theme URL: http://www.kamric.com/magic/
 * Description: Vniapp Onepage template
 * Author: Kamric
 * Author URL: https://themeforest.net/user/kamric
 * Version: 1.0
 */
 
(function($) {
    "use strict";
	
  //Run function when document ready
  
 
  jQuery(document).ready(function($) 
{
	
	init_gototop();
	init_loader();
	init_pagescroll();
	init_fullheigh();
	init_wowanimation();
	init_testimonial();
	init_imageslide();
	init_screen();
	init_prettyphoto();
	init_countdown();
	
  });

	

  /*------------------------------------------*/
  /*           /*. Go to top /*
  /*------------------------------------------*/


  function init_gototop()
  {
    if ($('#back-to-top').length)
    {
      var scrollTrigger = 100,
        backToTop = function ()
        {
          var scrollTop = $(window).scrollTop();
          if (scrollTop > scrollTrigger)
          {
            $('#back-to-top').addClass('show');
          }
          else
          {
            $('#back-to-top').removeClass('show');
          }
        };
      backToTop();
      $(window).on('scroll', function ()
      {
        backToTop();
      });
      $('#back-to-top').on('click', function (e)
      {
        e.preventDefault();
        $('html,body').animate(
        {
          scrollTop: 0
        }, 900);
      });
    }
  }


  /*------------------------------------------*/
  /*      /*. loader /*
  /*------------------------------------------*/


    function init_loader()
  {
		$("#loader").fadeOut("slow", function () {
			$("#preloader").delay(300).fadeOut("slow")
		})
	
  }

   
 	/*------------------------------------------*/
    /*           /*Nav Scroll Fix /*
    /*------------------------------------------*/

		
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 0) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});
	
		
   // 
  /*------------------------------------------*/
  /*           /*. page scroll /*
  /*------------------------------------------*/
   
   
	function init_pagescroll() {
		$('a.page-scroll').on('click', function(e) {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
	}
	

/*------------------------------------------*/
/*           /* 04. Menu Mobile Toggle /*
/*------------------------------------------*/

    $(document).ready(function() {    
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
    });   
 });
 


  /*------------------------------------------*/
  /*           /*.  WOW ANIMATION /*
  /*------------------------------------------*/


  function init_wowanimation()
  {
    var wow = new WOW(
    {
      mobile: false
    });
    wow.init();
  }


   /*------------------------------------------*/
    /*           /*. full-heigh banner /*
   /*------------------------------------------*/
	
	
	 function init_fullheigh(){
		 
	 $(".full-height").height($(window).height()), 
	 $(window).on("resize", function () {
     
	  $(".full-height").height($(window).height())
    })
	}
	
 
		 
	/*------------------------------------------*/
    /*           /*. Testimonial /*
    /*------------------------------------------*/
	
	
	function init_testimonial(){
	$("#testimonial-list").owlCarousel({
      autoplay: !0,
      loop: !0,
      items: 1,
      navigation: !0,
      pagination: !1,
      itemsDesktop: [1e3, 1],
      itemsDesktopSmall: [900, 2],
      itemsTablet: [600, 2],
      itemsMobile: [479, 1]
	  
    });
	}
	

	/*------------------------------------------*/
    /*           /*. Image Slide/*
    /*------------------------------------------*/
	
	function init_imageslide(){
	  $("#owl-slider").owlCarousel({
      nav: !0,
      loop: !0,
      autoplay: !0,
      margin: 0,
      navText: ["<a><span></span></a>", "<a><span></span></a>"],
      responsive: {
        0: {
          items: 1,
          dots: !1
        },
        600: {
          items: 1,
          dots: !1
        },
        1e3: {
          items: 1
        }
      }  
    });
    }
	

      /*------------------------------------------*/
       /*           /*.  screen /*
      /*------------------------------------------*/

    function init_screen() {
        var slider = new MasterSlider();
        slider.setup('teamslider', {
            loop: true,
            width: 320,
            height: 560,
            speed: 20,
            view: 'focus',
            preload: 'all',
            space: 0,
            wheel: true
        });
        slider.control('arrows');
        slider.control('slideinfo', {
            insertTo: '#staff-info'
        });

        $('#myTab a').on(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

    }

	
	
	/*------------------------------------------*/
    /*      /*. prettyphoto Lightbox /*
    /*------------------------------------------*/
	
	
	function init_prettyphoto() {
        $("a[class^='prettyphoto']").prettyPhoto();
        $("a[class^='work']").prettyPhoto();
    }
	
 	/*------------------------------------------*/
  /*           /*. Count Down /*
  /*------------------------------------------*/


  function init_countdown()
  {
    if ($(".count-down").length)
    {
      var year = parseInt($(".count-down").attr("data-countdown-year"), 10);
      var month = parseInt($(".count-down").attr("data-countdown-month"), 10) - 1;
      var day = parseInt($(".count-down").attr("data-countdown-day"), 10);
      $(".count-down").countdown(
      {
        until: new Date(year, month, day),
        padZeroes: true
      });
    }
  }

      

})(jQuery); // JavaScript Document