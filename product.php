<html>

<head>
<link rel="stylesheet" href="css/StarRating.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<style type="text/css">
.rate {
            float: left;
            height: 46px;
            padding: 0 10px; 
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>
</head>


<!-- search -->
<div style="border: 1px outset #1128a4; background-color: #1128a4; ">
    <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search..." data-inset="true"></ul>
</div>
<!-- /search -->

<!-- main content -->
<div class="row">
    <div style="display:flex; justify-content:left; padding-left: 50px; padding-top:20px; align-items:center;">
      <img src="images/jam3.png" class="thumbnail" width="350" height="400">
    </div>
    <div class="col-md-3" style="display:flex; justify-content:left; padding-left: 50px; align-items:center;">
      <p>With our continuous commitment of providing healthy 
        products, we are also offering our Strawberry Jam that we<br>
        manufacture and supply. Our strawberry jam is made from fresh 
        strawberry pulps that are naturally grown in the country.<br> 
        These are delicately handpicked and carefully processed to provide 
        one of the freshest and tastiest strawberry jams in the market.
        </p> 
    </div>
    <dev style="display:flex; justify-content:left; padding-left: 50px; align-items:center;">
    <img src="images/jam2.jpg" class="thumbnail" width="250" height="100">
    </dev>
    <dev style="display:flex; justify-content:left; padding-left: 40px; align-items:center;">
    <input type="image" src="images/buynow.png" name="submit" width="220" height="120" alt="submit"/>  
    </dev>  
  </div>


            <div class="rate" style="justify-content:left; padding-left: 50px; align-items:center;" >
                <input type="radio" id="star5" name="rate" value="5" data-role="none"/>
                <label for="star5" title="text" data-role="none">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" data-role="none"/>
                <label for="star4" title="text" data-role="none">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" data-role="none"/>
                <label for="star3" title="text" data-role="none">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" data-role="none"/>
                <label for="star2" title="text" data-role="none">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" data-role="none"/>
                <label for="star1" title="text" data-role="none">1 star</label>
            </div>
  <!-- /main content --> 

</html>


<?php include 'footer.php' ?>