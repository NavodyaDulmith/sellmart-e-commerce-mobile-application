<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SellMart</title>

    <link rel="icon" type="image/png" href="./images/fav.png" />
    <link rel="stylesheet" href="themes/whitebtn.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="css/jquery-steps.css">
    <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <style>
        #logo {

            margin-left: auto;
            margin-right: auto;
            width: 50%;
            display: block;
        }
        #white-list {
            background: white;

        }
    </style>

</head>

<body>

    <header data-role="header" data-position="fixed">
        <div data-role="header">
            <a href="#panelArea" data-iconpos="notext" data-icon="bars">menu</a>
            <img src="./images/logo.png" style="margin-left: auto;margin-right: auto; width: 50; display: block;" />
            <a href="profile.php" data-iconpos="notext" data-icon="user">user</a>
        </div>
    </header>

    <!--menu panel -->
    <div data-role="panel" data-position-fixed="true" data-display="overlay" data-theme="b" id="panelArea" style="background-color: #ffffff">
        <ul id="white-list" data-role="listview">
            <img src="images/logo.png" style="margin-left: auto;margin-right: auto; width: 80; display: block;" href="index.html" />
            <br />
			<img src="images/menu/user-profile@2x.png" style="margin-left: auto;margin-right: auto; width: 80; display: block;">
            <div style= "line-height:20%;">
            <h3 style="text-align: center;">Charaka Andaraweera</h3>
			<p style="text-align: center; padding-top:0;">charakasahira@gmail.com</p>
            </div>
            <br />
            <li id="white-list"><a href="#panel-fixed-page2"><img src="images/menu/Group_72.png" class="ui-li-icon">Home</a></li>
            <li><a href="#panel-fixed-page2"><img src="images/menu/Group_70.png" class="ui-li-icon">Categories</a></li>
            <li><a href="qr.php"><img src="images/menu/Group_57.png" class="ui-li-icon">SellMart Points</a></li>
            <li><a href="#panel-fixed-page2"><img src="images/menu/Group_62.png" class="ui-li-icon">My Orders</a></li>
            <li><a href="#panel-fixed-page2"><img src="images/menu/Group_60.png" class="ui-li-icon">Favourites</a></li>
            <li><a href="#panel-fixed-page2"><img src="images/menu/Group_68.png" class="ui-li-icon">Settings</a></li>
            <li><a href="#panel-fixed-page2"><img src="images/menu/Group_64.png" class="ui-li-icon">Notifications</a></li>
            <li><a href="#panel-fixed-page2"><img src="images/menu/Group_66.png" class="ui-li-icon">Help</a></li>
            <br />
            <li><a href="#panel-fixed-page2">Log Out</a></li>
        </ul>
    </div>
    <!-- /menu panel -->