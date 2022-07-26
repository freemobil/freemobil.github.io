/*

Fullscreen - InfinitySlider Extension
Version: 1.0
Author: Epeo
Website: demo.epeo.it/infinityslider

*/
$(document).ready(function(){
	function getfullscreen(){
		var windowWidth = $(window).width();
		var windowHeight = $(window).height();
		$('.iS-Fullscreen').css({width: windowWidth, height: windowHeight});
	}
	getfullscreen();
	$(window).resize(function() {
		getfullscreen();
	});
});