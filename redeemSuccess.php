<?php
include 'header.php';?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="css/redeemPoints.css"> -->
        <script src="js/redeemSuccess.js"></script>
        <title>Redeem Success Points</title>
    </head>
    <body>
        <div style="text-align:center;"><h3><span style="color:blue">Congratulations!!!</span></h3></br>
        <p>You've successfully redeemed</p><p id="redeemedPoints"></p><p> points</P>
        <img style="width:200px; height:200px" src="images/success.png"/>
        </div>
        <div style="text-align:center; padding-top:15px; padding-bottom:15px;">
            <a href="productlist.php" data-ajax="false"> << Go back to Checkout</a>
        </div>
    </body>

</html>

<?php
include 'footer.php'; ?>