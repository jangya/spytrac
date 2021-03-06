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
				<div id="pic1" class="parallax" data-width="1024" data-height="568"></div>
			</div>
			<div class="container">
				<div class="hero-content">
					<div class="hero-content-inner">
						<div class="table-row row">
<!-- 							<div class="table-cell col-md-6">
								<img src="assets/img/home-banner.png" alt="" width="500" height="510" data-animation="fadeInLeft" class="fadeInLeft animated done-animation">
							</div> -->
							<div class="table-cell col-md-6 pull-right">
								<div class="hero-heading fadeIn animated done-animation" data-animation="fadeIn">
									<h1 class="hero-subtitle">Hi, Welcome to Spytrac</h1>
									<p class="hero-tagline">A robust Landing Page Template which solves all your landing page needs</p>
								</div>
								<p class="hero-buttons">
									<a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy Products</a>
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
		<script src="assets/js/jquery.parallax-scroll.min.js"></script>
<!-- 		<script src="assets/js/spytrac.js"></script> -->
		<script>
			$(function() {
  			 $window = $( window );
			  $(".parallax").parallaxScroll({
			    friction: 0.5,
			    direction: "vertical"
			  });
			var toggleHeaderFloating = function() {
			// Floating Header
				if ( $window.scrollTop() > 80 ) {
					$( '.header-section' ).addClass( 'floating' );
				} else {
					$( '.header-section' ).removeClass( 'floating' );
				};
			};

			$window.on( 'scroll', toggleHeaderFloating );
			});
		</script>
	</div>
</body>
</html>
