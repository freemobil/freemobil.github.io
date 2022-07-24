jQuery(document).ready(function($){
	$more_img = $("#wrapper:not(.ip-header) img").fadeTo(0, 0);
	
	function fade_img(){
		$more_img.each(function(i) {
			a = $(this).offset().top + $(this).height();
			b = $(window).scrollTop() + $(window).height();
			if (a < b) $(this).fadeTo('fast',1);
		});
	}
	
	$(window).on('load',function(){
		fade_img();
	});
	
	$(window).on('scroll',function()
		fade_img();
	});


});