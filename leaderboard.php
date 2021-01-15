<?php include 'header.php'; ?>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Leader Board</title>
    <link rel="stylesheet" href="css/leaderboard.css" />
    <script src="js/leaderboard.js"></script>
</head>
<body>
<div class="ui-grid-solo">
    <div class="ui-block-trophy" style="margin:10px; border-radius:1em">
        <div style="text-align:center; padding-top:10px;">
            <img src="images/sellMart/trophy.png" style="width:60px; height:70px;" />
        </div>
        <div style="text-align:center; padding-bottom:10px;">
            <p>Top the table!</br>
            Grab the Rs.2000 coupon!!!</p>
        </div>
        
    </div>
</div>
<div style="text-align:center;">
    <h3 style="color:blue;">This Week Rankings</h3>
</div>
<div class="ui-grid-b">
    <div class="ui-bar-ranks"  id="leaders" style="height: 200px; margin:10px; border-radius:1em">
    </div>
</div>
<!-- /grid-b -->
</body>

<?php include 'footer.php' ?>