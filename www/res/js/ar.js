var data = [];
var maplatcent = 0;
var maploncent = 0;
var sets = 0;
var map = L.map('map').setView([22.969953,-102.565037], 5);

L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> Imagery © <a href="http://cloudmade.com">CloudMade</a> Developer © <a href="albertoramos.xyz">Ramos</a> '}).addTo(map);



function minmax(arr, idx) {
    return {
        min: Math.min.apply(null, arr.map(function (e) { return e[idx]})),
        max: Math.max.apply(null, arr.map(function (e) { return e[idx]}))
    }
} 
function gentrayectory(arr) {
	var myLines = [{
		"type": "LineString",
		"coordinates": arr
	}];
	var myStyle = {
		//"color": "#ff7800",
		"weight": 5,
		"opacity": 0.65
	};
	var trayectory = L.geoJSON(myLines, {style: myStyle})
	

	trayectory.addTo(map);
	
} 
function genrectangle(arr) {
	var lonmin = minmax( data, 0 )['max'];
	var lonmax = minmax( data, 0 )['min'];
	var latmin = minmax( data, 1 )['max'];
	var latmax = minmax( data, 1 )['min'];
    var polygon = L.polygon([
	[latmin,lonmin],
	[latmin,lonmax],
	[latmax,lonmax],
	[latmax,lonmin],
	]).addTo(map);
	polygon.on('click', function(ev) {
	polygon.removeFrom(map);
	gentrayectory(arr);
});
	loncent = (lonmin + lonmax) /2;
	latcent = (latmin + latmax) /2;
	return [latcent,loncent]
} 
