<?php
include 'header.php';?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="css/redeemPoints.css"> -->
        <script src="js/redeemPoints.js"></script>
        <title>Redeem Points</title>
    </head>
    <body>
        <div style="text-align:center;"><h3>Total <span style="color:blue">Sell Mart points </span> in your account</h3>
            <b id="availablePoints" style="text-align:center; color:blue; font-size:18px"></b>
        </div>
        <div style="text-align:center;">
            <p style="font-size:10px">Enter the amount of points you want to redeem</P>
            <div class="quantity" style="padding-left:32%; padding-right:35%; margin-top:-20px">
                <input type="number" data-clear-btn="true" name="pointsAmnt" id="pointsAmnt" value="">
            </div>
            <div class="errorDiv" id="errorDiv" style="color:red; font-size:12px"></div>
            <button class="redeem">Redeem</button>
        </div>
    </body>

</html>

<?php
include 'footer.php'; ?>