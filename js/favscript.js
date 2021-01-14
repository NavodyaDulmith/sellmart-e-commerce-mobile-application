import{ init } from 'emailjs-com';
init("user_Amc5oEbKcVQNvuQ9LlPJZ");
// JavaScript Document
$(document).ready(function () {

  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  if (selectedProducts != null) {
    localStorage.removeItem("selected");
  }
  displayFavourites();

  var favouriteProducts = [];
  favouriteProducts.push("product1");
  favouriteProducts.push("product3");
  favouriteProducts.push("product5");

  localStorage.setItem("favourites", JSON.stringify(favouriteProducts));


  $(".favourite-product-quantity .favourite-product-increase-button").click(function () {
    var text = $(this).parent().parent().parent().find('.count', '.favourite-product-quantity')
    text.val(parseInt(text.val()) + 1);
  });

  $(".favourite-product-quantity .favourite-product-decrease-button").click(function () {
    var text = $(this).parent().parent().parent().find('.count', '.favourite-product-quantity')
    if (parseInt(text.val()) > 1) {
      text.val(parseInt(text.val()) - 1);
    }
  });

  $(".select-all").click(function () {
    if (this.checked) {
      $(':checkbox').each(function () {
        this.checked = true;
      });
      addAllselectedProducts();
      $(".share-favourites").css('background-color', '#8CC63F');
      $(".share-favourites").css('pointer-events', 'all');
    } else {
      $(':checkbox').each(function () {
        this.checked = false;
      });
      removeAllselectedProducts();
      $(".share-favourites").css('background-color', '#1E1E1E');
      $(".share-favourites").css('pointer-events', 'none');
    }
  });

  $(".favourite-product-details #productCheckBox").click(function () {

    var productId = $(this).attr("name");
    var selectedProducts = JSON.parse(localStorage.getItem("selected"));

    if (this.checked) {
      if (selectedProducts == null) {
        selectedProducts = [];
        selectedProducts.push(productId);
      } else {
        if (!selectedProducts.includes(productId)) {
          selectedProducts.push(productId);
        }
      }
      localStorage.setItem("selected", JSON.stringify(selectedProducts));
      console.log($(this).attr("name"));
    } else {
      if (document.getElementById("select-all").checked) {
        document.getElementById("select-all").checked = false;
      }
      if (selectedProducts != null) {
        var index = selectedProducts.indexOf(productId);
        selectedProducts.splice(index, 1);
        localStorage.setItem("selected", JSON.stringify(selectedProducts));
      }
    }

    if (selectedProducts.length > 0) {
      $(".share-favourites").css('background-color', '#8CC63F');
      $(".share-favourites").css('pointer-events', 'all');
    } else {
      $(".share-favourites").css('background-color', '#1E1E1E');
      $(".share-favourites").css('pointer-events', 'none');
    }
  });

  $(".share-favourites").click(function () {
    document.getElementById("myModal").style.display = 'block';
  });

  $("#share-btn").click(function () {
    if ($("#email").val() == "") {
      document.getElementById("error-text").style.display = 'block';
    } else {
      document.getElementById("myModal").style.display = 'none';
      console.log($("#email").val());
      localStorage.setItem("email", $("#email").val());
      sendEmail();
    }
  });

  $("#close-btn").click(function () {
    document.getElementById("myModal").style.display = 'none';
  });


});

function displayFavourites() {
  var products = JSON.parse(data);
  console.log(products);
  var favouriteProducts = JSON.parse(localStorage.getItem("favourites"));
  console.log(favouriteProducts);

  var output = '';
  if (favouriteProducts != null) {
    for (var i = 0; i < products.length; i++) {
      for (j = 0; j < favouriteProducts.length; j++) {

        if (products[i].id == favouriteProducts[j]) {
          output += '<li><div class="favourite-product">';
          output += '<div class="favourite-product-images"> <img class="favourite-product-image" src="' + products[i].image + '"> <img class="favourite-icon-fill" src="images/heartFill.png"></div>';
          output += '<div class="favourite-product-details"><label class="favourite-product-checkbox"><input type="checkbox" name="' + products[i].id + '" id="productCheckBox" data-role="none"><span class="checkmark"></span></label>';
          output += '<p class="favourite-product-name">' + products[i].name + '</p>';
          output += '<p class="favourite-product-price">' + products[i].price + '</p>';
          output += '<div class="favourite-product-quantity"><button class="favourite-product-decrease-button" data-role="none"><span class="material-icons decrease-icon"> remove_circle_outline</span></button><input type="text" class="count favourite-product-count" data-role="none" value="1"/><button class="favourite-product-increase-button" data-role="none"><span class="material-icons decrease-icon"> control_point </span></button><button class="add-to-cart-button favourite-add-to-cart-button" data-role="none"><img src="images/Icon material-add-shopping-cart.png"/></button></div></div></div></li>';
        }
      }
    }
  }
  document.getElementById("favourite-products").innerHTML = output;
}

