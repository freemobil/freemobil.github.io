/*

Cinematic - InfinitySlider Extension
Version: 1.0
Author: Epeo
Website: demo.epeo.it/infinityslider

*/
function slideRetroCinematic(slideItemIn,itemTime) {
	$('.iS-Cinematic').css({width: '', height: '', marginLeft: '', marginTop: ''});
	var current = slideItemIn;
	if(current.hasClass('iS-CinematicCenter')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = currentWidth*-0.25;
		var marginTop = currenHeight*-0.25;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	/**/
	else if(current.hasClass('iS-CinematicTop')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = currentWidth*-0.25;
		var marginTop = 0;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	else if(current.hasClass('iS-CinematicBottom')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = currentWidth*-0.25;
		var marginTop = currenHeight*-0.5;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	else if(current.hasClass('iS-CinematicLeft')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = 0;
		var marginTop = currenHeight*-0.25;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	else if(current.hasClass('iS-CinematicRight')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = currentWidth*-0.5;
		var marginTop = currenHeight*-0.25;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	/**/
	else if(current.hasClass('iS-CinematicTopLeft')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = 0;
		var marginTop = 0;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	else if(current.hasClass('iS-CinematicTopRight')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = currentWidth*-0.5;
		var marginTop = 0;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	else if(current.hasClass('iS-CinematicBottomLeft')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = 0;
		var marginTop = currenHeight*-0.5;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
	else if(current.hasClass('iS-CinematicBottomRight')) {
		var currentWidth = current.width();
		var currenHeight = current.height();
		var newWidth = currentWidth*1.5;
		var newHeight = currenHeight*1.5;
		var marginLeft = currentWidth*-0.5;
		var marginTop = currenHeight*-0.5;
		var time = 40000;
		setTimeout(function(){
			current.animate({width: newWidth, height: newHeight, marginLeft: marginLeft, marginTop: marginTop},time);
		},itemTime)
	}
}