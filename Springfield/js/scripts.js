if(!Modernizr.touch){
    $.stellar();
}


(function ($) {

	'use strict';
	/* ==============================================
	Sticky Navbar
	=============================================== */
	$(document).ready(function(){
		$(".navbar").sticky({topSpacing:0});
	});
	
	/* ==============================================
	Auto Close Responsive Navbar on Click
	=============================================== */
	close_toggle();
	$(window).resize(close_toggle); 
	$(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
	
	/* ==============================================
	WOW plugin triggers animation.css on scroll
	=============================================== */
	
	var wow = new WOW(
	  {
		boxClass:     'wow',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       150,          // distance to the element when triggering the animation (default is 0)
		mobile:       false        // trigger animations on mobile devices (true is default)
	  }
	);
	wow.init();
	
	
	/* ==============================================
	Fit Vids
	=============================================== */
	
	$(".fluid-width-video-wrapper").fitVids();

	/* ==============================================
	Skill Bars
	=============================================== */

	$('.skills-col').waypoint(function() {
	   jQuery('.skillbar').each(function(){
			jQuery(this).find('.skillbar-bar').animate({
				width:jQuery(this).attr('data-percent')
			},2000);
		});
		
		}, { offset: '100%' 
	});
	
	/* ==============================================
	Parallax
	=============================================== */
	$(window).stellar({ 
          horizontalScrolling: false,
		  verticalOffset: 40,
          responsive: true
	  });  
	  
	/* ==============================================
	Home Slider
	=============================================== */
	$("#slider-home").owlCarousel({
        navigation: false,
        pagination: false,
		autoPlay:5000,
        items: 1,
		transitionStyle : "fadeUp",
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
        navigationText: false
    });
	
	/* ==============================================
	Quotes Slider
	=============================================== */
	$("#quotes-slider").owlCarousel({
        navigation: false,
        pagination: false,
		autoPlay:5000,
        items: 1,
		transitionStyle : "fade",
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
        navigationText: false
    });
	
	/* ==============================================
	Testimonial Slider
	=============================================== */
	$("#testimonials-slider").owlCarousel({
        navigation: false,
        pagination: false,
		autoPlay:5000,
        items: 1,
		transitionStyle : "fade",
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
        navigationText: false
    });

	/* ==============================================
	Sclients Slider
	=============================================== */
	var clients_slider = $('#clients').bxSlider({
		pager: false,
		controls: false,
		minSlides: 2,
		maxSlides: 13,
		slideWidth: 235,
		ticker: true,
		speed: 40000
	});

	/* ==============================================
	Gallery Slider
	=============================================== */
	var gallery_slider = $('#gallery').bxSlider({
		pager: false,
		controls: false,
		minSlides: 5,
		maxSlides: 13,
		slideWidth: 235,
		ticker: true,
		speed: 40000
	});
	
	/* ==============================================
	On resize Clients and Gallery Slider
	=============================================== */
	$(window).resize(function(){
		clients_slider.reloadSlider();
		gallery_slider.reloadSlider();
	});
	
	/* ==============================================
	Contact Form
	=============================================== */
	$('#contactform').submit(function(){
		var action = $(this).attr('action');
		$("#message").slideUp(750,function() {
		$('#message').hide();
 		$('#submit')
			.after('<img src="img/ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');
		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			comments: $('#comments').val(),
		},
			function(data){
				if(data.match('success') != null) document.getElementById('message').innerHTML = "<p class='lead'><strong>Thank you.</strong><br>We have received your message and will be in touch with you shortly.</p>";
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);
		});
		return false;
	});
	
	/* ==============================================
	Google Maps
	=============================================== */

	Map.init();
	
	/* ==============================================
	Back to Top
	=============================================== */
	$(window).scroll(function(){
		if($(window).scrollTop() > 300){
			$("#back-to-top").fadeIn(600);
		} else{
			$("#back-to-top").fadeOut(600);
		}
	});
	
	$('#back-to-top, .back-to-top').click(function() {
		  $('html, body').animate({ scrollTop:0 }, '1000');
		  return false;
	});
	
	/* ==============================================
	Smooth scrolling to anchor for home buttons
	=============================================== */

	$(function() {
		$('.btn-home a,.move a,.goto-down').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 70
			}, 1000);
			event.preventDefault();
		});
	});

	/* ==============================================
	Smooth Scroll To Anchor
	=============================================== */
	$(function() {
		$('#main-nav a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 70
			}, 1000);
			event.preventDefault();
		});
	});

	$(function() {
		$('.footer-menu a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 70
			}, 1000);
			event.preventDefault();
		});
	});
		
	/* ==============================================
	Active Menu Item on Page Scroll
	=============================================== */   
	var sections = $('section')
	  , nav = $('nav')
	  , nav_height = nav.outerHeight();
	 
	$(window).on('scroll', function () {
	  var cur_pos = $(this).scrollTop();
	 
	  sections.each(function() {
		var top = $(this).offset().top - nav_height,
			bottom = top + $(this).outerHeight();
	 
		if (cur_pos >= top && cur_pos <= bottom) {
		  nav.find('a').removeClass('current');
		  sections.removeClass('current');
	 
		  $(this).addClass('current');
		  nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('current');
		}
	  });
	});

	/* ==============================================
	About us Intro blocks
	=============================================== */
	jQuery(function(t){
		t(".intro-blocks").each(function(){
			var e=t(this).fadeTo(0,0),
				o=e.length;
				t("li",e).each(function()
				{
					var i=t(this),n=t(".tile",i),s=t('<a href="#" class="trigger"></a>'),a=t(".intro-detail",i),r=t("> .row",a),c=500;
					s.appendTo(n).on(
					{
						click:function(o){
						o.preventDefault();
						var i=t(".tile.open",e),
						s=n[0]===i[0];
						i.length&&(i.trigger("close"),s)||n.trigger("open")
						}
					}),
					n.on({
					open:function()
						{
							if ($(window).width() <= 768) {
							}else{
							$('html, body').delay(600).animate({ scrollTop: $("#about-intro").offset().top -90}, 700);}
							var t=r.outerHeight();
							n.addClass("open"),
							a.css("z-index",o).animate({height:t,opacity:1},c),
							i.animate({marginBottom:t},c)
						},
						close:function(){
							a.css("z-index",0).animate({height:0,opacity:0},c,function(){n.removeClass("open")}),i.animate({marginBottom:0},c)
						}
					})
				}),
				e.addClass("vs-intro").fadeTo(250,1);
				var i,
					n=100,
					s=function(){t(".tile.open",e).trigger("open")};
					t(window).resize(function(){clearTimeout(i),i=setTimeout(s,n)})
			});
	});

	
}(jQuery));


function close_toggle() {
	if ($(window).width() <= 768) {
	  $('.navbar-collapse a').on('click', function(){
		  $('.navbar-collapse').collapse('hide');
	  });
	}
	else {
	 $('.navbar .navbar-default a').off('click');
	}
}






    



