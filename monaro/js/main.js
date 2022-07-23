$(function(){
	"use strict";

	// preloader
	$(".preloader").fadeOut();

	// sidebar
	$(".sidebar").sideNav({
		edge: "left"
	});

	// sidebar right
	$(".sidebar-right").sideNav({
		edge: "right"
	});

	// slider
	$(".slide-show").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		dots: true,
		paginationSpeed: 400,
		singleItem: true,
		loop: true
	});
	
	// collapse
	$('.collapsible').collapsible();

	// testimonial
	$(".testimonial-slide").owlCarousel({
		items: 1,
	});

	// collapsible
 	$(".collapsible-header").on('click', function(e) {
        $(".collapsible-header").hasClass("active")
    });

    // date booking
    $('.datepicker').pickadate();

});