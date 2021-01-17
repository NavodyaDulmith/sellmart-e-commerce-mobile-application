<?php include 'header.php'; ?>

<head>
    <title>SellMart</title>
    <link rel="stylesheet" href="library/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="library/jquery/jquery.mobile.structure-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="library/materialize/css/materialize.min.css" />
    <link rel="stylesheet" href="css/StarRating.css">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="/library/jquery/jquery-1.11.1.js"></script>
    <!--     <script src="..css/favourite.css"></script>-->

</head>

<ul data-role="listview" data-inset="false" style="padding:5%">
    <h1 style="font-family: Tahoma, sans-serif;font-size: 25px; color:#1128A4;padding:1%"><b>Top Rated Products</b></h1>
    <li><a href="#">
            <img src="images/jam3.png">
            <div>
                <i class="fa fa-star fa-2x" data-index="0"></i>
                <i class="fa fa-star fa-2x" data-index="1"></i>
                <i class="fa fa-star fa-2x" data-index="2"></i>
                <i class="fa fa-star fa-2x" data-index="3"></i>
                <i class="fa fa-star fa-2x" data-index="4"></i>
                <br>
            </div>
            <h2>MD Strawberry Jam</h2>
            <p>Rs.180</p>
        </a>
        <a href="product.php" data-ajax="false" class="ui-btn ui-btn-inline ui-btn-b" data-theme="b">Buy It</a>
        <p class="collapsibleComment">Comment <i class="fa fa-angle-down" aria-hidden="true"></i></p>

        <div style="padding: 0 18px;display: none;overflow: hidden;background-color: rgb(249 249 249);width: 235;" class="contentComment">
            <?php include 'comment.php' ?>
        </div>
    </li>
    <li style="padding:0%"><a href="#">
            <img src="images/products/p1.PNG">
            <div>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <br>
            </div>
            <h2>Corn Flasks</h2>
            <p>Rs.250</p>
        </a>
        <a href="product1.php" data-ajax="false" class="ui-btn ui-btn-inline ui-btn-b" data-theme="b">Buy It</a>
        <p class="collapsibleComment">Comment <i class="fa fa-angle-down" aria-hidden="true"></i></p>

        <div style="padding: 0 18px;display: none;overflow: hidden;background-color: rgb(249 249 249);width: 235;" class="contentComment">
            <?php include 'poi_comment.php' ?>
        </div>
    </li>
    <li style="padding:0%"><a href="#">
            <img src="images/products/p2.PNG">
            <div>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <br>
            </div>
            <h2>Potato Chips</h2>
            <p>Rs.80</p>
        </a>
        <a href="product.php" target="_blank" class="ui-btn ui-btn-inline ui-btn-b" data-theme="b">Buy It</a>
        <a href="product.php" data-ajax="false" class="ui-btn ui-btn-inline ui-btn-b" data-theme="b">Buy It</a>
        <p class="collapsibleComment">Comment <i class="fa fa-angle-down" aria-hidden="true"></i></p>

        <div style="padding: 0 18px;display: none;overflow: hidden;background-color: rgb(249 249 249);width: 235;" class="contentComment">
            <?php include 'poi_comment.php' ?>
        </div>
    </li>
    <li style="padding:0%"><a href="#">
            <img src="images/products/product3.jpg">
            <div>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <br>
            </div>
            <h2>Wolfgang Amadeus Phoenix</h2>
            <p>Phoenix</p>
        </a>
        <a href="product.php" data-ajax="false" class="ui-btn ui-btn-inline ui-btn-b" data-theme="b">Buy It</a>
        <p class="collapsibleComment">Comment <i class="fa fa-angle-down" aria-hidden="true"></i></p>

        <div style="padding: 0 18px;display: none;overflow: hidden;background-color: rgb(249 249 249);width: 235;" class="contentComment">
            <?php include 'poi_comment.php' ?>
        </div>
    </li>
    <li style="padding:0%"><a href="#">
            <img src="images/products/product5.jpg">
            <div>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <br>
            </div>
            <h2>Wolfgang Amadeus Phoenix</h2>
            <p>Phoenix</p>
        </a>
        <a href="product.php" data-ajax="false" class="ui-btn ui-btn-inline ui-btn-b" data-theme="b">Buy It</a>
        <p class="collapsibleComment">Comment <i class="fa fa-angle-down" aria-hidden="true"></i></p>

        <div style="padding: 0 18px;display: none;overflow: hidden;background-color: rgb(249 249 249);width: 235;" class="contentComment">
            <?php include 'poi_comment.php' ?>
        </div>
    </li>
</ul>
<script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script>
    var ratedIndex = -1,
        uID = 0;

    $(document).ready(function() {
        resetStarColors();

        if (localStorage.getItem('ratedIndex') != null) {
            setStars(parseInt(localStorage.getItem('ratedIndex')));
            uID = localStorage.getItem('uID');
        }

        $('.fa-star').on('click', function() {
            ratedIndex = parseInt($(this).data('index'));
            localStorage.setItem('ratedIndex', ratedIndex);
            saveToTheDB();
        });

        $('.fa-star').mouseover(function() {
            resetStarColors();
            var currentIndex = parseInt($(this).data('index'));
            setStars(currentIndex);
        });

        $('.fa-star').mouseleave(function() {
            resetStarColors();

            if (ratedIndex != -1)
                setStars(ratedIndex);
        });
    });

    function saveToTheDB() {
        $.ajax({
            url: "index.php",
            method: "POST",
            dataType: 'json',
            data: {
                save: 1,
                uID: uID,
                ratedIndex: ratedIndex
            },
            success: function(r) {
                uID = r.id;
                localStorage.setItem('uID', uID);
            }
        });
    }

    function setStars(max) {
        for (var i = 0; i <= max; i++)
            $('.fa-star:eq(' + i + ')').css('color', '#FFD700', 'border-color, coral');
    }

    function resetStarColors() {
        $('.fa-star').css('color', '#B2BEB5');
    }
</script>
<script>
    var coll = document.getElementsByClassName("collapsibleComment");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>
</body>

</html>
<?php include 'footer.php' ?>