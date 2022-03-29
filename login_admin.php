<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

    <?php include 'other/header.php';?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/login_logo.png" alt="IMG">
				</div>

				<form onsubmit="login()" class="login100-form validate-form" id="LoginForm">
					<span class="login100-form-title">
						Admin Login
					</span>
					<center><small><span id="error" style="color: red"></span></small></center>

					<div  class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password" class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a onClick="forgotPass()" class="txt2" href="#">
							 Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include 'other/footer.php';?>


<!--===============================================================================================-->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
	https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>

<script src="backend/login_registration/firebase.js"></script>
<script src="backend/login_registration/index.js"></script>
<!--===============================================================================================-->	
	<script src="support_files/login/jquery-3.2.1.min.js"></script>
	<script src="support_files/login/tilt.jquery.min.js"></script>
	
</body>
</html>