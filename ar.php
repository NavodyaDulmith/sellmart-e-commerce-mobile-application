<head>
    <!-- this line calls aframe -->
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>

    <!-- this line calls the AR.js component to be used for aframe and finds the source of different assets like the description of 3D objects, the camera calibration-->
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.0/aframe/build/aframe-ar.js"></script>
</head>

<body style='margin : 0px; overflow: hidden;'>
    <div style='position: fixed; top: 10px; width:100%; text-align: right; z-index: 1; right: 10px;'>
        <button onclick="myFunction()" >
            Close
        </button>
    </div>

    <a-scene embedded arjs='sourceType: webcam;'>
        <!-- <a-box position='0 0.5 0' material='opacity: .8;' color="red"></a-box> -->
        <a-entity geometry="primitive: plane; width: 3; height: auto" rotation="-90 0 0" material="color: green" text="value: You are getting 20% off today!">
        </a-entity>

        <a-marker-camera preset='hiro'></a-marker-camera>
    </a-scene>
</body>

<script>
    function myFunction() {
        location.replace("./index.php")
    }
</script>