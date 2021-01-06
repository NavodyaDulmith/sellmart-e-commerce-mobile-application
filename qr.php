<!-- this line calls aframe -->
<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>

<!-- this line calls the AR.js component to be used for aframe and finds the source of different assets like the description of 3D objects, the camera calibration-->
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.0/aframe/build/aframe-ar.js"></script>
</head>

<body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs='sourceType: webcam;'>
        <a-box position='0 0.5 0' material='opacity: .7;' color="red"></a-box>
        <a-marker-camera preset='hiro'></a-marker-camera>
    </a-scene>
</body>