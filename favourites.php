<?php include 'header.php'; ?>

<head>
<meta charset="utf-8">
<title>Favourites</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/Logo.png">

<!-- the three things that jQuery Mobile needs to work -->
<link rel="stylesheet" href="css/favourite.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<scripttype="text/javascript"src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
<scripttype="text/javascript"></script>
</head>

<body>
<div class="favourite-container">
  <!-- <div class="header"> <span class="material-icons back-icon"> navigate_before </span>
    <div class="Logo"> <img src="images/Logo.png"> </div>
  </div> -->
  <!-- <div class="search"> <span class="material-icons search-icon"> search </span>
    <input type="text" class="product-search" data-role="none">
  </div> -->
  <div class="heading">
    <h1>FAVOURITES</h1>
    <h2>Your Favourites List</h2>
  </div>
  <div class="filter">
    <div class="product-filter"> <img class="filter-icon" src="images/filter.png"/>
      <p>Sort & Filter</p>
      <p id="checkbox-label">Select All</p>
    </div>
    <label class="select-all-checkbox">
      <input class="select-all" id="select-all" type="checkbox" data-role="none">
      <span class="checkmark"></span> </label>
  </div>
  <div class="products">
    <ul class="favourite-products" id="favourite-products">
    </ul>
  </div>
  <!-- <div class="footer">
	<img src="images/navigation-iphone-portrait.jpg">
	</div> -->
  <div class="share-favourites" disabled> <img src="images/forward-arrow-icon.png"> <span>Share Favourites</span> </div>
  <!-- <div class="navigation"> 	<img src="images/home.png" /> 
		<img src="images/cart.png" /> 
    <img src="images/offer.png" /> 
	  <img src="images/rubic.png" /> 
		<div class="nav-active">
	  <img class="nav-account-icon" src="images/user-white.png" />
	  <span class="nav-account-text">Account</span>  -->
	  </div> </div>
  <div id="myModal" class="modal"> 
    
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header"> <span class="close" id="close-btn">&times;</span>
        <h2>SHARE FAVOURITES</h2>
      </div>
      <div class="modal-body">
        <input class="modal-text-box" id="email" type="text" placeholder="Email" data-role="none" required/>
        <br>
        <p class="error-text" id="error-text">Please enter a valid E-mail address!</p>
        <button class="modal-button" id="share-btn" data-role="none" type="submit">Share</button>
      </div>
    </div>
  </div>
  <div id="success-toast"> <span class="material-icons success-icon">check_circle</span>
    <p data-role="none">Sent successfully!</p>
  </div>
  <div id="error-toast"> <span class="material-icons error-icon">cancel</span>
    <p data-role="none">Email not delivered!</p>
  </div>
</div>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script> 
<script type="text/javascript" src="data/products.json" ></script> 
<script type="text/javascript" src="js/favscript.js" ></script>
</body>
</html>
