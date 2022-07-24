$(document).ready(function(){
	
	$('.deploy-navigation').click(function(){
		$('.navigation').toggle(100);
	});
			
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

	

	////////////////////
	//Submenu Deployer//
	////////////////////		
	$('.deploy-submenu').click(function(){
		$(this).parent().find('.submenu').toggle(500, 'easeInOutExpo');
		return false;
	});	
	

	
});












