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
	$(".testimonial-slide").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// clients
	$(".my-clients").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		itemsMobile : 2

	})

	
	// latest-news
	$(".latest-news-owl").owlCarousel({

		autoPlay : false,
		singleItem: true

	})

	// loader
	$(window).on('load', function(){
		
		$('#fakeLoader').fakeLoader({
	      
	      	zIndex: 999,
	      	spinner: "spinner3",
	      	bgColor: "#ffffff"

	    });
	});


});