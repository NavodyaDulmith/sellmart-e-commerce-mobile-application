<div  data-role="footer" style="text-align:center; background-image: linear-gradient(to top, #a3b4cf, #b1bfd4, #bfcad9, #ced5df, #dde0e4);">

    <div data-role="controlgroup" data-type="vertical" style="padding:0 20% 0 20%">

        <h4 style="text-align:center;">SellMart</h4>
        

    </div>

    <hr style="margin-top: 15px" width="92%">

    <div data-role="controlgroup" data-type="horizontal" style="margin-top: 20px">

        <a href="https://www.facebook.com/"><img src="./images/footer/fb.png" style="width: 50px; height: 50px"></a>
        <a href="https://twitter.com"><img src="./images/footer/twitter.png" style="width: 50px; height: 50px"></a>
        <a href="https://www.pinterest.com/"><img src="./images/footer/pinterest.png" style="width: 50px; height: 50px"></a>
        <a href="https://www.instagram.com/"><img src="./images/footer/insta.png" style="width: 50px; height: 50px"></a>

    </div>
    <div data-role="controlgroup">
        <a href="#popupFeedback" data-rel="popup" data-position-to="window" data-transition="pop"><img src="./images/app-icon-feedback.png" style="width: 18px; height: 18px">Give your feedback</a>
    </div>
    <p style="text-align:center;">Copyright &copy; 2021 SELLMART. All rights reserved.</p>
    

</div>
<div data-role="popup" id="popupFeedback" data-theme="a" class="ui-corner-all">
    <form>
        <div style="padding:10px 20px;">
            <header>What can we Improve here for you!</header>
            <section>
                <textarea name="feedback"></textarea>
                <a style= "text-align :center" id="send-feedback" href="gamification.php">Send Feedback</a>
            </section>

        </div>
    </form>
</div>
<div id="success-toast">
    <p data-role="none">Thank you for your feedback!</p>
</div>

<style>
    .ui-icon-myapp-feedback {
	background-image: url("images/app-icon-feedback.png");
    }

    #success-toast {
    visibility: hidden;
    background-color: #3EB249;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    bottom: 30px;
    width: 100%;
    font-size: 12px;
    border-radius: 20px 0px;
    border: 1px solid #707070;
  }
  #success-toast.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
  }
  #success-toast > p {
    display: inline;
  }



  @-webkit-keyframes fadein {
    from {
      bottom: 0;
      opacity: 0;
    }
    to {
      bottom: 30px;
      opacity: 1;
    }
  }
  @keyframes fadein {
    from {
      bottom: 0;
      opacity: 0;
    }
    to {
      bottom: 30px;
      opacity: 1;
    }
  }
  @-webkit-keyframes fadeout {
    from {
      bottom: 30px;
      opacity: 1;
    }
    to {
      bottom: 0;
      opacity: 0;
    }
  }
  @keyframes fadeout {
    from {
      bottom: 30px;
      opacity: 1;
    }
    to {
      bottom: 0;
      opacity: 0;
    }
  }
</style>
<script>

function showSuccessToast() {
  var x = document.getElementById("success-toast");
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 3000);
}

$('#send-feedback').on('click', function () {
        showSuccessToast();
    });

</script>