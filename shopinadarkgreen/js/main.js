$(function(){
	'use strict';

	// preloader
	$("#preloader").fadeOut();

	// sidebar left
	$('.ui.sidebar-left')
		.sidebar('attach events', '.navbar-toggle-left')
		.sidebar('setting', 'transition', 'scale down')
	;

	// sidebar search
	$('.ui.search')
		.sidebar('attach events', '.navbar-toggle-search')
		.sidebar('setting', 'transition', 'scale down')
	;

	// sidebar cart
	$('.ui.cart')
		.sidebar('attach events', '.navbar-toggle-cart')
		.sidebar('setting', 'transition', 'scale down')
	;

	// slider
	$(".slider-show").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		dots: true,
		paginationSpeed: 400,
		singleItem: true,
		autoplay: true
	});

	// product details slide
	$(".slide-product").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		nav: true,
		paginationSpeed: 400,
		singleItem: true
	});

	// testimonial
	$(".testimonial").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		dots: true,
		paginationSpeed: 400,
		singleItem: true,
		autoplay: true,
	});

	// tab
	$('.menu .item').tab();

	// accordion
	$('.ui.accordion').accordion();

});