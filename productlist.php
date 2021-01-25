<?php
include 'header.php';?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/liststyle.css">
  <script src="js/listscript.js"></script>
  <title>Basket</title>
</head>

<body>
  <main>
    <div class="basket">
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="images/jam3.png" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">1</span>MD Strawberry Jam</strong></h1>
            <p><strong>Regular</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price">325.00</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">325.00</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div>

    </div>
    <!-- fixednavbarbottom -->
<div style="border: none;" data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="index.php" data-ajax="false" data-icon="home" >Home</a></li>
            <li><a href="poi.php" data-ajax="false" data-icon="grid">Top Products</a></li>
            <li><a href="favourites.php" data-ajax="false" data-icon="star">Favourites</a></li>
            <li><a href="productList.php" data-ajax="false" data-icon="shop" class="ui-btn-active">Cart</a></li>
        </ul>
    </div>
</div>
<!-- fixednavbarbottom -->

    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">325.00</div>
          <div class="summary-promo">
            <div class="promo-title">Discount</div>
            <div class="promo-value final-value" id="basketpromo"></div>
          </div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total"></div>
        </div>
        <div class="summary-checkout">
        <a data-ajax="false" href="checkout.php" class="ui-btn ">CHECKOUT</a>
        </div>
        <a href="redeemPoints.php" data-ajax="false"> <span  class="redeemPage" style="font-size:10px; color:blue; text-align:center;">Want to redeem Sell Mart points?</span></a>
      </div>
    </aside>
  </main>
</body>

