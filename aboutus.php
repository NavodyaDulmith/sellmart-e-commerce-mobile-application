<?php

include 'header.php'; ?>


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

        .container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

img {
  opacity: 0.5;
}

h1 {
  color: black;
  font-family: "Lucida Console";
  font-size: 80px;
}

h2 {
  padding-top: 20px;
  color: #1128A4;
  font-family: "Lucida Console";
  font-size: 50px; 
}
</style>
</head>
<body>

<div class="container">
  <img src="images/shoppingback.jpg" alt="Snow" style="width:100%; height:400px">
  <div class="top-left">
  <h1>About Us</h1>
  </div>
</div>


  <div style="display:flex; justify-content:left; padding-left: 50px; padding-top:20px; align-items:center;">
  <h2>What We Do...</h2>
    </div>
    <div style="display:flex; justify-content:center; padding-left: 50px; padding-top:40px; align-items:center;">
    <p style="font-family: Lucida Console;   font-size: 30px; ">We are a online marketplace for grocery<br>
    and retail item shopping. We will deliver<br> 
    the products for the best price and the<br> 
    best quality in market....
   </p>
    </div>

    <div style="display:flex; justify-content:center; padding-left: 50px; padding-top:40px; align-items:center;">
    <h2 style="color: #1128A4;">Best Price...Best Quality</h2>
    </div>
    <dev div style="display:flex; justify-content:center; padding-top:40px; align-items:center;">
    <video width="100%" controls autoplay>
        <source src="video/shopvideo.mp4" type="video/mp4">
        Your browser does not support HTML video.
    </video>
</dev>
<div style="display:flex; justify-content:center; padding-left: 50px; padding-top:20px; padding-bottom:30px; align-items:center;">
  <h2 style="color: #1128A4;">Where you can find us..</h2>
    </div>
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
</html>
<?php include 'footer.php' ?>
