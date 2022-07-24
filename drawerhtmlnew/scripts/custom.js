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
			loop:true,
			margin:10,
			dots:false
		});
		
		
		$(".preload-image").lazyload();
		baguetteBox.run('.gallery', {});	
		
		//Menu
		$('[data-submenu]').on('click', function(){
			var sub_id = $(this).data('submenu');
			var sub_nr = $('#'+sub_id).children().length;
			if(
				$('#'+sub_id).height() > 0){
			  	$('#'+sub_id).css({ 'height': '0px' });
				$(this).removeClass('submenu-active');
			}		
			if(
				$('#'+sub_id).height() == 0){
			  	$('#'+sub_id).css({ 'height': sub_nr*38 });
				$(this).addClass('submenu-active');
			}
			return false;
		});
		
		setTimeout(function(){
		var sub_items = $('.active-submenu').children().length;
		var sub_name = $('.active-submenu').attr('id');
		$('[data-submenu='+ sub_name).addClass('submenu-active');
		$('.active-submenu').css({ 'height': sub_items*38 });
		$('.active-submenu').addClass('submenu-active');
		},250);

		
		$('.toggle-sidebar').on('click', function(){
			$('.sidebar').toggleClass('sidebar-active');
			$('.sidebar-remove').toggleClass('sidebar-remove-active');
			$('.page-content, .header').toggleClass('content-active');
			return false;
		});
		
		$('#page-transitions').append('<div class="sidebar-remove"></div>');
		$('.sidebar-remove').on('click', function(){
			$('.sidebar').removeClass('sidebar-active');
			$('.sidebar-remove').removeClass('sidebar-remove-active');
			$('.page-content, .header').removeClass('content-active');
			return false;
		});
		
        //Copyright Year 
        var dteNow = new Date();
        var intYear = dteNow.getFullYear();
        $('.copyright-year').html(intYear);

		
		//Notification
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
		
		//Filterable Gallery
		
		$('[data-cat]').on('click',function(){
			$('.gallery-controls a').removeClass('active-category');
			$(this).addClass('active-category');
			var cat_nr = $(this).data('cat');
			$('.all').hide(250);
			$('.'+cat_nr).delay(10).show(250);
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
        })

		
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.iOS());
            }
        };
        if (!isMobile.any()) {
            $('.show-blackberry, .show-ios, .show-windows, .show-android').addClass('disabled');
            $('.show-no-detection').removeClass('disabled');
        }
        if (isMobile.Android()) {
            $('head').append('<meta name="theme-color" content="#000000"> />');
            $('.show-android').removeClass('disabled');
            $('.show-ios, .show-windows, .show-download, .show-no-detection').addClass('disabled');
        }
        if (isMobile.iOS()) {
            $('.show-ios').removeClass('disabled');
            $('.show-android, .show-windows, .show-download, .show-no-detection').addClass('disabled');
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
				$('.page-content, .header').removeClass('content-active');
				$('.sidebar').removeClass('sidebar-active');
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