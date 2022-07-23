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
	
	$('.deploy-navigation').click(function(){
		$('.navigation').toggle(150);
	});
			
		
	$('.show-drop-one').click(function(){
		$('.drop-one').toggle(200);
		$('.drop-two').hide(200);
		$('.drop-three').hide(200);
	});
	
	$('.show-drop-two').click(function(){
		$('.drop-one').hide(200);
		$('.drop-two').toggle(200);
		$('.drop-three').hide(200);
	});
	
	$('.show-drop-three').click(function(){
		$('.drop-one').hide(200);
		$('.drop-two').hide(200);
		$('.drop-three').toggle(200);
	});
	

	
});












