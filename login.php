<head>
	<title>Log in </title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel='stylesheet' type='text/css' href='css/StyleSheet.css' />
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/orientation.js"></script>

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

</head>

<body>

	<div data-role="page" id="pageone">
		<div class = "image">
			<img src="images/sellmart_logo.jpg" class="center" id="logoProfile">
		</div>



		<div data-role="main" class="ui-content main-content"; align="center">
			<div class="ui-field-contain content">

				<form method="POST" class="input-form" name="loginForm" onsubmit="return ValidateForm()">
					<div>
						<h2 style="text-align:center;margin-bottom:3px">Login </h2>
					</div>
					<input type="email" name="email" id="email" placeholder="Your email..">
					<div id="email_error"></div>
					<input type="password" name="password" id="password" placeholder="Password.." >
					<div id="password_error"></div>

					<input type="checkbox" style="margin-top: -5px;font-size:150%; width:15px; margin-left: -6px;" id="remember-me">
					<label class="keep" style="font-size: 15px;margin-right: 170px; margin-top:-1%"> keep me logged in </label>


					<div>
						<h6> <a href="#" style="text-decoration: none; color:#1128A4;" id="FP">FORGOT PASSWORD?</a></h6>
					</div>
					<button class="login" style=" margin-bottom: 2px; border-radius: 100px;width:225px;background-color:#1128A4;color:white;border-radius: 100px;height:35px;text-align: center; padding:0" id="LogingBtn" onclick="submitBTN_validate()">LOGIN</button>
					<div class="row" >
						<div style=" width: 25%;float:left">
							<h5 style="margin-top: 10px; margin-left: 117px; white-space: nowrap;">Not Signed up yet?</h5>
						</div>
						<div style=" margin-top: 10px; width: 50%;float:left;">
							<h4><a style="text-decoration: none; white-space: nowrap;" href="#" id="SU">SIGN UP NOW</a></h4>
						</div>

					</div>

				</form>
				<div class="row">
					<h4>Sign in with social media</h4>
					<div class="column">
						<img style="width: 33px;height: 33px;" src="images/google.jpg">
					</div>
					<div class="column" >
					<img style="width: 33px;height: 33px;" src="images/twitter.png">
					</div>
					<div class="column" >
					<img style="width: 33px;height: 33px;" src="images/facebook.png">
					</div>
					<div class="column" >
					<img style="width: 33px;height: 33px;" src="images/linkedin.png">
					</div>
				</div>
			</div>

		</div>
		<script>
			$(window).on("load orientationchange", function() {


				if (/iPhone/i.test(navigator.userAgent)) {
					/* checks whether it's iPhone or not*/

					$('#logoProfile').css('height', '92px');
					$('#logoProfile').css('margin-top', '0px');
					$('#logoProfile').css('margin-bottom', '0px');

					if (window.orientation == 0) {
						// $('.ui-content').css('background-image','url('+'Images/PhonePortrait.jpg'+')');
						$('.ui-content').css('background-color', 'white');
						$('.content').css('padding-top', '110px');
						$('.content').css('font-size', '12px');
						$('.ui-content').css('height', '630px');
						$('.ui-content').css('margin-top', '-92px');
						$('.navMenu').css('font-size', '22px');
						$('.sidenav a').css('font-size', '15px');
						$('.input-form').css('font-size', '15px');
						$('.submit-button').css('font-size', '15px');
						// $('.remember-me').css('padding-top','10px';)
						// $('.remember-me').css('font-size','10px');
						// $('.remember-me').css('height','13px');
						// $('.remember-me').css('width','13px');



					} else {
						// $('.ui-content').css('background-image','url('+'Images/PhoneLandscape.jpg'+')');
						$('.ui-content').css('background-color', 'white');
						$('.content').css('padding-top', '80px');
						$('.content').css('font-size', '12px');
						$('.ui-content').css('height', '342px');
						$('.navMenu').css('font-size', '22px');
						$('.sidenav a').css('font-size', '15px');
						$('.input-form').css('font-size', '13px');
						$('.submit-button').css('font-size', '13px');
						$('#LogingBtn').css('width', '500px');
						$('.ui-content').css('margin-top', '-92px');
						// $('.remember-me').css('padding-top','10px';)
						// $('.remember-me').css('font-size','10px');
						// $('.remember-me').css('height','13px');
						// $('.remember-me').css('width','13px');
					}
				} else if (/iPad/i.test(navigator.userAgent)) {
					/* checks whether it's iPad or not*/

					$('#logoProfile').css('height', '170px');
					$('#logoProfile').css('margin-top', '0px');
					$('#logoProfile').css('margin-bottom', '0px');

					if (window.orientation == 0) {
						// $('.ui-content').css('background-image','url('+'Images/PadPortrait.jpg'+')');
						$('.ui-content').css('background-color', 'white');
						$('.content').css('padding-top', '300px');
						$('.content').css('font-size', '12px');
						$('.ui-content').css('margin-top', '-180px');
						$('.ui-content').css('height', '980px');
						$('.navMenu').css('font-size', '22px');
						$('.sidenav a').css('font-size', '15px');
						$('.input-form').css('margin-left', '5em');
						$('.input-form').css('margin-right', '5em');

						$('.input-form').css('font-size', '15px');
						$('.submit-button').css('width', '430px');
						$('.submit-button').css('font-size', '15px');
					} else {
						// $('.ui-content').css('background-image','url('+'Images/PadLandscape.jpg'+')');
						$('.ui-content').css('background-color', 'white');
						$('.content').css('padding-top', '220px');
						$('.content').css('margin-top', '30px');
						$('.content').css('font-size', '12px');
						$('.ui-content').css('margin-top', '-180px');
						$('.ui-content').css('height', '730px');
						$('.navMenu').css('font-size', '22px');
						$('.sidenav a').css('font-size', '15px');
						$('.input-form').css('font-size', '15px');
						$('.submit-button').css('font-size', '15px');
					}
				}
			});

			$("#SU").click(function() {
				window.location.href = "signup.php";
			});
			$("#FP").click(function() {
				window.location.href = "index.php";
			});

			$(".LogoClass").click(function() {
				window.location.href = "inedx.php";
			});

			var email = document.forms['loginForm']['email'];
			var password = document.forms['loginForm']['password'];

			var email_error = document.getElementById('email_error');
			var password_error = document.getElementById('password_error');

			email.addEventListener('blur', emailVerify, true);
			password.addEventListener('blur', passwordVerify, true);

			function emailVerify() {
				// regex to validate the email address
				var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

				if (email.value == "") {
					email.style.border = "1px solid red";
					email_error.style.color = "red";
					email_error.textContent = "Email is required";
					return false;
				} else if (!re.test(email.value)) {
					email.style.border = "1px solid red";
					email_error.style.color = "red";
					email_error.textContent = "Invalid email, please re-enter";
					return false;
				} else {
					email.style.border = "1px solid #5cb85c";
					email_error.innerHTML = "";
					return true;
				}
			}

			function passwordVerify() {
				if (password.value == "") {
					password.style.border = "1px solid red";
					password_error.style.color = "red";
					password_error.textContent = "Password is required";
					return false;
				} else {
					password.style.border = "1px solid #5cb85c";
					password.innerHTML = "";
					return true;
				}
			}


			function ValidateForm() {


				// Password validation
				if (password.value == "") {
					password.style.border = "1px solid red";
					password_error.style.color = "red";
					password_error.textContent = "Password is required";
					password.focus();
					return false;
				} else {
					return true;
				}


				// regex to validate the email address
				var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

				// Email validation
				if (email.value == "") {
					email.style.border = "1px solid red";
					email_error.style.color = "red";
					email_error.textContent = "Email is required";
					email.focus();
					return false;
				} else if (!re.test(email.value)) {
					email.style.border = "1px solid red";
					email_error.style.color = "red";
					email_error.textContent = "Invalid email, please re-enter";
					email.focus();
					return false;
				} else {
					return true;
				}


			}

			function submitBTN_validate() {
				var password_validate = passwordVerify();
				var email_validate = emailVerify();
				var form_validate = ValidateForm();


				if (password_validate && email_validate && form_validate) {

					window.location.href = "index.php";
				}

			}
		</script>
</body>