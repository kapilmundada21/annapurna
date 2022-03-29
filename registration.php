<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
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

				<form id="registration-form" class="login100-form validate-form"  onSubmit="signUp()">
					<span class="login100-form-title">
						Registration
					</span>
					<center><small><span id="error" style="color: red"></span></small></center>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="name" placeholder="Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="email" class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="number" class="input100" type="number" name="number" placeholder="Moblie Number" minlength="10" maxlength="10" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					

					<div class="wrap-input100 validate-input">
						<input id="password" class="input100" type="password" name="pass" placeholder="Password" minlength="4" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Signup
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Already have an Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
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
<script src="backend/login_registration/registration.js"></script>	
<!--===============================================================================================-->	
	<script src="support_files/login/jquery-3.2.1.min.js"></script>
	<script src="support_files/login/tilt.jquery.min.js"></script>
	
</body>
</html>