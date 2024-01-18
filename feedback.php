<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ClubCraft Feedback</title>



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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
		<!-- HEADER REMOVE HERE -->
		<?php include('./commonpages/header.php');?>
	</nav>
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Pune Maharashtra <br> </li>
							<li class="phone"><a href="#">+91 8459886292</a></li>
							<li class="email"><a href="#">ClubCraft@gmail.com</a></li>
							
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Give Feedback</h3>
					<form action="PHP/feedbackinsert.php" method="POST">
						<div class="row form-group">
							<div class="col-md-6">
								
								<input type="text" id="fname" name="name" class="form-control" placeholder="Your firstname" required>
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								
								<input type="email" id="email" name="email" class="form-control" placeholder="Your email address"  required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" minlength="5" maxlength="20" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								
								<textarea  id="message" name="about" cols="30" rows="10" class="form-control" placeholder="Say something about us"  minlength="10" maxlength="30" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Send Feedback" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
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

