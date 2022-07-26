/*

	Uncle Hummer Main Java Script

	- - - - Contents - - - -
	
	01 - Sliders
	
	01 - 01 - Main Slider Settings
	01 - 02 - Before After Slider
	01 - 03 - Blog post slider
	01 - 04 - Partners slider
	01 - 05 - Services slider
	01 - 06 - Featured work slider	
	01 - 07 - Project page slider
	01 - 08 - Reviews slider
	
	02 - Smooth scrolling
	03 - Magnific Popup
	04 - Fading divs
	05 - FitText
	06 - Contactform
	07 - Menu toggle
	08 - Fixed menu
	09 - Equal height
	10 - Html IMG to CSS Background-Image

	- - - - - - - - - - - -
	
*/	


"use strict";


// 01 - Sliders

// 01 - 01 - Main Slider Settings

$(document).on("animating.slides", function(a){
// Special fix if we want to display FitText headings
setTimeout(function () {
   'use strict';
		$("h1.fittext").fitText(1, { minFontSize: "50px", maxFontSize: "100px" });
		$("h2.fittext").fitText(1, { minFontSize: "40px", maxFontSize: "80px" });
		$("h3.fittext").fitText(1, { minFontSize: "30px", maxFontSize: "60px" });
		$("h4.fittext").fitText(1, { minFontSize: "20px", maxFontSize: "40px" });
		$("h5.fittext").fitText(1, { minFontSize: "15px", maxFontSize: "30px" });
		$("h6.fittext").fitText(1, { minFontSize: "10px", maxFontSize: "20px" });
}, 100)
});

// Fullscreen content and background slider / fader
$("#slides").superslides({
	// play: 6000,
	animation: "fade", // Choose between slide or fade
	pagination: true // Choose between true or false
});

// 01 - 02 - Before After Slider

window.onload = function () {
		  $('.ba-slider').beforeAfter();
	  }
	  
$(function () {
   'use strict';
$('#container').beforeAfter();
$('#container1').beforeAfter();

});


// 01 - 03 - Blog post slider
$(window).load(function () {
   'use strict';
	$('#blog-single').carouFredSel({
		circular: true,  
		direction: "left", 
		auto: true,
		swipe: {
			onTouch: true,
			onMouse: false
		},
		prev: '',
		next: '',
		responsive: true,
		width: '100%',
		height: '100%',
		scroll : {
			fx              : "fade",
            items           : 1,
            easing          : "linear",
            duration        : 650,                         
            pauseOnHover    : true
        },
		items: {
			width: '',
			height: ''
		}
	});
});

// 01 - 04 - Partners slider
$(window).load(function () {
   'use strict';
	$('#partners-slider').carouFredSel({
		auto: false,
		swipe: {
			onTouch: true,
			onMouse: false
		},
		prev: '#partners-prev',
		next: '#partners-next',
		responsive: true,
		width: '100%',
		height: 'variable', 
		scroll: 1,
		items: {
			width: 360,
			visible: {
				min: 1,
				max: 4
			}
		}
	});
});

// 01 - 05 - Services slider
$(window).load(function () {
   'use strict';
	$('#services-slider').carouFredSel({
		auto: false,
		swipe: {
			onTouch: true,
			onMouse: false
		},
		prev: '#services-prev',
		next: '#services-next',
		responsive: true,
		width: '100%',
		height: 'variable', 
		scroll: 1,
		items: {
			width: 360,
			height: 'variable',
			visible: {
				min: 1,
				max: 3
			}
		}
	});
});

// 01 - 06 - Featured work slider
$(window).load(function () {
   'use strict';
	$('#featured-work-slider').bxSlider({
		auto: false,
		mode: 'fade',
		pager: true,
		controls: true,
		nextText: '',
		prevText: ''
	});
	});
	
	
// 01 - 07 - Project page slider
$(window).load(function () {
   'use strict';
	$('#project-page-slider').bxSlider({
		auto: false,
		mode: 'fade',
		pager: true,
		controls: true,
		nextText: '',
		prevText: ''
	});
	});


// 01 - 08 - reviews slider
$(window).load(function () {
   'use strict';
	var reviewsslider = $('#reviews-slider').bxSlider({
		auto: true,
		responsive: true,
		adaptiveHeight: true,
		mode: 'fade',
		pager: false,
		controls: false
	});

	$('#reviews-next').click(function () {
   'use strict';
		reviewsslider.goToNextSlide();
		return false;
	});

	$('#reviews-prev').click(function () {
   'use strict';
		reviewsslider.goToPrevSlide();
		return false;
	});
	
});




