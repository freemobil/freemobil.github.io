/*------------------------------------------------------------------
jQuery document ready
-------------------------------------------------------------------*/
$(document).ready(function () {
	"use strict";
	
	var pageid = $('.page').data("page");
	

	$( "#panel-left" ).load( "panel-left.html", function() {
		var swipersubnav = new Swiper ('.multinav', {
			direction: 'horizontal',
			effect: 'slide',
			slidesPerView: 1,
			slidesPerGroup: 1
		}); 
		swipersubnav.on('slideChangeTransitionEnd', function () {
			$(".panel").animate({ scrollTop: 0 }, "slow");
		});
		$(".opensubnav").on('click', function(e) { 
			swipersubnav.slideTo(1);
		});
		$(".opensubsubnav").on('click', function(e) { 
			swipersubnav.slideTo(2);
		});
		$(".backtonav").on('click', function(e) { 
			swipersubnav.slideTo(0);
		});
		$(".backtosubnav").on('click', function(e) { 
			swipersubnav.slideTo(1);
		});
	});
	$( "#panel-right" ).load( "panel-right.html" );
	$( "#panel-bottom" ).load( "panel-bottom.html", function() {
		var swipernav = new Swiper ('.swiper-toolbar', {
			direction: 'horizontal',
			effect: 'slide',
			slidesPerView: 1,
			slidesPerGroup: 1,
			spaceBetween: 1,
			pagination: {
			el: '.swiper-pagination-toolbar'
			}
		});
	});
	
	$( "#popup-login" ).load( "popup-login.html" );
	$( "#popup-signup" ).load( "popup-signup.html" );
	$( "#popup-forgot" ).load( "popup-forgot-password.html" );
	$( "#popup-social" ).load( "popup-social-share.html" );
	
	$( "#header-page" ).load( "header-page.html" );
	
	
	$("#mobile_wrap").on('click', '.open-panel' ,function(){
	    var panelPosition = $(this).data("panel");	
		var panel = $('.panel-' + panelPosition);
		var panelOverlay = $('.panel-overlay');
		panel.addClass('active');
		panelOverlay.css({display: 'block'}).addClass('active');
		$('body').addClass('with-panel-' + panelPosition + '-reveal');
		$(".panel-overlay").on('click', function(e) { 
		    panel.css({display: ''}).removeClass('active');
			$(this).css({display: ''}).removeClass('active');
			$('body').addClass('panel-closing').removeClass('with-panel-' + panelPosition + '-reveal');	
			$("#bottom-menu-icon").removeClass('open');
		});
		
	});
	
	
	$("#mobile_wrap").on('click', '.open-popup' ,function(){
	    var popupClass = $(this).data("popup");
		var popup = $(popupClass);
		popup.css({display: 'block'}).addClass('active');
		$("#RegisterForm").validate();
		$("#LoginForm").validate();
		$("#ForgotForm").validate();
	});
	$("#mobile_wrap").on('click', '.close-popup' ,function(){
		var popupClassclose = $(this).data("popup");
		var popupclose = $(popupClassclose);
		popupclose.removeClass('active');	
		$("label.error").hide();
	});
	$("#mobile_wrap").on('click', '#bottom-menu-icon' ,function(){
		$(this).toggleClass('open');
	});

	


	
	
/*-------------- Page Index----------- */
   if (pageid == 'index') {
		var swiperslider = new Swiper ('.introslider', {
			direction: 'horizontal',
			effect: 'slide',
			parallax: true,
			pagination: {
			el: '.swiper-pagination'
			},
			navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
			}
		}); 
 
		$(".close_info_popup").on('click', function(e) { 
			$('.info_popup').fadeOut(500);						  
		});
   }
/*-------------- Page About----------- */
   if (pageid == 'about') {
		var swipersliderpage = new Swiper ('.swiper-container-pages', {
			direction: 'horizontal',
			effect: 'slide',
			parallax: true,
			pagination: {
			el: '.swiper-pagination'
			},
			navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
			}
		});  
   }
/*-------------- Page Blog----------- */
   if (pageid == 'blog') {
		var swipersliderblog = new Swiper ('.swipeout', {
			direction: 'horizontal',
			effect: 'slide'
		}); 
		$(".posts li").hide();	
		var size_li = $(".posts li").length;
		var nrposts = 4;
		$('.posts li:lt('+nrposts+')').show();
		$("#loadMore").on('click', function(e) { 	
			nrposts= (nrposts+1 <= size_li) ? nrposts+1 : size_li;
			$('.posts li:lt('+nrposts+')').show();
			if(nrposts == size_li){
				$('#loadMore').hide();
				$('#showLess').show();
			}
		});
   }
