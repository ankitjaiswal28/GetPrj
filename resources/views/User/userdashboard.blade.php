@extends('Layout\userlayout')
@section('userMainContent')
<?php
$getuserrole = session()->get('username');
echo $getuserrole;
?>
<h1>Dashboard</h1>
<button  type="button" name="submit_id" id="btn_id">Add Atendence</button>
<button onclick="getLocation()">Try It</button>
<p id="demo"></p>
<p id="demo1"></p>
@endsection
@section('scriptContent')

<script>
$(document).ready(function(){
    getLocation();
 $('#btn_id').click(function(){
  // alert("The paragraph was clicked.");
  // localStorage.setItem("LoginDetails", "Done");
  window.location.href = 'add-attendence';
})
});
var x = document.getElementById("demo");
var y = document.getElementById("demo1");
function getLocation() {
    console.log(navigator);
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else {
      alert('Welcome');
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude + "<br>";

  var mylat = position.coords.latitude;
  var a = Number(mylat);
  // var mylat1 = a.toFixed(6)

  var mylong =  position.coords.longitude;
  var b = Number(mylong);
  // var mylong1 = b.toFixed(6)
  //alert(mylong1)
//   y.innerHTML = "Latitude: " + mylat1 +
//   "<br>Longitude: " + mylong1;
  var serverlat = '19.152241';
  var serverlong =  '72.939339';
  var unit = 'K'
  distance(mylat,mylong,serverlat,serverlong,unit)
}

function distance(lat1, lon1, lat2, lon2, unit) {
	if ((lat1 == lat2) && (lon1 == lon2)) {
		return 0;
	}
	else {
		var radlat1 = Math.PI * lat1/180;
		var radlat2 = Math.PI * lat2/180;
		var theta = lon1-lon2;
		var radtheta = Math.PI * theta/180;
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		if (dist > 1) {
			dist = 1;
		}
		dist = Math.acos(dist);
		dist = dist * 180/Math.PI;
		dist = dist * 60 * 1.1515;
		if (unit=="K") { dist = dist * 1.609344 }
		if (unit=="N") { dist = dist * 0.8684 }
        alert(dist.toFixed(2));
		// return dist;
	}
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      alert("User denied the request for Geolocation.");
      navigator.geolocation.getCurrentPosition(showPosition);
      // window.location.href = 'logout';
     // x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}
</script>
@endsection
