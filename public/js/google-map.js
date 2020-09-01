
var google;

function init() {
	// The location of Uluru
	var uluru = { lat: 33.4544621, lng: -112.3968296 };
	// The map, centered at Uluru
	// 33.4544621,-112.3968296
	var map = new google.maps.Map(
		document.getElementById('map'), { zoom: 4, center: uluru });
	// The marker, positioned at Uluru
	var marker = new google.maps.Marker({ position: uluru, map: map });
}
google.maps.event.addDomListener(window, 'load', init);