function myMap() {
var mapProp= {
  center:new google.maps.LatLng(45.330416, 8.4214883),
  zoom:5,
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
