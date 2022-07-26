var Map = (function($) {

	var googleMapStyle;
	var googleMapType;
	var googleMapOptions;
	var googleMapIcon;
	var map;

	var init = function() {

		// set src of google map icon for markers
		googleMapIcon = 'http://birvacreativestudio.com/theme/springfield/img/map-pin.png';

		// custom google map styling
		googleMapStyle = [
		  {
		    "featureType": "administrative",
		    "stylers": [
		      { "visibility": "off" }
		    ]
		  },{
		    "featureType": "road",
		    "stylers": [
		      { "visibility": "simple" },
		      { "color": "#393939" }
		    ]
		  },{
		    "elementType": "labels",
		    "stylers": [
		      { "visibility": "off" }
		    ]
		  },{
		    "featureType": "water",
		    "stylers": [
		      { "color": "#303030" }
		    ]
		  },{
		    "featureType": "landscape",
		    "stylers": [
		      { "color": "#2a2a2a" }
		    ]
		  },{
		    "featureType": "poi",
		    "stylers": [
		      { "color": "#393939" },
		      { "visibility": "simplified" }
		    ]
		  },{
		    "featureType": "transit",
		    "elementType": "geometry",
		    "stylers": [
		      { "visibility": "off" }
		    ]
		  },{
		    "featureType": "administrative",
		    "elementType": "geometry.stroke",
		    "stylers": [
		      { "visibility": "on" },
		      { "color": "#393939" }
		    ]
		  }
		];

		// render the map
		renderMap([43.9106381,-91.2427342], 14, 'map');
		plotMapPoint(43.909777,-91.242823,"https://www.google.com/maps/place/Kaber+Technologies,+LLC/@43.909777,-91.242823,17z/data=!3m1!4b1!4m2!3m1!1s0x87f952f05d30a181:0x19e894fb973b61bd");
		
	};

	var renderMap = function(center, zoom, element) {

		// if element doesnt exist we need to bail out
		if($('#' + element).length == 0) return;

		// create a new StyledMapType object, passing it the array of styles, as well as the name to be displayed on the map type control.
		googleMapType = new google.maps.StyledMapType(googleMapStyle, {name: "Springfield"});

		// create a map object, and include the MapTypeId to add to the map type control.
		googleMapOptions = {
			zoom: zoom,
			disableDefaultUI: true,
			mapTypeControl: false,
			zoomControl: false,
			scaleControl: false,
			scrollwheel: false,
			disableDoubleClickZoom: true,
			center: new google.maps.LatLng(center[0],center[1]),
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.TERRAIN, 'Springfield']
			}
		};
		 
		// set up new google map
		map = new google.maps.Map(document.getElementById(element), googleMapOptions);

		// associate the styled map with the MapTypeId and set it to display.
		map.mapTypes.set('Springfield', googleMapType);
		map.setMapTypeId('Springfield');

	}

	var plotMapPoint = function(lat, lng, url) {

		var googleMapMarker = new google.maps.Marker({
			url:url,
			map: map,
			position: new google.maps.LatLng(lat,lng),
			icon: googleMapIcon
		});

		googleMapMarker.setMap(map);

		google.maps.event.addListener(googleMapMarker, 'click', function() {
			window.open(googleMapMarker.url);
		});

	};
	
	return {
		init: init
	};

}(jQuery));