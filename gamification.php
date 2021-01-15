<?php

include 'header.php';
if (isset($_GET['qr_button_clicked'])) {

    header("Location:https://qrcodescan.in");
}

?>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gamification</title>

    <link rel="stylesheet" href="css/gamificationStyles.css" />
    <script src="js/gamification.js"></script>
    
</head>
<body>
<div class="ui-grid-solo">
    <div class="ui-block-a">
        <div class="ui-bar-prods" style="height: 200px; margin:10px; border-radius:1em">
        <span class="sell-mart-prods"><p style="text-align:center; padding-top: 10px;">This week Sell Mart products!!!</p></span>
        <div class="ui-grid-a">
	        <div class="ui-block-a">
                <div class="ui-grid-a">
	                <div class="ui-block-a" style ="text-align:center;"><img src="images/sellMart/cornFlakes.jpg" style="width:60%; height:60%" /></div>
                    <div class="ui-block-b"><span style="font-family: Tahoma; color: #ffffff"><p style="font-size:16px;">Corn Flakes</br>(400g)</p>
                    <p style= "font-size:10px;">10 points per item</p>
                    </div>
                 </div>
            </div>
	        <div class="ui-block-b">
                <div class="ui-grid-a">
	                <div class="ui-block-a" style ="text-align:center;"><img src="images/sellMart/chips.jpg" style="width:60%; height:60%" /></div>
                    <div class="ui-block-b"><span style="font-family: Tahoma; color: #ffffff"><p style="font-size:16px;">Potato Chips</br>(200g)</p>
                    <p style= "font-size:10px;">15 points per item</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="ui-grid-a">
	<div class="ui-block-a">
        <div class="ui-bar-total"  style="height: 100px; margin-left:10px; margin-right:2px; border-radius:1em">
            <span class="sell-mart-total"><p style="text-align:center; padding-top: 10px;">Total Sell Mart points</br>
            <p id="totalPoints" style="text-align:center;"></p></p></span>
        </div>
    </div>
	<div class="ui-block-b">
        <div class="ui-bar-total"  style="height: 100px; margin-right:10px; margin-left:2px; border-radius:1em">
            <span class="sell-mart-total"><p style="text-align:center; padding-top: 10px;">This week earning</br>
            <p id="weekPoints" style="text-align:center;"></p></p></span>
        </div>
    </div>
</div>
<div class="ui-grid-a">
	<div class="ui-block-a">
        <div class="ui-bar-total"  style="height: 100px; margin-left:10px; margin-right:2px; border-radius:1em">
            <span class="sell-mart-total"><p style="text-align:center; padding-top: 10px;">Your ranking</br>
            <p id="rank" style="text-align:center;"></p></p></span>
        </div>
    </div>
	<div class="ui-block-b">
        <div class="ui-bar-b"  style="height: 100px; margin-right:10px; margin-left:2px; border-radius:1em">
           <a data-ajax="false" href="leaderboard.php"> <span style="font-family:Lucida Console; color:#2b10a3; text-decoration: underline;"><p style="text-align:center; padding-top: 10px;">View this week rankings</p></span></a>
        </div>
    </div>
</div>
<div>
    <div data-role="collapsible">
        <h3>What is SellMart points?</h3>
        <p>SellMart points allows you to get impressive cashbacks when you do your shopping through SellMart app 
        </br></br><b>1 SellMart point =1 Sri Lankan Rupee</b>
        </p>
    </div>
</div>
<div>
    <div data-role="collapsible">
        <h3>How to Earn points?</h3>
        <p>You can earn SellMart points by shopping through SellMart mobile app.</br>
        SellMart app lists products weekly which contains SellMart points.</br>
        Purchasing those products will earn you SellMart Points.</p>
    </div>
</div>
<div>
    <div data-role="collapsible">
        <h3>How to Redeem points?</h3>
        <p>You can redeem points at checkout page by clicking on</br>
        <span style="color:blue;">"Want to redeem SellMart points?".</span></br>
        Minimum of 100 SellMart points should be in your wallet to redeem. </p>
    </div>
</div>

<div class="ui-grid-solo">
    <div class="ui-block-a" style="padding-left:10%; padding-right:10%">
        <button style="height:100px;" type="button" data-theme="c">Earn Points by scanning your Bill!!!</br>
            <div class="ui-grid-a" >
                <div class="ui-block-a" style="width:32px; padding-left:25%;">
                    <img src="images/sellMart/qr-codes.png" />
                </div>
                <div class="ui-block-b" style="width:auto;">
                    <p style="color:blue; padding-left:40%;"><a href='gamification.php?qr_button_clicked=true' id="qr-code" target="_blank">Scan the QR code</a></p>
                </div>
            </div>
        </button>
    </div>   
</div>

</body>
<!-- <div class="ui-grid-c" style="margin-top:10px">
    <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:60px">Block A</div></div>
    <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:60px">Block B</div></div>
    <div class="ui-block-c"><div class="ui-bar ui-bar-a" style="height:60px">Block C</div></div>
    <div class="ui-block-d"><div class="ui-bar ui-bar-a" style="height:60px">Block D</div></div>
</div>/grid-c -->
<script>
        $('#qr-code').click(function () {
            var requestURL = '.json';
        });
        
    </script>
<?php include 'footer.php' ?>