<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PlayPRO</title>


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
	

	</head>
	<body>
		
	<!-- <div class="fh5co-loader"></div> -->
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
			  	<!-- <a href="home.php"><input type="button" value="Home" class="btn btn-primary" name="btn_log" ></a>&nbsp;  -->

					<div class="col-xs-12 text-right">
						<p class="num">Call: 8459886292</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="http://localhost/code/admin/admin_login.html"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
      # include("commonpages/loginheader.php")
		?>
	</nav>
				<div class="col-md-12 animate-box" align="center">
					
					
                      <table width="50%" height="300px">
                      	<form action="./PHP/logininsert.php" method="post">
						<div class="row form-group">
							<div class="col-md-8">
								<tr>
								<h1>LOGIN!</h1>
								</tr>
								<tr>
								<td>UserName:</td>
								<td><input type="email" id="email" name="name" class="form-control" placeholder="Your User Name here" required></td>
							</tr>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Password</td>
								<td><input type="password" id="subject" name="pass" class="form-control" placeholder="Your Password here" required ></td>
							</tr>
							</div>
						</div>

						
						<div class="form-group">
							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" value="Login" name="btn_login" class="btn btn-primary"> &nbsp;   

								<input type="reset" value="Reset" class="btn btn-primary" name="btn_log" >	 &nbsp;

								<a href="registration.php"><input type="button" value="Register" class="btn btn-primary" name="btn_log" ></a>&nbsp; 

								<a href="home.php"><input type="button" value="Home" class="btn btn-primary" name="btn_log" ></a>&nbsp; 



							</tr>

						</div>
						</form>
                    </table>
							
				</div>
			</div>
			<th></th><br>
			<th></th><br>
			<br>
			<br>
			<br>
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

