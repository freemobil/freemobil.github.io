$(function(){
	"use strict";

	// preloader
	$(".preloader").fadeOut();

	// sidebar
	$(".sidebar").sideNav({
		edge: "left"
	});

	// slider
	$(".slider-slide").owlCarousel({
		items: 1,
		slideSpeed: 1000,
		dots: true,
		paginationSpeed: 400,
		singleItem: true,
		loop: true,
		autoplay: true,
		margin: 10
	});

	// modal
	$(".modal").modal();

	// testimonial
	$(".testimonial-slide").owlCarousel({
		items: 1,
		loop: false
	});

});