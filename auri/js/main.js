$(function(){
	'use-strict';

	// body
	$("body").addClass('all-loaded'); 

	// side nav left
	$(".side-nav-left").sideNav({

		edge: 'right',
		closeOnClick: false

	});

	// menu cart
	$("#cart-menu").animatedModal();
	
	// menu nav
	$("#nav-menu").animatedModal({
		modalTarget: 'animatedModal2'
	});


	// slider
	$(".slider").slider({full_width: true});


	// screenshot
	$(".screenshot-content").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// testimonial
	$("#owl-testimonial").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// latest-news
	$(".latest-news-owl").owlCarousel({

		autoPlay : false,
		singleItem: true

	})

	// loader
    $("#fakeLoader").fakeLoader({
      
      zIndex: 999,
      spinner: 'spinner5'

    });

    // collapsible
    $('.collapsible').collapsible({
		accordion: false
	});

    // select
    $('select').material_select();

    // image-popup
    $(".image-popup").magnificPopup({
        type: "image",
        removalDelay: 300,
        mainClass: "mfp-newspaper"
    });

});