$(function(){
	'use-strict';

    // portfolio filter container
    $('.filtr-container').imagesLoaded( function() {
        var filterizr = $('.filtr-container').filterizr();
    });

    // portfolio filter
    $(document).on("click",".simplefilter li", function() {
        $('.simplefilter li').removeClass('active');
        $(this).addClass('active');
    });

});