<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registratin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>

	<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#"><img src="logo1.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	<i class="fa fa-bars" aria-hidden="true"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="new.html">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="login.php">Sign in</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="login.php">Register</a>
		</li>
		<li class="nav-item">
			<a class="nav-link " href="contactus.html">Contact Us</a>
		</li>
	</ul>
	</div>
	</nav>

	</section>


	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> Login Here </h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label> Email </label>
						<input type="text" name="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label> Password </label>
						<input type="password" name="password" class="form-control" required>
					</div>

					<button type="Submit" class="btn btn-primary"> Login </button>
				</form>

			</div>

			<div class="col-md-6 login-right">
				<h2> Register Here </h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label> Email </label>
						<input type="text" name="User" class="form-control" required>
					</div>

					<div class="form-group">
						<label> Password </label>
						<input type="password" name="password" class="form-control" required>
					</div>

					<button type="Submit" class="btn btn-primary"> Register </button>
				</form>

			</div>

		</div>

</div>

	</div>

	<section id="footer" >
	<img src="" class="footer-img">
	<div class="container">
			<div class="row">
					<div class="col-md-4 footer-box">
							<img src="">
							<p> Subscribe to our newsletter and social media handles to get notified</p>


					</div>
					<div class="col-md-4 footer-box">
							<p> <b> CONTACT US </b> </p>
							<p><i class="fa fa-map-marker"></i> #212 Fib building, Kairaba Avn</p>
							<p><i class="fa fa-phone"></i> +2204473473</p>
							<p><i class="fa fa-envelope-o"></i>  contactus@example.gm</p>
					</div>


					<div class="col-md-4 footer-box">
							<p> <b> SUBSCRIBE NEWSLETTER </b> </p>
							<input type="email"  class="form-control" placeholder="Your Email">
							<button type="button" class="btn btn-primary"> Subscribe </button>


					</div>


			</div>
			<hr>
			<p class="copyright"> SCHOOL FEES ONLINE PAYMENT </p>

	</div>

	</section>


	<!----------------------------smooth scroll------------------------------------>
	<script src="smooth-scroll.js"></script>
	<script>
	var scroll = new SmoothScroll('a[href*="#"]');
	</script>

</body>
</html>
