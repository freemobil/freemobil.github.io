$(function(){
	'use-strict';

	// side nav left
	$(".side-nav-left").sideNav({

		edge: 'left',
		closeOnClick: false

	});

	// slider
	$(".slider").slider({full_width: true});

	// testimonial
	$("#owl-testimonial").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// review
	$("#owl-review-users").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// loader
    $("#fakeLoader").fakeLoader({
      
      zIndex: 999,
      spinner: 'spinner1',
      bgColor: '#ffffff'

    });

    $('.collapsible').collapsible({
		accordion: false
	});

	// date picker
	$('.datepicker').pickadate({
	    selectMonths: true, 
	    selectYears: 15
	});

	// form select
	$('select').material_select();

});