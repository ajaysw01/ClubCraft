<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<style>
		
	</style>
	

	</head>
	<body>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<!-- <p class="num">Call: +91 8459886292</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
							<li><a href="http://localhost/code/admin/admin_login.html"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
         include("commonpages/header.php")
		?>
	</nav>

				<div class="col-md-12 animate-box" align="center">
					
					<form action="PHP/registration_insert.php" align="center" method="POST">
                      <table width="40%" height="600px" >
						<div class="row form-group">
							<div class="col-md-12">
						    <div class="col-md-12">
								<tr>
								<h1>REGISTRATION!</h1>
								</tr>
								<tr>
								<td>Name:</td>
								<td><input type="text" id="name" name="name" class="form-control" placeholder="Your Name here" required></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Email:</td>
								<td><input type="email" id="email" name="email" class="form-control" placeholder="Your Email here" required></td>
							</tr>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Password:</td>
								<td><input type="password" id="pass" name="pass" class="form-control" pattern="(?=.*[A-Z0-9!@#$%^&])\w[!@#$%^&]{6,15})" placeholder="Your Password here" required></td>
							</tr>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Contact:</td>
								<td><input type="text" pattern="\d{0-9}" minlength="10" maxlength="10" id="Mobile" name="contact" class="form-control" placeholder="Your contact here" required></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Date of Birth :</td>
								<td><input type="date" id="date" name="regdate" class="form-control" placeholder="registeration date" required></td>
							</tr>
							</div>
						</div>
						

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Address:</td>
								<td>
								<input type="text" name="address" class="form-control" placeholder="Your Address" required></td>
							</tr>
							</div>
						</div>
						
						<div class="form-group">
							<tr>
								<td>&nbsp;</td>

								<td><input type="submit" value="Register" name='submit' class="btn btn-primary"> &nbsp; &nbsp; &nbsp; 

								
								<input type="reset" value="Reset" class="btn btn-primary" name="btn_log" > &nbsp; &nbsp; &nbsp;

								<a href="login.php"><input type="button" value="LogIn" class="btn btn-primary" name="btn_log" ></a>
							</td>
							
							</tr>

						</div>
                    </table>
					</form>		
				</div>
			</div>

			<?php
         include("commonpages/out_footer.php")
		?>

		
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

