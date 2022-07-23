$(function(){
	'use strict';

	var owl = $("owl-demo")

	// preloader
	$(".preloader").fadeOut();

	// sidebar
	$('.sidebar').sideNav();
    
	// slider
	$(".slide-show").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		dots: true,
		smartSpeed: 700,
		paginationSpeed: 400,
		singleItem: true,
		autoplay: true,
		loop: true
	});

	// filterizr
	$('.filtr-container').filterizr();

	// gallery filter
    $('.portfolio-menu li').click(function() {
        $('.portfolio-menu li').removeClass('active');
        $(this).addClass('active');
    });

	// testimonial
	$('.testimonial').owlCarousel({
		items: 1,
		autoplay: true
	})

	// tabs
	$('ul.tabs').tabs();

	// collapse
	$('.collapsible').collapsible();

	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: false, // Does not change width of dropdown to that of the activator
		hover: false, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left', // Displays dropdown with edge aligned to the left of button
		stopPropagation: false // Stops event propagation
		
		}
	);

});