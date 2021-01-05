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
    <div data-role="panel" data-position-fixed="true" data-display="overlay" data-theme="b" id="panelArea">
        <ul id="white-list" data-role="listview">
            <img src="images/logo.png" style="margin-left: auto;margin-right: auto; width: 80; display: block;" href="index.html" />
            <br />
            <h3 style="align-self: auto;">Jhon Doe</h3>
            <br />
            <li id="white-list"><a href="#panel-fixed-page2">Home</a></li>
            <li><a href="#panel-fixed-page2">Categories</a></li>
            <li><a href="#panel-fixed-page2">SellMart Points</a></li>
            <li><a href="#panel-fixed-page2">My Orders</a></li>
            <li><a href="#panel-fixed-page2">Favourites</a></li>
            <li><a href="#panel-fixed-page2">Settings</a></li>
            <li><a href="#panel-fixed-page2">Help</a></li>
            <li><a href="#panel-fixed-page2">About Us</a></li>
            <br />
            <li><a href="#panel-fixed-page2">Log Out</a></li>
        </ul>
    </div>
    <!-- /menu panel -->