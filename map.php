<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <style>
        
    </style>
    <title>Document</title>
</head>
<body>
    <div id="map" style="height: 500px; width: 100%;"></div>
<?php
    var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 37.7749, lng: -122.4194},
    zoom: 12,
    tilt: 45
});

var marker = new google.maps.Marker({
    position: {lat: 37.7749, lng: -122.4194},
    map: map,
    title: 'San Francisco'
  });
  
?>

</body>
</html>