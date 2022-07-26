$(document).ready(function(){

//------------------------------------- Navigation setup ------------------------------------------------//

//-------------Highlight the current section in the navigation bar------------//
var sections = $("section");
	var navigation_links = $("#mainNav a");
	
	sections.waypoint({
		handler: function(event, direction) {
		
			var active_section;
			active_section = $(this);
			if (direction === "up"){
				active_section = active_section.prev();
				}
 
			
			var active_link = $('#mainNav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.removeClass("active");
			active_link.addClass("active");
			
			
	

		},
		offset: '35%'
	});


//------------------------------------- End navigation setup ------------------------------------------------//
		
		$('#clientHolder .slides li a').css({opacity:0.4});
		$('#clientHolder .slides li a').hover( function(){ 
			$(this).animate({ opacity: 1 }, 'fast');
		}, function(){ 
			$(this).animate({ opacity: 0.4 }, 'slow'); 
		});

//--------------------------------- Hover animation for the elements of the portfolio --------------------------------//
				
				
				$(".link").css({ opacity: 0 });
				$('.work, .item').hover( function(){ 
					$(this).children('.link').animate({ opacity: 0.90 }, 'fast');
				}, function(){ 
					$(this).children('.link').animate({ opacity: 0 }, 'slow'); 
				}); 
				
			

//--------------------------------- End hover animation for the elements of the portfolio --------------------------------//

//-----------------------------------Initilaizing fancybox for the portfolio-------------------------------------------------//

	$('.portfolio a.folio').fancybox({
					'overlayShow'	: true,
					'opacity'		: true,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'none',
					'overlayOpacity'	:   0.8
				});
				
//-----------------------------------End initilaizing fancybox for the portfolio-------------------------------------------------//

	//--------------------------------- Sorting portfolio elements with quicksand plugin  --------------------------------//
	
		var $portfolioClone = $('.portfolio').clone();

		$('.filter a').click(function(e){
			$('.filter li').removeClass('current');	
			var $filterClass = $(this).parent().attr('class');
			if ( $filterClass == 'all' ) {
				var $filteredPortfolio = $portfolioClone.find('li');
			} else {
				var $filteredPortfolio = $portfolioClone.find('li[data-type~=' + $filterClass + ']');
			}
			$('.portfolio').quicksand( $filteredPortfolio, { 
				duration: 800,
				easing: 'easeInOutQuad' 
			}, function(){
					$('.work, .item').hover( function(){ 
						$(this).children('.link').animate({ opacity: 0.90 }, 'fast');
					}, function(){ 
						$(this).children('.link').animate({ opacity: 0 }, 'slow');
					}); 


//------------------------------ Reinitilaizing fancybox for the new cloned elements of the portfolio----------------------------//

				$('.portfolio a.folio').fancybox({
								'overlayShow'	: true,
								'opacity'		: true,
								'transitionIn'	: 'elastic',
								'transitionOut'	: 'none',
								'overlayOpacity'	:   0.8
							});

//-------------------------- End reinitilaizing fancybox for the new cloned elements of the portfolio ----------------------------//

			});


			$(this).parent().addClass('current');
			e.preventDefault();
		});

//--------------------------------- End sorting portfolio elements with quicksand plugin--------------------------------//


//---------------------------------- Testimonials-----------------------------------------//
$('#testimonial').slides({
	preload: false,
	generateNextPrev: false,
	play: 4500,
	container: 'testimoniaContainer'
});
//---------------------------------- End testimonials-----------------------------------------//


//---------------------------------- Form validation-----------------------------------------//


$('#submit').click(function(){ 

	$('input#name').removeClass("errorForm");
	$('textarea#message').removeClass("errorForm");
	$('input#email').removeClass("errorForm");
	
	var error = false; 
	var name = $('input#name').val(); 
	if(name == "" || name == " ") { 
		error = true; 
		$('input#name').addClass("errorForm");
	}
	
	
		var msg = $('textarea#message').val(); 
		if(msg == "" || msg == " ") {
			error = true;
			$('textarea#message').addClass("errorForm");
			
		}
	
	var email_compare = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i; 
	var email = $('input#email').val(); 
	if (email == "" || email == " ") { 
		$('input#email').addClass("errorForm");
		error = true;
	}else if (!email_compare.test(email)) { 
		$('input#email').addClass("errorForm");
		error = true;
	}

	if(error == true) {
		return false;
	}

	var data_string = $('.contactForm form').serialize(); 
	

	$.ajax({
		type: "POST",
		url: $('.contactForm form').attr('action'),
		data: data_string,
		timeout: 6000,
		error: function(request,error) {
			if (error == "timeout") {
				$('#err-timedout').fadeIn('slow');
			}
			else {
				$('#err-state').fadeIn('slow');
				$("#err-state").html('An error occurred: ' + error + '');
			}
		},
		success: function() {
				$('#success').fadeIn('slow');
					}
	});

	return false; 
});
//---------------------------------- End form validation-----------------------------------------//



//--------------------------------- To the top handler --------------------------------//

$().UItoTop({ easingType: 'easeOutQuart' });

//--------------------------------- End to the top handler --------------------------------//


//--------------------------------- Mobile menu handler --------------------------------//

selectnav('naviRegular', {
  label: false,
  nested: true,
  indent: '-'
});


//--------------------------------- End mobile menu handler --------------------------------//

//--------------------------------- Site sliders --------------------------------//


$('#clientHolder').flexslider({
    animation: "slide",
    animationLoop: true,
	slideshow: false,
    itemWidth: 230,
	minItems: 2,
	maxItems: 4,
	itemMargin:5
});

$('#postSlider, #latest').flexslider({
    animation: "slide",
	slideshow: false,
	minItems: 1,
	maxItems: 1,
});

//--------------------------------- End site sliders --------------------------------//



//---------------------------------- Skill bar animation ----------------------------------------//


$('.percent90').stop().animate({width : '90%'}, 1000, 'easeOutQuint');
$('.percent95').stop().animate({width : '95%'}, 1000, 'easeOutQuint');
$('.percent60').stop().animate({width : '70%'}, 1000, 'easeOutQuint');
$('.percent50').stop().animate({width : '60%'}, 1000, 'easeOutQuint');

//---------------------------------- End skill bar animation ----------------------------------------//



//---------------------------------- Flickr stream ----------------------------------------//

$('ul.flickr').jflickrfeed({
	    limit: 10,
		cleanDescription: true,
    qstrings: {
	        id: '99650385@N07'
	    },
	    itemTemplate: '<li>	<a href="{{image_b}}"><img alt="{{title}}" src="{{image_s}}" /></a></li>'

});

//---------------------------------- End flickr stream ----------------------------------------//


		
});

//--------------------------------- Twitter feed --------------------------------//

window.onload=function(){

	jQuery(".icon-twitter-bird-footer, .widgetTweets, .footerTweets").tweet({
	  join_text: false,
	  username: "BenaissaGhrib", // Change username here
	  modpath: './twitter/',
	  avatar_size: false,
	  count: 2,
	  auto_join_text_default: ' we said, ',
	  auto_join_text_ed: ' we ',
	  auto_join_text_ing: ' we were ',
	  auto_join_text_reply: ' we replied to ',
	  auto_join_text_url: ' we were checking out ',
	  loading_text: 'Loading tweets...'

	});

};
//--------------------------------- End twitter feed --------------------------------//