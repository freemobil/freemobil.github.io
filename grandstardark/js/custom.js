$(function(){
	'use-strict';

	// sidenav control left
	$(".sidenav-control-left").sideNav({
		edge: 'left',
		closeOnClick: false
	});

	// sidenav control right
	$(".sidenav-control-right").sideNav({
		edge: 'right',
		closeOnClick: false
	});

	// panel collapse icon
	$(document).on("click",".collapsible-header",function(e){
	    $(this).parent().siblings().find('span i').removeClass('fa-chevron-down')
		$(this).find('span i').toggleClass('fa-chevron-down')
	});

	// slick slider
	$('.slider-slick').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		autoplay: true
	});

	// go to back
	$('.go-to-back').on('click', function() {
        window.history.back()
    });

	// transition page
    $(".animsition").animsition({
	    inClass: 'fade-in',
	    outClass: 'fade-out',
	    inDuration: 1500,
	    outDuration: 800,
	    linkElement: '.animsition-link',
	    loading: true,
	    loadingParentElement: 'body',
	    loadingClass: 'animsition-loading',
	    loadingInner: '', // e.g '<img src="loading.svg" />'
	    timeout: false,
	    timeoutCountdown: 5000,
	    onLoadEvent: true,
	    browser: [ 'animation-duration', '-webkit-animation-duration'],
	    overlay : false,
	    overlayClass : 'animsition-overlay-slide',
	    overlayParentElement : 'body',
	    transition: function(url){ window.location.href = url; }
	});
	
	// faq collapse icon
	$(document).on("click",".faq-collapsible",function(e){
	    $(this).parent().siblings().find('i').removeClass('fa-minus')
		$(this).find('i').toggleClass('fa-minus')
	});

	// testimonial
	$(".testimonials").owlCarousel({
      	slideSpeed : 300,
      	paginationSpeed : 400,
      	singleItem: true,
  	});

	// tabs
	$('ul.tabs').tabs(); 

	// modal
	$('.modal').modal();

	// select
	$('select').material_select();

	// form date picker
	$('.datepicker').pickadate({
	    selectMonths: true, 
	    selectYears: 15
	});
  

});