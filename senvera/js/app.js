"use strict";
// Dom7
var $ = Dom7;

// Init App
var app = new Framework7({
	root: '#app',
	theme: 'ios',
	routes: routes,
	view: {
		pushState: true,
	},

});

var checkIn = app.calendar.create ({
	inputEl: '#check-in',
	openIn: 'customModal',
	header: true,
	footer: true,
});

var checkOut = app.calendar.create ({
	inputEl: '#check-out',
	openIn: 'customModal',
	header: true,
	footer: true,
});

var mainView = app.views.create('.view-main', {
	url: './index.html'
});