// 02 - Smooth scrolling - Smooth scroll after clicking an element with the class 'smoothscroll'
$(function () {
   'use strict';
	$('.smoothscroll').bind('click.smoothscroll',function (e){
		e.preventDefault();

        var target = this.hash,
        $target = $(target);

        $('html, body').stop().animate({
			'scrollTop': $target.offset().top-0
        }, 900, 'swing', function () {
			window.location.hash = target;
		});
	});
});


// 03 - Popup for images
$('.popup, popup-image').magnificPopup({ 
	type: 'image',
	fixedContentPos: false,
	fixedBgPos: false,
	mainClass: 'mfp-no-margins mfp-with-zoom',
	image: {
		verticalFit: true
	},
	zoom: {
		enabled: true,
		duration: 300
	}
});

// Popup for soundcloud
$('.popup-soundcloud').magnificPopup({ 
	type: 'iframe',
	mainClass: 'soundcloud-popup'
});

// Popup for videos and google maps
$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
	disableOn: 700,
	type: 'iframe',
	fixedContentPos: false,
	fixedBgPos: false,
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false
});

// Popup for a normal inline element
$('.popup-inline').magnificPopup({
	type: 'inline'
});

// Popup for a project with rich content
$('.popup-project').magnificPopup({
	type: 'inline',
	alignTop: true
});

// Popup for an ajax popup without rich content
$('.popup-ajax').magnificPopup({
	type: 'ajax',
	alignTop: true
});



// 04 - Fading divs - Fade a div except the one that's hovered
if($('html').hasClass('no-touch')){
	$('.portfolio-thumb, .image-thumb, .service-item').hover(function () {
   'use strict';
		$(this).siblings().addClass('fade');
	}, function(){
		$(this).siblings().removeClass('fade');
	});
}

// 05 - FitText
$(window).load(function () {
   'use strict';
	setTimeout(function () {
   'use strict';
		$('h1.fittext').fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		$('h2.fittext').fitText(1, { minFontSize: '40px', maxFontSize: '80px' });
		$('h3.fittext').fitText(1, { minFontSize: '30px', maxFontSize: '60px' });
		$('h4.fittext').fitText(1, { minFontSize: '20px', maxFontSize: '40px' });
		$('h5.fittext').fitText(1, { minFontSize: '15px', maxFontSize: '30px' });
		$('h6.fittext').fitText(1, { minFontSize: '10px', maxFontSize: '20px' });
	}, 200);
});

$('h1.fittext').fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
$('h2.fittext').fitText(1, { minFontSize: '40px', maxFontSize: '80px' });
$('h3.fittext').fitText(1, { minFontSize: '30px', maxFontSize: '60px' });
$('h4.fittext').fitText(1, { minFontSize: '20px', maxFontSize: '40px' });
$('h5.fittext').fitText(1, { minFontSize: '15px', maxFontSize: '30px' });
$('h6.fittext').fitText(1, { minFontSize: '10px', maxFontSize: '20px' });



// 06 - Contactform
$(function () {
   'use strict';

	$('#contactform').submit(function () {
   'use strict';

		var action = $(this).attr('action');

		$('#message').slideUp(300,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="images/status.gif" class="loader">')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			subject: $('#subject').val(),
			comments: $('#comments').val(),
			verify: $('#verify').val()
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown(300);
				$('#contactform img.loader').fadeOut(300,function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp(300);
			}
		);

		});

		return false;

	});

});


// 07 - Menu toggle
$(function () {
   'use strict';
    $('#toggle').click(function (e){
		e.stopPropagation();
    });
	$('html').click(function (e){
		if (!$('.toggle').is($(e.target))){
			$('#toggle').prop("checked", false);
		}
	});
});


// 08 - Fixed menu - Fix the menu to the top after you scroll past it
$(window).load(function () {
   'use strict';
	'use strict';
	$(".fixedmenu").sticky({ topSpacing: 0 });
});


/* 09 - Use the .equal class on a row if you want the columns to be equal in height */
$(document).ready(function () {
   'use strict';
	$('.equal').children('.columns').equalizeHeight();
	$(window).resize(function () {
   'use strict';
			$('.equal').children('.columns').equalizeHeight();
	})
})



/* 10 - Html IMG to CSS Background-Image */
	
$(function () {
   'use strict';


		
		$("img.slides-fullscreen-img").each(function(i, elem) {
          var img = $(elem);
          var div = $("<div />").css({
            background: "url(" + img.attr("src") + ") no-repeat",
            width: img.width() + "px",
            height: img.height() + "px"
          });
              
          // div.html(img.attr("alt"));
          div.addClass("slides-fullscreen-img");
            
          img.replaceWith(div);
        });

});


