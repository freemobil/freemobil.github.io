$(function(){
    'use-strict';

	// Initialize your app
	var myApp = new Framework7({
		onPageInit: function (app, page) {
		    if (page.name === 'home') {
		    	
		    	// slick slider
			    $('.slider-slick').slick({
			        dots: true,
			        infinite: true,
			        speed: 300,
			        slidesToShow: 1,
			        autoplay: true
			    });

			    // portfolio
			    $(document).on("click",".portfolio-filter li",function() {
			        $('.portfolio-filter li').removeClass('active');
			        $(this).addClass('active');
			    });

			    $('.portfolio-item').filterizr(); 

			    // testimonial
			    $("#testimonial").owlCarousel({
			 
			        slideSpeed : 300,
			        paginationSpeed : 400,
			        singleItem: true,

			    });

		    }
	    }

	});

	// Export selectors engine
	var $$ = Dom7;

	// Add view
	var mainView = myApp.addView('.view-main', {
	    // Because we use fixed-through navbar we can enable dynamic navbar
	    dynamicNavbar: true
	});

});
