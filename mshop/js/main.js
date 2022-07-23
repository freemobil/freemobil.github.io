$(function(){
	'use-strict';

	// side nav left
	$(".side-nav-left").sideNav({

		edge: 'left',
		closeOnClick: false

	});

	// side nav right
	$(".side-nav-right").sideNav({
		
		edge: 'right',
		closeOnClick: false

	});

	// slider
	$('.slider').slider({full_width: true});

	// tabs
	$('ul.tabs').tabs();

	// checkout collapse
	$('.collapsible').collapsible({
		accordion: false
	});
	

});