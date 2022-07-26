/*

Thumbnails Horizontal - InfinitySlider Extension
Version: 1.0
Author: Epeo
Website: demo.epeo.it/infinityslider

*/
$(document).ready(function() {
	var limited = 2;
	var focused = 1;
	function thumbnail(reach,target){
		var slideNumber = target.length;
		if(reach < 0) {
			reach = slideNumber-1-focused;
		}
		else if(reach < limited) {
			reach = 0;	
		}
		else if(reach < slideNumber) {
			reach = reach-focused;	
		}
		else if(reach >= slideNumber){
			reach = 0;
		}
		var i = 0;
		for(var a=0; a<slideNumber; a++) {
			if(a < reach) {
				target.eq(a).css({webkitTransform: 'translateX(-'+((reach-a)*100)+'%)', transform: 'translateX(-'+((reach-a)*100)+'%)'});	
			}
			else {
				target.eq(a).css({webkitTransform: 'translateX('+(i*100)+'%)', transform: 'translateX('+(i*100)+'%)'});
				i++;
			}
		}
	}
	function thumbnailsize() {
		$('.iS-SkinThumbnails .iS-Dots').each(function() {
			var current = $(this);
			var currentc = current.children('.iS-Dot');
			if(currentc.length != 0) {
				var currentcwidth = currentc.width();
				var templimited = parseInt(parseInt(current.width()/currentcwidth)/2)+1;
				var tempfocused = parseInt(templimited/2)+1;
				if( templimited == 1) {
					if(current.css('opacity',1)) {
						current.css({opacity: 0, zIndex: -1});
						current.parent('.iS-Commands').children('.iS-Previous').css({width: 50+'%'});
						current.parent('.iS-Commands').children('.iS-Next').css({width: 50+'%'});						
					}
				}
				else {
					if(current.css('opacity',0)) {
						current.css({opacity: 1, zIndex: ''});
						current.parent('.iS-Commands').children('.iS-Previous').css({width: ''});
						current.parent('.iS-Commands').children('.iS-Next').css({width: ''});						
					}
					if(currentc.length != templimited) {
						limited = templimited;
						focused = tempfocused;
					}
					else {
						limited = templimited+1;	
						focused = templimited+1;			
					}	
				}
			}
		});		
	}
	$(window).load(function() {
		var target = $('.iS-SkinThumbnails .iS-Dot');
		thumbnail(0,target);
		thumbnailsize()
	});
	$(window).resize(function() {
		thumbnailsize()
	});
	$('.iS-SkinThumbnails .iS-Dot').click(function(){
		var target = $(this).parent('.iS-Dots').children('.iS-Dot');
		var current = $(this).index();
		thumbnail(current,target);
	});
	$('.iS-SkinThumbnails .iS-Next').click(function() {
		var incommands = $(this).parent('.iS-Commands');
		var indots = incommands.children('.iS-Dots');
		var target = indots.children('.iS-Dot');
		var current = (indots.children('.iS-Dotactive').index())+1;		
		thumbnail(current,target);
	});
	$('.iS-SkinThumbnails .iS-Previous').click(function() {
		var incommands = $(this).parent('.iS-Commands');
		var indots = incommands.children('.iS-Dots');
		var target = indots.children('.iS-Dot');
		var current = (indots.children('.iS-Dotactive').index())-1;		
		thumbnail(current,target);
	});
});