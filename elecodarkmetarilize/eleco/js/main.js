$(function(){
	'use strict';

	// preloader
    $(".wrapper-load").fadeOut();

    // walkthrough
    $('.walkthrough-slider').carousel({
        indicators: true,
        duration: 120
    });

	// sidebar
	$(".side-left").sidenav();

    // sidebar search
    $(".side-search").sidenav({
        edge: 'right'
    });

    // sidebar cart
    $('.side-cart').sidenav({
        edge: 'right'
    });

    // slider home
    $(".slide-show-home").owlCarousel({
        items: 1,
        navigation: true,
        slideSpeed: 1000,
        dots: true,
        paginationSpeed: 400,
        singleItem: true,
        loop: true
    });

	// all slider
	$(".slide-show").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		dots: true,
		paginationSpeed: 400,
		singleItem: true,
		loop: true,
        autoplay: true
	});

    // carousel
    $(".slide-page").owlCarousel({
        items: 1,
        navigation: true,
        slideSpeed: 1000,
        dots: true,
        paginationSpeed: 400,
        singleItem: true,
        loop: true
    });    

	// modal
	$(".modal").modal();

	// tooltip
	$('.myTooltip').tooltip();

	// date
	$('.datepicker').datepicker();

	// testimonial
	$(".testimonial").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		dots: true,
		paginationSpeed: 400,
		singleItem: true,
		autoplay: true,
		loop: true
	});

	// product-d-slide
    $(".b-seller-slide").owlCarousel({
        items: 2,
        slideSpeed: 1000,
        dots: true,
        paginationSpeed: 400,
        loop: false,
        margin: 10
    });

    // product-d-slide
    $(".product-d-slide").owlCarousel({
        items: 1,
        slideSpeed: 1000,
        dots: true,
        paginationSpeed: 400,
        loop: false,
        margin: 10
    });

    // slide walkthrough
    $(".wt-slide").owlCarousel({
        items: 1,
        navigation: true,
        slideSpeed: 1000,
        dots: true,
        paginationSpeed: 400,
        singleItem: true,
        loop: false
    });
	
	// tabs
	$('ul.tabs').tabs();

	// collapse
	$('.collapsible').collapsible();

    // link back
	$('.link-back').on('click', function() {
        window.history.back();
        return false;
    });

    // link to chat detail
    $('.wrap-chat-l .content-text').on('click', function() {
        window.location='chat-detail.html'
    });

    // time picker
    $('.timepicker').timepicker({
        isOpen: true,
    });

    // select
    $('select').formSelect();


});