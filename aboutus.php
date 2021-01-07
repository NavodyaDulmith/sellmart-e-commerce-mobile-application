<html>
<head>
    <style>
       * {
            margin: 0;
            padding: 0;
        }
        #map {
            height: 300px;
            width: 100%;
        }
    </style>
<body>
<div id = "map">


<script>
    function initMap() {
        var location = {lat: 6.927079, lng: 79.861244};
        var map = new google.maps.Map(document.getElementById("map"),{
            zoom: 4,
            center: location
        });
         var marker = new google.maps.Marker({
             position:location,
             map: map
         });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7NqG1xOvLYalZhzkl_dybcjWyKQYyg_8&callback=initMap" type="text/javascript"></script>
</div>

</body>
</head>