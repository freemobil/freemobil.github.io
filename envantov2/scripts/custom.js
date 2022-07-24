$(window).on('load',function() { 
	//Preloaders
	setTimeout(function(){$("#page-preloader").addClass('hide-preloader');},250);// will fade out the white DIV that covers the website.
});

$(document).ready(function(){      
    'use strict'	
	function init_template(){	

		$('.home-slider').owlCarousel({
			items:1,
			autoplay:2000,
			lazyLoad:true,
			loop:true,
			margin:20,
			dots:false
		});
		
		$('.header-menu-5').owlCarousel({items:5, loop:false, margin:10, dots:false});
		$('.header-menu-4').owlCarousel({items:4, loop:false, margin:10, dots:false});
		$('.header-menu-3').owlCarousel({items:3, loop:false, margin:10, dots:false});
		
        $('.toggle-menu').on('click',function(){
            $('.header-menu').toggleClass('active-header-menu');
            $(this).find('.fa-bars').toggle(0);
            $(this).find('.fa-times').toggle(0);
            return false;
        })
        
		baguetteBox.run('.gallery', {});	
		$('.preload-image').lazyload();

        $('.hide-notification').on('click',function(){
			$(this).parent().slideUp(250);
			return false;
		});
		
		//Toggles
		$('.toggle-trigger, .toggle-title').on('click', function(){
			$(this).parent().toggleClass('toggle-active'); 
			$(this).parent().find('.toggle-content').slideToggle(250);
		});
		
		$('.active-tab').slideDown(0);
		$('a[data-tab]').on( "click", function(){
			var tab_number = $(this).data('tab'); 
			$(this).parent().find('[data-tab]').removeClass('active-tab-button');
			$(this).parent().parent().find('.tab-titles a').removeClass('active-tab-button'); 
			$(this).addClass('active-tab-button'); 
			$(this).parent().parent().find('.tab-item').slideUp(200); 
			$('#'+tab_number).slideDown(200);
			return false;
		});
		
        //Contact Form
        var formSubmitted = "false";
        jQuery(document).ready(function(e) {
            function t(t, n) {
                formSubmitted = "true";
                var r = e("#" + t).serialize();
                e.post(e("#" + t).attr("action"), r, function(n) {
                    e("#" + t).hide();
                    e("#formSuccessMessageWrap").fadeIn(500)
                })
            }

            function n(n, r) {
                e(".formValidationError").hide();
                e(".fieldHasError").removeClass("fieldHasError");
                e("#" + n + " .requiredField").each(function(i) {
                    if (e(this).val() == "" || e(this).val() == e(this).attr("data-dummy")) {
                        e(this).val(e(this).attr("data-dummy"));
                        e(this).focus();
                        e(this).addClass("fieldHasError");
                        e("#" + e(this).attr("id") + "Error").fadeIn(300);
                        return false
                    }
                    if (e(this).hasClass("requiredEmailField")) {
                        var s = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        var o = "#" + e(this).attr("id");
                        if (!s.test(e(o).val())) {
                            e(o).focus();
                            e(o).addClass("fieldHasError");
                            e(o + "Error2").fadeIn(300);
                            return false
                        }
                    }
                    if (formSubmitted == "false" && i == e("#" + n + " .requiredField").length - 1) {
                        t(n, r)
                    }
                })
            }
            e("#formSuccessMessageWrap").hide(0);
            e(".formValidationError").fadeOut(0);
            e('input[type="text"], input[type="password"], textarea').focus(function() {
                if (e(this).val() == e(this).attr("data-dummy")) {
                    e(this).val("")
                }
            });
            e("input, textarea").blur(function() {
                if (e(this).val() == "") {
                    e(this).val(e(this).attr("data-dummy"))
                }
            });
            e("#contactSubmitButton").click(function() {
                n(e(this).attr("data-formId"));
                return false
            })
        });
        
        $('.next-slide').click(function() {
            $('.home-slider').trigger('prev.owl.carousel');
        })     
        $('.prev-slide').click(function() {
            $('.home-slider').trigger('next.owl.carousel');
        })

		//Copyright Year 
        var dteNow = new Date();
        var intYear = dteNow.getFullYear();
        $('#copyright-year, .copyright-year').html(intYear);
		
            //Back to top Badge
        $('.back-to-top, .back-to-top-badge').on( "click", function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
			return false;
        });
        
        //Countdown
        if($('#countdown').length){
        var countDownDate = new Date("Jan 5, 2030 15:37:25").getTime();
        var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("countdown").innerHTML =
            "<div><span>"+days+"</span>" + "<em>Days</em></div>" + 
            "<div><span>"+hours+"</span>" + "<em>Hours</em></div> " + 
            "<div><span>"+minutes+"</span>" + "<em>Minutes</em></div>" + 
            "<div><span>"+seconds+"</span>" + "<em>Seconds</em></div>";
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "We've launched our Page";
          }
        }, 250);	
        }
	}    
	setTimeout(init_template, 0);
	
    $(function(){
		'use strict';
		var options = {
			prefetch: true,
			prefetchOn: 'mouseover',
			cacheLength: 100,
			scroll: true, 
			blacklist: '.default-link' && '.show-gallery',
			forms: 'contactForm',
			onStart: {
				duration:350, // Duration of our animation
				render: function ($container) {
				$container.addClass('is-exiting');// Add your CSS animation reversing class
				$("#page-preloader").removeClass('hide-preloader');
			}
        },
        onReady: {
			duration: 50,
			render: function ($container, $newContent) {
				$container.removeClass('is-exiting');// Remove your CSS animation reversing class
				$container.html($newContent);// Inject the new content
				$("#page-preloader").addClass('hide-preloader');
			}
		},
        onAfter: function($container, $newContent) {
            setTimeout(init_template, 0)//Timeout required to properly initiate all JS Functions. 
			$("#page-preloader").addClass('hide-preloader');

        }
      };
      var smoothState = $('#page-transitions').smoothState(options).data('smoothState');
    });      
});