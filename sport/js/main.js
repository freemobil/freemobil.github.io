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
	$(".slider").slider({full_width: true});

	// Carousel Info
	$("#carousel-info").owlCarousel({

		autoPlay : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		items : 2,
		itemsMobile : 2, 
		navigation : true,
		navigationText : ["",""]

	})

	// testimonial
	$("#owl-testimonial").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// image-popup
    $(".image-popup").magnificPopup({
        type: "image",
        removalDelay: 300,
        mainClass: "mfp-fade"
    });


	// loader
    $("#fakeLoader").fakeLoader({
      
      zIndex: 999,
      spinner: 'spinner1',
      bgColor: '#ffffff'

    });

    $('.collapsible').collapsible({
		accordion: false
	});

});