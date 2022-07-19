// JavaScript Document

//Demo Purpose
function swapStyleSheet(sheet){
	document.getElementById('pagestyle').setAttribute('href', sheet);
}

$(document).ready(function(){
	
	$('.style-change').click(function(){
		return false;
	});


	$('.show-menu').click(function(){
		$('#box').fadeIn(100);
		$(this).hide();
		$('.hide-menu').show();	
	});
	

	$('.hide-menu').click(function(){
		$('#box').fadeOut(100);
		$(this).hide();
		$('.show-menu').show();		
	});

	$('.clos-icon').click(function(){
		$('#box').fadeOut(100);
		$('.top').hide();
		$('.show-menu').show();	
		return false;	
	});
	
});