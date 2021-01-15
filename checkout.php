<?php include 'header.php'; ?>

<h4>Prducts</h4>

<hr>
<!-- products -->
<div style="display: flex;
  align-items: center;
  justify-content: center;">

    <img style="height: 80px;
    width: 75px;max-width: 100%;" src="./images/products/product5.jpg" alt="Avatar" class="cardImg">
    <p style="float: right;
  padding-left: 20px;"><b>Viola Skin Retinol Serum & Vitamin E</b></p>

    <div>
        <p style="float: right; color:orangered;
  padding-left: 20px;">Rs.575.00</p>
    </div>
</div>
<!-- products -->

<!-- form -->
<hr>
<h4>Delivery Inforamtions</h4>
<div>
    <div class="ui-grid-a" style="padding:1% 15% 1% 5%;">
        <p style="color:Black; text-align:left">Delivery Address</p>
        <form name="frmInfo" id="frmInfo">
            <input type="text" name="text" value="" placeholder="Full Name" required>
            <input type="text" name="text" value="" placeholder="Address Line 1" required>
            <input type="text" name="text" value="" placeholder="Address Line 2">
            <input type="text" name="text" value="" placeholder="Address Line 3">
            <input type="text" name="text" value="" placeholder="City" required>
        </form>
    </div>
</div>
<!-- form -->
<hr>
<div>
    <h3>Payment Details</h3>

    <div class="ui-grid-a" style="background-image: linear-gradient(to right top, #9f9cd1, #6db5eb, #23cde8, #45dec8, #98e89a);">
        <h4 style="display: flex;align-items: center;justify-content: center;">Sub Total<span>=</span><span> 575.00</span></h6>
            <h4 style="display: flex;align-items: center;justify-content: center;">Delivery <span>=</span> <span> 220.00</span></h6>
                <h4 style="display: flex;align-items: center;justify-content: center;">Total<span>=</span><span> 795.00</span></h6>

                    <button style="margin-left: auto;margin-right: auto; width: 250; display: block;border-radius: 100px;" class="ui-btn-active">Purchase</button>
    </div>

</div>
<?php include 'footer.php'; ?>