function addAllselectedProducts() {
  var favouriteProducts = JSON.parse(localStorage.getItem("favourites"));
  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  if (selectedProducts == null) {
    selectedProducts = [];
    for (var k = 0; k < favouriteProducts.length; k++) {
      selectedProducts.push(favouriteProducts[k]);
    }
    localStorage.setItem("selected", JSON.stringify(selectedProducts));
  } else {
    for (var n = 0; n < favouriteProducts.length; n++) {
      if (!selectedProducts.includes(favouriteProducts[n])) {
        selectedProducts.push(favouriteProducts[n]);
      }
    }
    localStorage.setItem("selected", JSON.stringify(selectedProducts));
  }
}

function removeAllselectedProducts() {
  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  selectedProducts = [];
  localStorage.setItem("selected", JSON.stringify(selectedProducts));
}

function showSuccessToast() {
  var x = document.getElementById("success-toast");
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 3000);
}

function showErrorToast() {
  var x = document.getElementById("error-toast");
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 3000);
}

function sendEmail() {
  var emailBody = getEmailBody();
  var templateParams = {
    content: emailBody,
    email: "himasha.2017178@iit.ac.lk"
  };

  emailjs.send('service_h6v98zi', 'template_ow3m4sp', templateParams, 'user_Amc5oEbKcVQNvuQ9LlPJZ')
    .then(function (response) {
      console.log('SUCCESS!', response.status, response.text);
      showSuccessToast();
    }, function (error) {
      console.log('FAILED...', error);
      showErrorToast();
    });
}

function getEmailBody() {
  var products = JSON.parse(data);
  console.log(products);
  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  console.log(selectedProducts);
  var output = ``;
  if (selectedProducts != null) {
    for (var i = 0; i < products.length; i++) {
      for (j = 0; j < selectedProducts.length; j++) {

        if (products[i].id == selectedProducts[j]) {
          output += `<tr style="border-collapse:collapse"><td align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px"><!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]--><table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"><tr style="border-collapse:collapse"><td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:270px"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"><tr style="border-collapse:collapse">`;
          output += `<td align="center" style="padding:0;Margin:0;font-size:0"><img src="` + products[i].url + `" alt="` + products[i].name + `" class="adapt-img" title="` + products[i].name + `" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="165" height="132"></td></tr></table></td></tr></table>`;
          output += `<!--[if mso]></td><td style="width:20px"></td><td style="width:270px" valign="top"><![endif]--><table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"><tr style="border-collapse:collapse"><td align="left" style="padding:0;Margin:0;width:270px"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"><tr style="border-collapse:collapse">`;
          output += `<td align="left" style="padding:0;Margin:0"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'source sans pro', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333"><strong>` + products[i].name + `</strong></h3></td></tr>`;
          output += `<tr style="border-collapse:collapse"><td align="center" height="18" style="padding:0;Margin:0"></td></tr>`;
          output += `<tr style="border-collapse:collapse"><td align="left" style="padding:0;Margin:0"><h4 style="Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'lucida sans unicode', 'lucida grande', sans-serif;color:#8CC63F"><b>` + products[i].price + `</b></h4></td></tr></table></td></tr></table><!--[if mso]></td></tr></table><![endif]--></td></tr>`;
        }
      }
    }
  }
  var emailBody = getEmailTemplate();
  emailBody = emailBody.replace(`@products-list`, output);
  return emailBody;
}

