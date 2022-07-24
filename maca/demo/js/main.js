$(function(){
	'use strict';

	// preloader
	$(".preloader").fadeOut();

	// sidebar
	$('.sidebar').sideNav();

	// smooth scroll
    $("a").on('click', function(event) {

      if (this.hash !== "") {
        event.preventDefault();

        var hash = this.hash;

        $('html, body').animate({

          scrollTop: $(hash).offset().top

        }, 850, function(){

          window.location.hash = hash;

        });

      }

    });

	// tabs
	$('ul.tabs').tabs();

	// collapse
	$('.collapsible').collapsible();

});