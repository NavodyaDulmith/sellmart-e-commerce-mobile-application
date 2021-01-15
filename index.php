<?php include 'header.php'; ?>

<!-- search -->
<div style="padding: 3; background-color: #1128a4; ">
    <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search..." data-inset="true"></ul>
</div>
<!-- /search -->

<!-- Slider -->
<div class="ui-grid-a">
    <div class="ui-grid-a">
        <div class="ui-block-a" style="width:100%;">
            <ul id="exampleSlider">
                <li><img class="sliderimg" src="./images/slider-1.jpg" alt="" /></li>
                <li><img class="sliderimg" src="./images/slider-2.jpg" alt="" /></li>
                <li><img class="sliderimg" src="./images/slider-3.jpg" alt="" /></li>
            </ul>
        </div>
    </div>
</div>
<!-- Slider -->

<div style="height: 0; margin-left: 10;">
    <h3>Top Sellings</h3>
</div>
<!-- Top Sellings -->
<div class="ui-grid-a" style="margin-left: -5%">
    <div class="ui-block-a" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
            <img src="./images/products/p22.PNG" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>Jacker Potato Chips Tomato 60g</b></h2>
                <p>Rs 375.00 / Unit</p>
            </div>
        </div>
    </div>

    <div class="ui-block-b" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
        <img src="./images/products/p3.png" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>Md Jam Mixed Fruit 500g</b></h2>
                <p>Rs 325.00 / Unit</p>

            </div>
        </div>
    </div>

    <div class="ui-block-c" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
        <img src="./images/products/p1.PNG" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>Kelloggs Corn Flakes Flavoured 300g</b></h2>
                <p>Rs 610.00 / Unit</p>
            </div>
        </div>
    </div>

    <div class="ui-block-d" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
            <img src="./images/products/product8.jpg" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>L'Oreal Paris Smooth Sugar Nourish Cocoa</b></h2>
                <p>Rs 525.00 / Unit</p>
            </div>
        </div>
    </div>
</div>

<div class="ui-grid-a" style="margin-left: -5%">
    <div class="ui-block-a" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
            <img src="./images/products/product1.jpg" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>PraNaturals Pure Aloe Vera Gel 200ml</b></h2>
                <p>Rs 225.00 / Unit</p>
            </div>
        </div>
    </div>

    <div class="ui-block-b" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
            <img src="./images/products/product2.jpg" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>Morris & Co Hand Care Treats, 1 Pack (3 Pieces)</b></h2>
                <p>Rs 560.00 / Unit</p>
            </div>
        </div>
    </div>

    <div class="ui-block-c" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
            <img src="./images/products/product3.jpg" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>Garnier BB Cream Anti Ageing Moisturiser, 50 ml</b></h2>
                <p>Rs 450.00 / Unit</p>
            </div>
        </div>
    </div>

    <div class="ui-block-d" id="products-cards" style="width:25%;">
        <div class="card" style="height:400px">
            <img src="./images/products/product4.jpg" alt="Avatar" class="cardImg">
            <div class="cardContainer" style="text-align:center">
                <h2><b>L'Oreal Blackhead Skin Rescue Kit 50 ml</b></h2>
                <p>Rs 925.00 / Unit</p>
            </div>
        </div>
    </div>
    <button style="margin-left: auto;margin-right: auto; width: 250; display: block;border-radius: 100px;" class="ui-btn-active">View More</button>

</div>

<!-- Top Sellings -->

<!-- fixednavbarbottom -->
<div style="border: none;" data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="#" data-icon="home" class="ui-btn-active">Home</a></li>
            <li><a href="favourites.php" data-icon="star">Favs</a></li>
            <li><a href="#" data-icon="gear">Setup</a></li>
            <li><a href="#" data-icon="gear">User</a></li>
        </ul>
    </div>
</div>
<!-- fixednavbarbottom -->

<script>
    jQuery(document).ready(function($) {

        var userInfo = {
            "username": "Charaka",
            "weekPoints": 22,
            "points": 150
        };

        var pointsInfo = [{
                "userName": "Charaka",
                "weekPoints": 22,
            },
            {
                "userName": "Navodya",
                "weekPoints": 40,
            },
            {
                "userName": "Himasha",
                "weekPoints": 30,
            },
            {
                "userName": "Uvindu",
                "weekPoints": 25,
            }
        ]

        //Store the object in local storage
        localStorage.setItem('loggedUser', JSON.stringify(userInfo));
        localStorage.setItem('pointInfo', JSON.stringify(pointsInfo));

        setInterval(function() {
            moveRight();
        }, 5000);

        var slideCount = $('#slider ul li').length;
        var slideWidth = $('#slider ul li').width();
        var slideHeight = $('#slider ul li').height();
        var sliderUlWidth = slideCount * slideWidth;

        $('#slider').css({
            width: slideWidth,
            height: slideHeight
        });

        $('#slider ul').css({
            width: sliderUlWidth,
            marginLeft: -slideWidth
        });

        $('#slider ul li:last-child').prependTo('#slider ul');

        function moveLeft() {
            $('#slider ul').animate({
                left: +slideWidth
            }, 200, function() {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        function moveRight() {
            $('#slider ul').animate({
                left: -slideWidth
            }, 200, function() {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        $('a.control_prev').click(function() {
            moveLeft();
        });

        $('a.control_next').click(function() {
            moveRight();
        });

    });
</script>

<script>
    $(function() {



        /* SET PARAMETERS */
        var change_img_time = 3000;
        var transition_speed = 300;

        var simple_slideshow = $("#exampleSlider"),
            listItems = simple_slideshow.children('li'),
            listLen = listItems.length,
            i = 0,

            changeList = function() {

                listItems.eq(i).fadeOut(transition_speed, function() {
                    i += 1;
                    if (i === listLen) {
                        i = 0;
                    }
                    listItems.eq(i).fadeIn(transition_speed);
                });

            };

        listItems.not(':first').hide();
        setInterval(changeList, change_img_time);

    });
</script>
<?php include 'footer.php' ?>