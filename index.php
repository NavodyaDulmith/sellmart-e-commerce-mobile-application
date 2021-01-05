<?php

include 'header.php'; ?>

<!-- search -->
<div style="border: 1px outset #1128a4; background-color: #1128a4; ">
    <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search..." data-inset="true"></ul>
</div>
<!-- /search -->

<!-- SECTION 1 -->
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

<!-- fixednavbarbottom -->
<div data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="#" data-icon="home" class="ui-btn-active">Home</a></li>
            <li><a href="#" data-icon="star">Favs</a></li>
            <li><a href="#" data-icon="gear">Setup</a></li>
            <li><a href="#" data-icon="gear">User</a></li>
        </ul>
    </div>
</div>
<!-- /fixednavbarbottom -->

<script>
    jQuery(document).ready(function($) {

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