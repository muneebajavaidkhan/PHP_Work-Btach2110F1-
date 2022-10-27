<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>

    	<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="assets/css/tiny-slider.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">





          <link rel="shortcut icon" href="assets/images/fav.jpg">
            
            <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

</head>
<body>
    
<?php if (!isset($_SESSION['db_name'])) { ?>

<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li><a class="nav-link" href="shop.html">Shop</a></li>
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="blog.html">Blog</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login.php"><img src="assets/images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="assets/images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
<!-- End Header/Navigation -->
<?php } else { ?>
    
    <!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li><a class="nav-link" href="shop.html">Shop</a></li>
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="blog.html">Blog</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
							<li><a class="nav-link" href="#" style = "color:white;font-size:18px;"><?= $_SESSION[
           'db_name'
       ] ?>
							 </a></li>

							<li><a class="nav-link" href="logout.php"><i class="fa-2x fa fa-sign-out"style = "color:white"></i></a></li>
							<li><a class="nav-link" href="cart.html"><img src="assets/images/cart.svg"></a></li>
						</ul>
				</div>
			</div>
				
		</nav>
<!-- End Header/Navigation -->
<?php } ?>









    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/custom.js"></script>



        <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>        
    <script src="assets/js/script.js"></script>
</body>
</html>