(function() {
"use strict";
	var mapOptions = {
		zoom: 5,
		center: {
			lat:  29.640997,  
			lng: -98.453609
		}
	};
	var cityState = "San Antonio, TX";
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	var geocoder = new google.maps.Geocoder();
	var marker = new google.maps.Marker({
		position: mapOptions.center,
		map: map,
		draggable: true
	});

	function geocodeAddress(){
		geocoder.geocode({ "address": cityState }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
			} else {
				alert("Location could not be found. Please enter another City, State.");
			}
			marker.setPosition(results[0].geometry.location);
		});
	}
	geocodeAddress();
})();