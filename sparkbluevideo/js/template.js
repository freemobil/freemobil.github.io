


//Preloader


	$(window).load(function() {
		$("#status").fadeOut();
		$("#preloader").delay(350).fadeOut("slow");
	}) 

	
	
	
//Home Background Video	
	
		jQuery(function(){

            jQuery(".player").mb_YTPlayer();
		});
	
	
//Home fit screen	
	
	
	/*global $:false */
	$(function(){"use strict";
		$('.home-top').css({'height':($(window).height())+'px'});
		$(window).resize(function(){
		$('.home-top').css({'height':($(window).height())+'px'});
		});
	});


//Navigation		

			var currentIndex = 0;
			var currentId = "home";
			$(document).ready(function() {
				$("#nav").ferroMenu({
					position 	: "left-top",
					delay 		: 50,
					rotation 	: 720,
					radius      : 140,
					margin		: 20
				});
			});
			
			var colors = {
					"home" : {
						"background" : "",
						"index" : 0
					},
					"about" : {
						"background" : "",
						"index" : 1
					},
					"services" : {
						"background" : "",
						"index" : 2
					},
					"folio" : {
						"background" : "",
						"index" : 3
					},
					"contact" : {
						"background" : "",
						"index" : 4
					}
					
			};
			
			function goTo(id){
				var obj = eval("colors."+id);
				
				$("body").css("background",obj.background);
				$("#ferromenu-controller,#nav li a").css("color",obj.background);
				if(obj.index > currentIndex){
					$(".active").addClass("off");
					$(".active").transition({
						x : -100,
						opacity : 0,
						zIndex : 0
					},600);
					
					$("#"+currentId).removeClass("active");
					
					$("#"+id).addClass("active");
					$("#"+id).transition({
						x : 400
					},0,function(){
						$("#"+id).removeClass("off");
						$("#"+id).transition({
							x : 0,
							opacity : 1,
							zIndex : 2
						},600);
					});
				}else if(obj.index < currentIndex){
					$(".active").addClass("off");
					$(".active").transition({
						x : 100,
						opacity : 0,
						zIndex : 0
					},600);
					$("#"+currentId).removeClass("active");
					
					
					$("#"+id).addClass("active");
					$("#"+id).transition({
						x : -400
					},0,function(){
						$("#"+id).removeClass("off");
						$("#"+id).transition({
							x : 0,
							opacity : 1,
							zIndex : 2
						},600);
					});
				}
				currentIndex = obj.index;
				currentId = id;
				
			}	
	
//Home text rotator	
	
$(".rotator > div:gt(0)").hide();
setInterval(function() { 
  $('.rotator > div:first')
    .fadeOut(0)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('.rotator');
},  3000);
	


	
	
	
//Colorbox single project pop-up

$(document).ready(function(){
$(".iframe").colorbox({iframe:true, width:"100%", height:"100%"});	
});

$(".group1").colorbox({rel:'group1'});		
	
	


//Portfolio filter	

	

jQuery(document).ready(function () { 
	(function ($) { 
	
	
		var container = $('.all-works');
		
		
		function getNumbColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1500) {
				columnNumb = 3;
			} else if (winWidth > 1200) {
				columnNumb = 3;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 600) {
				columnNumb = 1;
			} else if (winWidth > 300) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}
		
		
		function setColumnWidth() { 
			var winWidth = $(window).width(), 
				columnNumb = getNumbColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);

		}
		
		$('#portfolio-filter #filter a').click(function () { 
			var selector = $(this).attr('data-filter');
			
			$(this).parent().parent().find('a').removeClass('current');
			$(this).addClass('current');
			
			container.isotope( { 
				filter : selector 
			});
			
			setTimeout(function () { 
				reArrangeProjects();
			}, 300);
			
			
			return false;
		});
		
		function reArrangeProjects() { 
			setColumnWidth();
			container.isotope('reLayout');
		}
		
		
		container.imagesLoaded(function () { 
			setColumnWidth();
			
			
			container.isotope( { 
				itemSelector : '.one-work', 
				layoutMode : 'masonry', 
				resizable : false 
			} );
		} );
		
		
	
		
	
		$(window).on('debouncedresize', function () { 
			reArrangeProjects();
			
		} );
		
	
	} )(jQuery);
} );




/* DebouncedResize Function */
	(function ($) { 
		var $event = $.event, 
			$special, 
			resizeTimeout;
		
		
		$special = $event.special.debouncedresize = { 
			setup : function () { 
				$(this).on('resize', $special.handler);
			}, 
			teardown : function () { 
				$(this).off('resize', $special.handler);
			}, 
			handler : function (event, execAsap) { 
				var context = this, 
					args = arguments, 
					dispatch = function () { 
						event.type = 'debouncedresize';
						
						$event.dispatch.apply(context, args);
					};
				
				
				if (resizeTimeout) {
					clearTimeout(resizeTimeout);
				}
				
				
				execAsap ? dispatch() : resizeTimeout = setTimeout(dispatch, $special.threshold);
			}, 
			threshold : 150 
		};
	} )(jQuery);			
	




	
//Google map	
	
/*global $:false */
    var map;
    $(document).ready(function(){"use strict";
      map = new GMaps({
    disableDefaultUI: true,
    scrollwheel: false,
        el: '#map',
        lat: 44.789511,
        lng: 20.43633
      });
      map.drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        layer: 'overlayLayer',
        content: '<div class="overlay"></div>',
        verticalAlign: 'center',
        horizontalAlign: 'center'
      });
        var styles = [  
  {
    "elementType": "labels.icon",
    "stylers": [
      { "weight": 0.3 },
      { "saturation": -100 },
      { "lightness": 25 },
      { "visibility": "off" }
    ]
  },{
    "stylers": [
      { "hue": "#3498db" },
      { "lightness": 39 }
    ]
  },{
    "elementType": "labels.text.stroke",
    "stylers": [
      { "visibility": "simplified" }
    ]
  }
        ];
        
        map.addStyle({
            styledMapName:"Styled Map",
            styles: styles,
            mapTypeId: "map_style"  
        });
        
        map.setStyle("map_style");	  
    });		
	

	

	
	
	
//Sliders	
	
	$(document).ready(function(){
		$('.slider1').bxSlider({
			adaptiveHeight: true,
			touchEnabled: true,
			pager: false,
			controls: true,
			auto: false,
			slideMargin: 1
		});
	});	
	
	$(document).ready(function(){
		$('.slider2').bxSlider({
			adaptiveHeight: true,
			touchEnabled: true,
			pager: false,
			controls: true,
			auto: true,
			slideMargin: 1
		});
	});	




	
//Responsive video	
	
  $(document).ready(function(){
    $(".media").fitVids();
  });		
	
	
	