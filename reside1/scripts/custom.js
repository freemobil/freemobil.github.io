$(document).ready(function(){
	
	///////////////////////////////////
	////////////Page Coach/////////////
	///////////////////////////////////
	$('.page-coach').hide();
	
	$('.nav-coach').click(function(){
		$('.page-coach').fadeIn(200);
		document.ontouchmove = function(event){ event.preventDefault();}
	});
	
	$('.page-coach').click(function(){
		$('.page-coach').fadeOut(200);
		document.ontouchmove = function(event){ event.allowDefault();}
	});
	
	/////////////////////////////////
	//Inner Page Navigation Toggles//
	/////////////////////////////////
	
	$('.page-toggle-one').click(function(){			$('#page-toggle-two, #page-toggle-three, #page-toggle-four').fadeOut(200);			$('#page-toggle-one').fadeIn(500);	});
	$('.page-toggle-two').click(function(){			$('#page-toggle-one, #page-toggle-three, #page-toggle-four').fadeOut(200);			$('#page-toggle-two').fadeIn(500);	});
	$('.page-toggle-three').click(function(){		$('#page-toggle-one, #page-toggle-two, #page-toggle-four').fadeOut(200);			$('#page-toggle-three').fadeIn(500);	});
	$('.page-toggle-four').click(function(){		$('#page-toggle-one, #page-toggle-two, #page-toggle-three').fadeOut(20);			$('#page-toggle-four').fadeIn(500);	});
	
	/*/////////////////////////*/
	/*Sidebar Navigation Deploy*/
	/*/////////////////////////*/

	$('.show-nav').click(function(){
		$('.show-nav').hide();
		$('.hide-nav').show();
		$('.sidebar').animate({
			width: '60',
	  	}, 200, function() {
			// Animation complete.
	  	});
	  	$('.content').animate({
			left:'65'
		}, 200, function() {
			// Animation complete.
	  	});		
	});

	$('.hide-nav').click(function(){
		$('.sidebar').animate({
			width: '0',
	  	}, 200, function() {
			// Animation complete.
	  	});
	  	$('.content').animate({
			left:'0'
		}, 200, function() {
			// Animation complete.
	  	});
		$(this).hide();
		$('.show-nav').show();
	});
	
	//////////////////
	//Subscribe Form//
	//////////////////
	
	$('.subscribe').click(function(){
		$('#modal-hider').fadeIn();
		$('#modal-body').fadeIn();	
		document.ontouchmove = function(event){ event.preventDefault();}
		$('body,html').animate({scrollTop:0},500);
		return false;		
	});
	
	$('.close-modal').click(function(){
		$('#modal-hider').delay(600).fadeOut();
		$('#modal-body').delay(200).fadeOut();	
		document.ontouchmove = function(event){ event.allowDefault();}	
		return false;
	});

	
});

