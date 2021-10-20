<!DOCTYPE html>
 <?php 
 
 include('../connect.php');
 
 
 ?>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link rel="icon" type="image/png" href="adminlogin/images/icons/favicon.ico"/>
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/bootstrap/css/bootstrap.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/animate/animate.css">
 	
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/css-hamburgers/hamburgers.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/animsition/css/animsition.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/select2/select2.min.css">
  	
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/daterangepicker/daterangepicker.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="adminlogin/css/main.css">
 
</head>
<body>
 
 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action=""  >
					<?php 
					include('asc.php');
 
					$sesson = new asc();
					$sesson->ses();
					
					?>
					<span class="login100-form-title">
					Admin Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					 <div>
						 <br>
					 </div>

					<div class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn" name="sign">
							SIGN UP
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9" >
							Don’t have an account?
						</span>

						<a href="adminsignup.php" class="txt3">
							SIGN UP
						</a>
					</div>

				  

				</form>
			</div>
		</div>
	</div>
	
	
 
	<script src="adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
 
	<script src="adminlogin/vendor/animsition/js/animsition.min.js"></script>
 
	<script src="adminlogin/vendor/bootstrap/js/popper.js"></script>
	<script src="adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
 
	<script src="adminlogin/vendor/select2/select2.min.js"></script>
 
	<script src="adminlogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="adminlogin/vendor/daterangepicker/daterangepicker.js"></script>
 
	<script src="adminlogin/vendor/countdowntime/countdowntime.js"></script>
 
	<script src="adminlogin/js/main.js"></script>

</body>
</html>