function getEmailTemplate() {
  var emailTemplate = `<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'courier new', courier, 'lucida sans typewriter', 'lucida typewriter', monospace;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta name="x-apple-disable-message-reformatting">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="telephone=no" name="format-detection">
<title>New Template</title>
<!--[if (mso 16)]><style type="text/css">    a {text-decoration: none;}    </style><![endif]--> <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> <!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG></o:AllowPNG>
 <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]--> <!--[if !mso]><!-- --><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i" rel="stylesheet"> <!--<![endif]-->
<style type="text/css">
#outlook a {
    padding: 0;
}
.ExternalClass {
    width: 100%;
}
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
    line-height: 100%;
}
.es-button {
    mso-style-priority: 100!important;
    text-decoration: none!important;
}
a[x-apple-data-detectors] {
    color: inherit!important;
    text-decoration: none!important;
    font-size: inherit!important;
    font-family: inherit!important;
    font-weight: inherit!important;
    line-height: inherit!important;
}
.es-desk-hidden {
    display: none;
    float: left;
    overflow: hidden;
    width: 0;
    max-height: 0;
    line-height: 0;
    mso-hide: all;
}
.es-button-border:hover {
    border-color: #c7997f #c7997f #c7997f #c7997f!important;
    background: #fce5cd!important;
}
td .es-button-border:hover a.es-button-1 {
    background: #fce5cd!important;
    border-color: #fce5cd!important;
}
td .es-button-border:hover a.es-button-2 {
}
td .es-button-border-3:hover {
    background: #fce5cd!important;
}

@media only screen and (max-width:600px) {
p, ul li, ol li, a {
    font-size: 16px!important;
    line-height: 150%!important
}
h1 {
    font-size: 30px!important;
    text-align: center;
    line-height: 120%!important
}
h2 {
    font-size: 26px!important;
    text-align: center;
    line-height: 120%!important
}
h3 {
    font-size: 20px!important;
    text-align: center;
    line-height: 120%!important
}
h1 a {
    font-size: 30px!important
}
h2 a {
    font-size: 26px!important
}
h3 a {
    font-size: 20px!important
}
.es-menu td a {
    font-size: 16px!important
}
.es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a {
    font-size: 16px!important
}
.es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a {
    font-size: 16px!important
}
.es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a {
    font-size: 12px!important
}
*[class="gmail-fix"] {
    display: none!important
}
.es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 {
    text-align: center!important
}
.es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 {
    text-align: right!important
}
.es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 {
    text-align: left!important
}
.es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img {
    display: inline!important
}
.es-button-border {
    display: block!important
}
.es-btn-fw {
    border-width: 10px 0px!important;
    text-align: center!important
}
.es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right {
    width: 100%!important
}
.es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header {
    width: 100%!important;
    max-width: 600px!important
}
.es-adapt-td {
    display: block!important;
    width: 100%!important
}
.adapt-img {
    width: 100%!important;
    height: auto!important
}
.es-m-p0 {
    padding: 0px!important
}
.es-m-p0r {
    padding-right: 0px!important
}
.es-m-p0l {
    padding-left: 0px!important
}
.es-m-p0t {
    padding-top: 0px!important
}
.es-m-p0b {
    padding-bottom: 0!important
}
.es-m-p20b {
    padding-bottom: 20px!important
}
.es-mobile-hidden, .es-hidden {
    display: none!important
}
tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden {
    width: auto!important;
    overflow: visible!important;
    float: none!important;
    max-height: inherit!important;
    line-height: inherit!important
}
tr.es-desk-hidden {
    display: table-row!important
}
table.es-desk-hidden {
    display: table!important
}
td.es-desk-menu-hidden {
    display: table-cell!important
}
.es-menu td {
    width: 1%!important
}
table.es-table-not-adapt, .esd-block-html table {
    width: auto!important
}
table.es-social {
    display: inline-block!important
}
table.es-social td {
    display: inline-block!important
}
a.es-button, button.es-button {
    font-size: 14px!important;
    display: block!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important
}
}

@media screen and (max-width:9999px) {
.cboxcheck:checked + input + * .thumb-carousel {
    height: auto!important;
    max-height: none!important;
    max-width: none!important;
    line-height: 0
}
.thumb-carousel span {
    font-size: 0;
    line-height: 0
}
.cboxcheck:checked + input + * .thumb-carousel .car-content {
    display: none;
    max-height: 0px;
    overflow: hidden
}
.cbox0:checked + * .content-1, .thumb-carousel .cbox1:checked + span .content-1, .thumb-carousel .cbox2:checked + span .content-2, .thumb-carousel .cbox3:checked + span .content-3, .thumb-carousel .cbox4:checked + span .content-4, .thumb-carousel .cbox5:checked + span .content-5, .thumb-carousel .cbox6:checked + span .content-6 {
    display: block!important;
    max-height: none!important;
    overflow: visible!important
}
.thumb-carousel .thumb {
    cursor: pointer;
    display: inline-block!important;
    width: 14.6%;
    margin: 2% 0.61%;
    border: 1px solid rgb(215, 182, 163)
}
.moz-text-html .thumb {
    display: none!important
}
.thumb-carousel .thumb:hover {
    border: 1px solid rgb(68, 68, 68)
}
.cbox0:checked + * .thumb-1, .thumb-carousel .cbox1:checked + span .thumb-1, .thumb-carousel .cbox2:checked + span .thumb-2, .thumb-carousel .cbox3:checked + span .thumb-3, .thumb-carousel .cbox4:checked + span .thumb-4, .thumb-carousel .cbox5:checked + span .thumb-5, .thumb-carousel .cbox6:checked + span .content-6 {
    border-color: rgb(162, 136, 120)
}
.thumb-carousel .thumb img {
    width: 100%;
    height: auto
}
.thumb-carousel img {
    max-height: none!important
}
.cboxcheck:checked + input + * .fallback {
    display: none!important;
    display: none;
    max-height: 0px;
    height: 0px;
    overflow: hidden
}
}

@media screen and (max-width:600px) {
.car-table.responsive, .car-table.responsive .thumb-carousel, .car-table.responsive .thumb-carousel .car-content img, .car-table.responsive .fallback .car-content img {
    width: 100%!important;
    height: auto
}
}

@media screen {
}
</style>
</head>
<body style="width:100%;font-family:'courier new', courier, 'lucida sans typewriter', 'lucida typewriter', monospace;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
<div class="es-wrapper-color" style="background-color:transparent"> <!--[if gte mso 9]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="transparent"></v:fill> </v:background><![endif]-->
  <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:right top">
    <tr style="border-collapse:collapse">
      <td valign="top" style="padding:0;Margin:0"><table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
          <tr style="border-collapse:collapse">
            <td align="center" bgcolor="#ffffff" style="padding:0;Margin:0;background-color:#FFFFFF"><table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                <tr style="border-collapse:collapse">
                  <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px"><table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tr style="border-collapse:collapse">
                        <td align="center" valign="top" style="padding:0;Margin:0;width:560px"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr style="border-collapse:collapse">
                              <td align="center" style="padding:0;Margin:0;padding-bottom:10px;font-size:0px"><img class="adapt-img" src="https://nuzubl.stripocdn.email/content/guids/CABINET_fca5a63ad4cea097629a87a17757e13c/images/62211610263239892.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="65" height="54"></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
          </tr>
        </table>
        <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
          <tr style="border-collapse:collapse">
            <td align="center" bgcolor="#ffffff" style="padding:0;Margin:0;background-color:#FFFFFF"><table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                <tr style="border-collapse:collapse">
                  <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px"><table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tr style="border-collapse:collapse">
                        <td valign="top" align="center" style="padding:0;Margin:0;width:560px"><table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr style="border-collapse:collapse">
                              <td align="center" style="padding:0;Margin:0;padding-bottom:10px;font-size:0"><table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                  <tr style="border-collapse:collapse">
                                    <td style="padding:0;Margin:0;border-bottom:1px solid #EFEFEF;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
                <tr style="border-collapse:collapse">
                  <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px;background-color:#F7F7F7" bgcolor="#f7f7f7"><table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tr style="border-collapse:collapse">
                        <td align="center" valign="top" style="padding:0;Margin:0;width:560px"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr style="border-collapse:collapse">
                              <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:27px;color:#333333"><strong>YOUR FAVOURITE PRODUCTS</strong></p></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
                @products-list
                <tr style="border-collapse:collapse">
                  <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px"><table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tr style="border-collapse:collapse">
                        <td valign="top" align="center" style="padding:0;Margin:0;width:560px"><table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr style="border-collapse:collapse">
                              <td align="center" style="padding:0;Margin:0;padding-bottom:10px;font-size:0"><table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                  <tr style="border-collapse:collapse">
                                    <td style="padding:0;Margin:0;border-bottom:1px solid #EFEFEF;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
                <tr style="border-collapse:collapse">
                  <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px;background-color:#8CC63F" bgcolor="#8CC63F"><table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tr style="border-collapse:collapse">
                        <td align="center" valign="top" style="padding:0;Margin:0;width:560px"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr style="border-collapse:collapse">
                              <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#FFFFFF"><strong><span style="font-family:'courier new', courier, 'lucida sans typewriter', 'lucida typewriter', monospace">© 2021 FreshMart.&nbsp;All Rights Reserved</span>&nbsp;</strong></p></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>
`;
  return emailTemplate;
}
