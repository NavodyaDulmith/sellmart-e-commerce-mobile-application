
  <head>
    <!-- <title>Sign in</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/splashScreen.css" />
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/orientation.js"></script>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div data-role="page" id="pageOne">
      <div>
        <img class="splashScreen1" src="images/11first.png" />
      </div>
      <div>
        <label
          class="label1"
          style="font-weight: bold; font-size: 20px; line-height: 20px"
          >EFFORTLESS</label
        >
        <label
          class="label2"
          style="font-weight: bold; font-size: 20px; line-height: 20px"
          >PURCHASE</label
        >
        <p class="label3">
          Buy any product from any place,at any time very easily with
          <span class="name">Sell Mart</span>
        </p>
      </div>
      <div class="row">
        <div class="column">
          <button class="skipBt">
            <a href="index.html" style="color: black">Skip</a>
          </button>
        </div>
        <div class="column">
          <button class="nextBT" style="background-color: #1128a4">
            <a href="#pageTwo" style="color: aliceblue">Next</a>
          </button>
        </div>
      </div>
    </div>

    <!-- 2 nd splashScreen -->
    <div data-role="page" id="pageTwo">
      <div>
        <img class="splashScreen2" src="images/33.jpg" />
      </div>
      <br /><br />
      <div>
        <label
          class="label1"
          style="font-weight: bold; font-size: 20px; line-height: 20px"
          >EXCLUSIVE</label
        >
        <label
          class="label2"
          style="font-weight: bold; font-size: 20px; line-height: 20px"
          >PRODUCTS</label
        >
        <p class="label3">
          <span class="name">Sell Mart</span>
          with trendy products for the highest customer service
        </p>
      </div>
      <br />
      <div class="row">
        <div class="column">
          <button class="skipBt">Skip</button>
        </div>
        <div class="column">
          <button class="nextBT" style="background-color: #1128a4">
            <a href="#pageThree" style="color: aliceblue">Next</a>
          </button>
        </div>
      </div>
    </div>
    <!-- 3rd splash screen -->
    <div data-role="page" id="pageThree" style="background-color: white">
      <div>
        <img class="splashScreen2" src="images/second.jpg" />
      </div>
      <br />
      <br />
      <div>
        <label
          class="label1"
          style="font-weight: bold; font-size: 20px; line-height: 20px"
          >SMOOTH
        </label>
        <label
          class="label2"
          style="font-weight: bold; font-size: 20px; line-height: 20px"
          >TRANSACTION</label
        >
        <p class="label3">
          <span class="name">Sell Mart</span>
          Transaction process is very easy as anyone can easily do the payment
        </p>
      </div>
      <br />

      <button class="start" style="background-color: #1128a4">
        <a href="login.php" style="color: white">Start Shopping</a>
      </button>
    </div>
  </body>