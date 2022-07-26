// Google Maps JS & Settings Coordinates
// When the window has finished loading create our google map below
// https://developers.google.com/maps/documentation/

google.maps.event.addDomListener(window, 'load', init);

function init() {
// Basic options for a simple Google Map
	
	
	//----------------- ADD YOUR SETTINGS HERE -----------------//
	
	
	// Add your coordinates. How to know coordinates: https://support.google.com/maps/answer/18539?hl=en
	var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
	
	// Add your company name and some text about company
	var maptooltipbold = 'Uncle Hummer';
	var maptooltip = 'Some text about company';
	
	
	//---------------------------------------------------------//
	
	
	var mapOptions = {
		
		// How zoomed in you want the map to start at (always required)
		zoom: 15,
		
		// The latitude and longitude to center the map (always required)
		center: myLatlng,
		
		// How you would like to style the map. 
		// This is where you would paste any style found on Snazzy Maps.
		styles: [{featureType:"landscape",
		stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",
		stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",
		stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",
		stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",
		stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",
		stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",
		stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",
		stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",
		stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",
		stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",
		stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
	};


	
	// Get the HTML DOM element that will contain your map 
	// We are using a div with id="map" seen below in the <body>
	var mapElement = document.getElementById('map');

	// Create the Google Map using out element and options defined above
	var map = new google.maps.Map(mapElement, mapOptions);
	
	// Image of toogle
	var image = 'images/contacts-map-marker.png';

	// Div's of toogle
	var content = document.createElement('div');
	content.innerHTML = "<div class="+"map-tooltip"+"><h4><strong>"+maptooltipbold+"</strong></h4><hr>"+"<h5>"+maptooltip+"</h5></div>";
	
	// Initialize tooltips
	var infowindow = new google.maps.InfoWindow({
	 content: content
	});
	
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		draggable:false,
		icon: image,
		animation: google.maps.Animation.BOUNCE
		
	  });


		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.open(map, marker);
		});

}
