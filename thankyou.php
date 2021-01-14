<?php include 'header.php'; ?>

<div data-role="main" style="text-align:center; width: 100%; vertical-align: middle;
line-height: 100%;">

    <div id="portrait">
        <img src="./images/thankyou.png" style="height: auto;width: 15%;padding-top: 20px">

        <div style="text-align: center;font-size: large;padding-bottom: 25px">Thank You for your payment
        </div>
        <div style="text-align: center;font-size: large;padding-bottom: 40px">
            <a href="index.php" style="text-decoration:none" ;>Go back to home page</a>
        </div>

    </div>

    <div id="landscape">
        <img src="./images/thankyou.png" style="height: auto;width: 20%">

        <div style="text-align: center;font-size: large">Thank You for your payment
        </div>
        <a href="index.php" style="text-decoration:none" ;>Go back to home page</a>
        <hr>
    </div>

</div>

<script>
    jQuery(document).ready(function($) {

        console.log($(window).width());
        if ($(window).width() < 400) {
            document.getElementById("portrait").style.visibility = "visible";
            document.getElementById("landscape").remove();
        } else {
            //console.log("ipad condition");
            document.getElementById("landscape").style.visibility = "visible";
            document.getElementById("portrait").remove();
        }

    });
</script>

<?php include 'footer.php'; ?>