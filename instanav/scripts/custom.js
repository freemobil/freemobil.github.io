$(document).ready(function(){
	
	
$('.bxslider').bxSlider({
	pager:false,
	controls:true,
	touchEnabed:true,
	infiniteLoop: true,
	preventDefaultSwipeX:true
});


$('.bx-next').click(function(){
	return false;
});

$('.bx-prev').click(function(){
	return false;
});



$('.submenu-five-icons').hide();


$('.deploy-submenu-one').click(function(){
	$('.submenu-one').fadeIn(300);
	$('.submenu-two').fadeOut(300);
	$('.submenu-three').fadeOut(300);
	return false
});

$('.deploy-submenu-two').click(function(){
	$('.submenu-two').fadeIn(300);
	$('.submenu-one').fadeOut(300);
	$('.submenu-three').fadeOut(300);
	return false
});

$('.deploy-submenu-three').click(function(){
	$('.submenu-three').fadeIn(300);
	$('.submenu-one').fadeOut(300);
	$('.submenu-two').fadeOut(300);
	return false
});

$('.close-submenu').click(function(){
	$(this).parent().fadeOut(300);	
	return false
});

/*


$('.submenu-five-icons').hide();

$('.deploy-submenu-one').click(function(){
	$('.submenu-five-icons').show();
	$('.submenu-five-icons').animate({	bottom:'-545px'}, 300, 'easeInOutExpo');	
	$('.submenu-one').animate({	bottom:'0px'}, 300, 'easeInOutExpo');	
	return false
});


$('.deploy-submenu-two').click(function(){
	$('.submenu-five-icons').show();
	$('.submenu-five-icon').animate({	bottom:'-545px'}, 300, 'easeInOutExpo');
	$('.submenu-two').animate({	bottom:'0px'}, 300, 'easeInOutExpo');	
	return false
});


$('.close-submenu').click(function(){
	$(this).parent().animate({bottom:'-545px'}, 300, 'easeInOutExpo');	
	$('.submenu-five-icons').delay(1000).hide(200);
	return false
});

*/
	
});












