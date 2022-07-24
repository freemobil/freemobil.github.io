$(function(){
	'use strict';

	// preloader
	$(".preloader").fadeOut();

	// sidebar
	$('.sidebar').sideNav({
		edge: 'left'
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
	
	// tabs
	$('ul.tabs').tabs();

	// collapse
	$('.collapsible').collapsible();

	// modal
	$(".modal").modal();

});