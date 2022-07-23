//////////////////
//Site Preloader//
///////////////////
$(window).load(function() { // makes sure the whole site is loaded
	$("#status").fadeOut(); // will first fade out the loading animation
		$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
})

$(document).ready(function(){
	
	$('.go-up').click(function() {
		$('body,html').animate({scrollTop:0},1000);
		return false;
	});
	
	$('#menu-one').click(function(){ 	$('.menu-one').fadeIn(200);		$('.menu-two, .menu-three, .menu-four, .menu-five').fadeOut(100); return false; });
	$('#menu-two').click(function(){ 	$('.menu-two').fadeIn(200);		$('.menu-one, .menu-three, .menu-four, .menu-five').fadeOut(100); return false; });
	$('#menu-three').click(function(){ 	$('.menu-three').fadeIn(200);	$('.menu-two, .menu-one, .menu-four, .menu-five').fadeOut(100);   return false; });
	$('#menu-four').click(function(){ 	$('.menu-four').fadeIn(200);	$('.menu-two, .menu-three, .menu-one, .menu-five').fadeOut(100);  return false; });
	$('#menu-five').click(function(){ 	$('.menu-five').fadeIn(200);	$('.menu-two, .menu-three, .menu-four, .menu-one').fadeOut(100);  return false; });
	
	$('.closer-submenu').click(function(){
		$(this).parent().fadeOut(200);
		return false;
	});
		
	$('.dropdown-hidden').hide();
	$('.dropdown-item').hide();

	$('.dropdown-deploy').click(function(){
		$(this).parent().parent().find('.dropdown-item').show(200);
		$(this).parent().parent().find('.dropdown-hidden').show();
		$(this).hide();
		return false;
	});
	
	$('.dropdown-hidden').click(function(){
		$(this).parent().parent().find('.dropdown-item').hide(200);
		$(this).parent().parent().find('.dropdown-deploy').show();
		$(this).parent().parent().find(this).hide();
		return false;		
	});
	
	$('.sliding-door-top').click(function(){
		$(this).animate({
			left:'101%'
		}, 500, 'easeInOutExpo');
		return false;
	});
	
	$('.sliding-door-bottom a em').click(function(){
		$(this).parent().parent().parent().find('.sliding-door-top').animate({
			left:'0px'
		}, 500, 'easeOutBounce');
		return false
		
	});
	
	//////////////////////////
	//Image Gallery Colorbox//
	//////////////////////////	
	$("#gallery-filtralbe li a").colorbox({
	 	transition:"fade",
		scalePhotos:"true",
		maxWidth:"100%",
		maxHeight:"100%",
		arrowKey:"false"
	});
	
	$(".portfolio-item-full-width a").colorbox({
	 	transition:"fade",
		scalePhotos:"true",
		maxWidth:"100%",
		maxHeight:"100%"
	});
	
	$(".portfolio-item-thumb a").colorbox({
	 	transition:"fade",
		scalePhotos:"true",
		maxWidth:"100%",
		maxHeight:"100%"
	});

	/////////////////////////////////////////////////////////////////////////////
	//Detect if iOS WebApp Engaged and permit navigation without deploying Safari
	/////////////////////////////////////////////////////////////////////////////
	(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")

	////////////////
	//Image Slider//
	////////////////
	
	var slider = new Swipe(document.getElementById('slider'), {
		startSlide: 1,
		speed: 500,
		auto: 5000,
		callback: function(event, index, elem) {
	
		  // do something cool
	
		}
	});

	$('.next-but-swipe').click(function(){
		slider.prev();
		return false;
	});
	
	$('.prev-but-swipe').click(function(){
		slider.next();
		return false;
	});

	/////////////////////////////////////////////////////////////////////////////////////////////
	//Detect user agent for known mobile devices and show hide elements for each specific element
	/////////////////////////////////////////////////////////////////////////////////////////////
	
	var isiPhone = 		navigator.userAgent.toLowerCase().indexOf("iphone");
	var isiPad = 		navigator.userAgent.toLowerCase().indexOf("ipad");
	var isiPod = 		navigator.userAgent.toLowerCase().indexOf("ipod");
	var isiAndroid = 	navigator.userAgent.toLowerCase().indexOf("android");
	
	if(isiPhone > -1) 	 {		 $('.ipod-detected').hide();		 $('.ipad-detected').hide();		 $('.iphone-detected').show();		 $('.android-detected').hide();	 }
	if(isiPad > -1)	 {		 	 $('.ipod-detected').hide();		 $('.ipad-detected').show();		 $('.iphone-detected').hide();		 $('.android-detected').hide();	 }
	if(isiPod > -1)	 {		 	 $('.ipod-detected').show();		 $('.ipad-detected').hide();		 $('.iphone-detected').hide();		 $('.android-detected').hide();	 }   
	if(isiAndroid > -1) {		 $('.ipod-detected').hide();		 $('.ipad-detected').hide();		 $('.iphone-detected').hide();		 $('.android-detected').show();	 }  

	/////////////////////////////
	//Checkboxes and radio boxes! 
	/////////////////////////////
	
	$('.checkbox-v1').click(function(){		$(this).toggleClass('checked-v1');		return false;	});	
	$('.checkbox-v2').click(function(){		$(this).toggleClass('checked-v2');		return false;	});
	$('.checkbox-v3').click(function(){		$(this).toggleClass('checked-v3');		return false;	});
	$('.checkbox-v4').click(function(){		$(this).toggleClass('checked-v4');		return false;	});
	$('.radio-v1').click(function(){		$(this).toggleClass('balled-v1');		return false;	});
	$('.radio-v2').click(function(){		$(this).toggleClass('balled-v2');		return false;	});

	///////////////////////
	//Notification boxes!//
	///////////////////////
	$(".close-notification").click(function(){	$(this).parent().hide(150);		return false;	});
	$(".small-notification a").click(function(){$(this).parent().hide(150);		return false;	});

	////////////////////
	//Toggle Function!//
	/////////////////////
	$('.show-toggle-v1').hide();
	$('.toggle-content-v1').hide();
	$('.show-toggle-v1').click(function(){$(this).hide();		$(this).parent().find('.hide-toggle-v1').show();	$(this).parent().find('.toggle-content-v1').fadeOut(100); return false;	});
	$('.hide-toggle-v1').click(function(){$(this).parent().find('.show-toggle-v1').show();		$(this).hide();		$(this).parent().find('.toggle-content-v1').fadeIn(200); return false;	});		

	$('.show-toggle-v2').hide();
	$('.toggle-content-v2').hide();
	$('.show-toggle-v2').click(function(){$(this).hide();		$(this).parent().find('.hide-toggle-v2').show();		$(this).parent().find('.toggle-content-v2').fadeOut(100); return false;	});
	$('.hide-toggle-v2').click(function(){$(this).parent().find('.show-toggle-v2').show();			$(this).hide();		$(this).parent().find('.toggle-content-v2').fadeIn(200); return false;	});		

	$('.show-toggle-v3').hide();
	$('.toggle-content-v3').hide();
	$('.show-toggle-v3').click(function(){$(this).hide();		$(this).parent().find('.hide-toggle-v3').show();		$(this).parent().find('.toggle-content-v3').fadeOut(100); return false;	});
	$('.hide-toggle-v3').click(function(){$(this).parent().find('.show-toggle-v3').show();			$(this).hide();		$(this).parent().find('.toggle-content-v3').fadeIn(200); return false;	});	

	$('.show-toggle-v4').hide();
	$('.toggle-content-v4').hide();
	$('.show-toggle-v4').click(function(){$(this).hide();		$(this).parent().find('.hide-toggle-v4').show();		$(this).parent().find('.toggle-content-v4').fadeOut(100); return false;	});
	$('.hide-toggle-v4').click(function(){$(this).parent().find('.show-toggle-v4').show();			$(this).hide();		$(this).parent().find('.toggle-content-v4').fadeIn(200); return false;	});	

	$('.show-toggle-v5').hide();
	$('.toggle-content-v5').hide();
	$('.show-toggle-v5').click(function(){$(this).hide();		$(this).parent().find('.hide-toggle-v5').show();		$(this).parent().find('.toggle-content-v5').fadeOut(100); return false;	});
	$('.hide-toggle-v5').click(function(){$(this).parent().find('.show-toggle-v5').show();			$(this).hide();		$(this).parent().find('.toggle-content-v5').fadeIn(200); return false;	});	

	////////////////////////////
	//Top Header Notifications//
	////////////////////////////
	$('.header-notification strong').click(function() {
	  $(this).parent().animate({
		height: '0px'
	  }, 350, function() {
	  });
	  return false;
	});
	
	///////
	//Tab//
	///////
	$('#tab').tabify();
	
	/////////////////////
	//Filtrable Gallery//
	/////////////////////

	$('#filter-all').click(function(){
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 1);
		return false;
	});
	
	$('#filter-one').click(function(){
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 1);	
		$('.filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 0.4);	
		return false;
	});
	
	$('#filter-two').click(function(){
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 1);	
		$('.filter-one, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 0.4);	
		return false;
	});
	
	$('#filter-three').click(function(){
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 1);	
		$('.filter-one, .filter-two, .filter-four, .filter-five, .filter-six').fadeTo("fast", 0.4);	
		return false;
	});
	
	$('#filter-four').click(function(){
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 1);	
		$('.filter-one, .filter-two, .filter-three, .filter-five, .filter-six').fadeTo("fast", 0.4);	
		return false;
	});
	
	$('#filter-five').click(function(){
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 1);	
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-six').fadeTo("fast", 0.4);	
		return false;
	});
	
	$('#filter-six').click(function(){
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five, .filter-six').fadeTo("fast", 1);	
		$('.filter-one, .filter-two, .filter-three, .filter-four, .filter-five').fadeTo("fast", 0.4);
		return false;	
	});
	
	/////////////////
	//Image Gallery//
	/////////////////
	$("#gallery a").swipebox({
		useCSS : true, // false will force the use of jQuery for animations
		hideBarsDelay : 3000 // 0 to always show caption and action bar
	});		

});