/*-------------- Page Blog Single----------- */
   if (pageid == 'blogsingle') {
		var swipersliderpage = new Swiper ('.swiper-container-pages', {
			direction: 'horizontal',
			effect: 'slide',
			parallax: true,
			pagination: {
			el: '.swiper-pagination'
			}
		}); 
	
   }
/*-------------- Page Photos----------- */
   if (pageid == 'photos') {
    var $gallery = $('.photo_gallery_13 a').simpleLightbox({
		overlay: true,
		captions: true,
		captionSelector: "self", 
		captionsData : "title",
		captionType: "attr"
	});
	$("a.switcher").bind("click", function(e){
		e.preventDefault();
		
		var theid = $(this).attr("id");
		var theproducts = $("ul#photoslist");
		var classNames = $(this).attr('class').split(' ');
		
		
		if($(this).hasClass("active")) {
			// if currently clicked button has the active class
			// then we do nothing!
			return false;
		} else {
			// otherwise we are clicking on the inactive button
			// and in the process of switching views!

  			if(theid == "view13") {
				$(this).addClass("active");
				$("#view11").removeClass("active");
				$("#view11").children("img").attr("src","images/switch_11.png");
				
				$("#view12").removeClass("active");
				$("#view12").children("img").attr("src","images/switch_12.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_13_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_11");
				theproducts.removeClass("photo_gallery_12");
				theproducts.addClass("photo_gallery_13");

			}
			
			else if(theid == "view12") {
				$(this).addClass("active");
				$("#view11").removeClass("active");
				$("#view11").children("img").attr("src","images/switch_11.png");
				
				$("#view13").removeClass("active");
				$("#view13").children("img").attr("src","images/switch_13.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_12_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_11");
				theproducts.removeClass("photo_gallery_13");
				theproducts.addClass("photo_gallery_12");

			} 
			else if(theid == "view11") {
				$("#view12").removeClass("active");
				$("#view12").children("img").attr("src","images/switch_12.png");
				
				$("#view13").removeClass("active");
				$("#view13").children("img").attr("src","images/switch_13.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_11_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_12");
				theproducts.removeClass("photo_gallery_13");
				theproducts.addClass("photo_gallery_11");

			} 
			
		}

	});	 
}
/*-------------- Page Videos----------- */
   if (pageid == 'videos') {
		$(".videocontainer").fitVids();
	
   }
/*-------------- Page Audio----------- */
   if (pageid == 'music') {
		  audiojs.events.ready(function() {
			var as = audiojs.createAll();
		  });
   }   
/*-------------- Page Team----------- */
   if (pageid == 'team') {
		var swipersliderteam = new Swiper ('.swiper-container-team', {
			direction: 'horizontal',
			effect: 'slide',
			slidesPerView: 2,
			spaceBetween: 10,
			pagination: {
			el: '.swiper-pagination-team'
			}
		});
		
		var swipersliderteam = new Swiper ('.swiper-container-teambigger', {
			direction: 'horizontal',
			effect: 'slide',
			slidesPerView: 1,
			spaceBetween: 0,
			pagination: {
			el: '.swiper-pagination-teambigger'
			}
		}); 
   }
/*-------------- Page Shop----------- */
   if (pageid == 'shop') {
		$(".qntyplusshop").on('click', function(e) { 							  
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
			
		});
		$(".qntyminusshop").on('click', function(e) { 
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal) && currentVal > 0) {
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
		});	
   } 
/*-------------- Page Shop Item details----------- */
   if (pageid == 'shopitem') {
		$(".qntyplusshop").on('click', function(e) { 							  
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
			
		});
		$(".qntyminusshop").on('click', function(e) { 
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal) && currentVal > 0) {
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
		});
		
		var $gallery = $('.shop_thumb_gallery a').simpleLightbox({
			overlay: true,
			captions: true,
			captionSelector: "self", 
			captionsData : "title",
			captionType: "attr"
		});	
   } 
/*-------------- Page Shop Cart----------- */
   if (pageid == 'cart') {
		
		$(".qntyplus").on('click', function(e) { 								  
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
			
		});
		$(".qntyminus").on('click', function(e) { 		
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal) && currentVal > 0) {
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
		});
		$(".item_delete").on('click', function(e) { 	
			e.preventDefault();
			var currentVal = $(this).attr('id');
			$('div#'+currentVal).fadeOut('slow');
		});
   } 
/*-------------- Page Contact----------- */
   if (pageid == 'contact') {
		$("#ContactForm").validate({
		submitHandler: function(form) {
		ajaxContact(form);
		return false;
		}
		});	
   } 
   
});