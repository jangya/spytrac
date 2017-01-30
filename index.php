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
		<section class="content-1 mbr-parallax-background mbr-added" id="msg-box3-17" style="background-image: url(assets/img/home-bg2.jpg);overflow: hidden;padding: 100px 0px;position: relative;text-align: center;background-attachment: fixed !important;background-position: 50% 0;background-repeat: no-repeat;background-size: cover !important;">
    <div class="mbr-overlay" style="opacity: 0.8;background-color: rgb(0, 0, 0);background: #222;bottom: 0;left: 0;position: absolute;right: 0;top: 0;z-index: 2;"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Mobirise — an alternative to jQuery plugins</h2>
                <div><p>The disadvantage of jQuery plugins is that you still need some knowledge of HTML, CSS and JavaScript to make them work, even if they do some of the heavy lifting for you. They also frequently limit the effects they allow you to apply.</p><p>Mobirise is a drag-and-drop website builder which allows you to create sophisticated and modern looking websites without any knowledge of coding.&nbsp;</p><p><br></p><p><strong>How to add a parallax scroll effect using Mobirise</strong>&nbsp;</p><p><br></p><p>1. Add content to your webpage by clicking on the Add Block to Page button (a cross in the bottom-left corner).</p><p>2. Once the content on your website is laid out, click on the Block Parameters icon — a small ‘gear’ icon at the top left of the screen.</p><p>3. Change the background image if desired. Tip: You can choose a background color or video if you prefer not to use an image by selecting from the options.</p><p>4. Turn parallax on or off with the button.</p><p>5. Add a color overlay if desired (this can help your text ‘pop’ from the background.</p><p>6. Click the X at the bottom to close the Block Parameters window.</p><p><br></p><p>Mobirise will now add all of the necessary code to your website to create a seamless parallax scroll that works across a wide range of browsers and devices. The whole thing takes just a few minutes to set up, and Mobirise itself is free to download and use.</p></div>
                
            </div>
        </div>
    </div>
</section>
		<!-- Home and Intro
		============================================== -->
		<!--<section id="home" class="home-section hero-layout-simple section section-dark">
			<div class="section-background">
				<!-- IMAGE BACKGROUND 
				<div class="section-background-image parallax" data-stellar-ratio="0.5">
					<img src="assets/img/home-bg2.jpg" alt="" style="opacity: 0.3;">
				</div>
			</div>
			<div class="container">
				<div class="hero-content">
					<div class="hero-content-inner">
						<div class="table-row row">
							<div class="table-cell col-md-6">
								<img src="assets/img/home-banner.png" alt="" width="500" height="510" data-animation="fadeInLeft" class="fadeInLeft animated done-animation">
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
		</section>-->
		<!-- Footer
		==============================================-->
		<?php include 'footer.php';  ?>
		<script src="assets/js/jquery.parallax.js"></script>
<!-- 		<script src="assets/js/spytrac.js"></script> -->
		<script>
			$(function() {
  
			  $(".mbr-parallax-background").parallaxScroll({
			    friction: 0.5,
			    direction: "vertical"
			  });

			});
		</script>
	</div>
</body>
</html>
