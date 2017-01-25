<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spytrac</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/spytrac.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootsnav.css"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/overwrite.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
</head>
<body class="spytrac">
	<div class="inner-body">
		<!-- Header 
		==============================================-->
		<?php include 'header.php'; ?>

		<!-- Home and Intro
		============================================== -->
		<section id="home" class="home-section hero-layout-simple section section-dark">
			<div class="section-background">
				<!-- IMAGE BACKGROUND -->
				<div class="section-background-image parallax" data-stellar-ratio="0.4">
					<img src="assets/img/home-bg.jpg" alt="">
				</div>
			</div>
			<div class="container">
				<div class="hero-content">
					<div class="hero-content-inner">
						<div class="table-row row">
							<div class="table-cell col-md-6">
								<img src="images/contents/product-image-1.png" alt="" data-animation="fadeInLeft" class="fadeInLeft animated done-animation">
							</div>
							<div class="table-cell col-md-6">
								<div class="hero-heading fadeIn animated done-animation" data-animation="fadeIn">
									<h1 class="hero-subtitle">Hi, Welcome to Drew</h1>
									<p class="hero-tagline">A robust Landing Page Template which solves all your landing page needs</p>
								</div>
								<p class="hero-buttons">
									<a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer
		==============================================-->
		<?php include 'footer.php';  ?>
		<script>
			$.stellar({
				responsive: true,
				horizontalScrolling: false,
				hideDistantElements: false,
				verticalOffset: 0,
				horizontalOffset: 0,
			});
		</script>
	</div>
</body>
</html>
