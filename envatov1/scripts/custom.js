$(document).ready(function(){
	
	////////////////////////////////////////
	// Creating a cookie for the modal form! 
	////////////////////////////////////////
	
	function createCookie(name,value,days) {
		if (days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}
	
	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}
	
	function eraseCookie(name) {	createCookie(name,"",-1);	}
	
	var modalStatus = readCookie('modalIsClosed');


	//////////////////////////////////
	// Modal form deploy functionality
	//////////////////////////////////
	
	$('.delete-cookie').click(eraseCookie('modalIsClosed'));
	$('.delete-cookie').click(function(){
		$('#modal-hider').fadeIn();
		$('#modal-body').fadeIn();	
		document.ontouchmove = function(event){ event.preventDefault();}
	});
	
	if(modalStatus == 'true'){
		$('#modal-hider').hide();	
		$('#modal-body').hide();
		document.ontouchmove = function(event){ event.allowDefault();}	
	}
	
	$('.close-modal').click(function(){
		$('#modal-hider').delay(600).fadeOut();
		$('#modal-body').delay(200).fadeOut();	
		document.ontouchmove = function(event){ event.allowDefault();}	
		return false;
		
	});
	
	$('.modal_disable').click(function(){
		$('#modal-hider').delay(600).fadeOut();
		$('#modal-body').delay(200).fadeOut();	
		document.ontouchmove = function(event){ event.allowDefault();}
		createCookie('modalIsClosed', 'true' , 7);
		return false;
	});
	
	
	$('.subscribe').click(function(){
		$('#modal-hider').fadeIn();
		$('#modal-body').fadeIn();	
		document.ontouchmove = function(event){ event.preventDefault();}
		$('body,html').animate({scrollTop:0},500);
		return false;		
	});
	
	
	
	$('.enable-coach').click(function(){
		$(this).addClass('active-nav');
		$('.page-coach').fadeIn(200);
		document.ontouchmove = function(event){ event.preventDefault();}
	});
	
	$('.page-coach').click(function(){
		$('.enable-coach').removeClass('active-nav');
		$('.page-coach').fadeOut(200);
		document.ontouchmove = function(event){ event.allowDefault();}
	});

	
	$('.white-notification a em').click(function(){
		$(this).parent().parent().parent().hide(200);
		return false;
	});
	
	$('.white-notification').click(function(){
		return false;
	});
	
	$('.deploy-nav').click(function(){
		$('.navigation').toggle(200);
	});
	
	$('.go-up').click(function() {
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
	
	$('.show-extended-content').click(function(){
		$(this).parent().find('.extended-content').fadeToggle('medium', 'easeInOutExpo');
		return false;
	});
	
	$('#menu-one').click(function(){ 	$('.menu-one').delay(110).fadeIn(100);		$('.menu-two, .menu-three, .menu-four, .menu-five').fadeOut(100); return false; });
	$('#menu-two').click(function(){ 	$('.menu-two').delay(110).fadeIn(100);		$('.menu-one, .menu-three, .menu-four, .menu-five').fadeOut(100); return false; });
	$('#menu-three').click(function(){ 	$('.menu-three').delay(110).fadeIn(100);	$('.menu-two, .menu-one, .menu-four, .menu-five').fadeOut(100);   return false; });
	$('#menu-four').click(function(){ 	$('.menu-four').delay(110).fadeIn(100);		$('.menu-two, .menu-three, .menu-one, .menu-five').fadeOut(100);  return false; });
	$('#menu-five').click(function(){ 	$('.menu-five').delay(110).fadeIn(100);		$('.menu-two, .menu-three, .menu-four, .menu-one').fadeOut(100);  return false; });
	
	$('.menu-one, .menu-two, .menu-three, .menu-four, .menu-five').hide();
	
	$('.close-sub').click(function(){
		$(this).parent().fadeOut(200);
		return false;
	});
	
	
});

