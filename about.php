<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Princess Cruise | Travel around the world</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<script src="js/modernizr.custom.js"></script>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<div class="head-bg green">
			<!-- container -->
			<div class="container">
				<div class="head-logo">
					<a href="index.php"><img src="images/logo1.png" alt="" /></a>
				</div>
				<div class="top-nav">
						<span class="menu"><img src="images/menu.png" alt=""></span>
							<ul class="cl-effect-1">
								<li><a href="index.php">HOME</a></li>                                             
								<li><a href="about.php">ABOUT</a></li>
								<li><a href="booking.php">BOOKING</a></li> 
								<li><a href="news.php">NEWS</a></li> 
								<li><a href="mail.php">MAIL US</a></li>  
							</ul>
							<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.cl-effect-1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
					</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
			</div>
			<!-- about -->
			<div class="about">
				<!-- container -->
				<div class="container">
					<div class="about-info">
						<h3>about us</h3>
						<h4>Princess Cruises and its British-based counterpart, the Cunard Line, are two of the largest cruise operators in the world, carrying over 1.5 million passengers per year on almost 20 luxury ships.
						</h4>
						<p>Princess Cruises offers more than 115 cruise itineraries that sail to all seven continents and call at 350 ports located around the globe, while Cunard focuses on travel in the Atlantic Ocean and Mediterranean Sea. 
                                                   Both are owned by Carnival Corporation and are headquartered in Valencia, California </p>
					</div>
				</div>
				<!-- //container -->
			</div>
			<!-- about -->
			<!-- about-banner -->
			<div class="about-banner">
				<div class="banner-bg">
					<h3>WE OFFER!</h3>
					<div class="read-more">
						<a href="#">SEE THE TOUR</a>
					</div>
				</div>
			</div>
			<!-- about-banner -->
			<!-- team -->
			<div class="team">
				<!-- container -->
				<div class="container">
					<div class="team-info">
						<h3>OUR TEAM</h3>
					</div>
					<div class="team-grids">
						<div class="team-grid">
							<img src="images/7.jpg" alt="" />
							<div class="team-grid-info">
								<h4>MIKAN PANG</h4>
								<p>Princess Cruise`s CEO
								</p>
							</div>
						</div>
						<div class="team-grid">
							<img src="images/8.jpg" alt="" />
							<div class="team-grid-info">
								<h4>JACK TEOH</h4>
								<p>Event Manager
								</p>
							</div>
						</div>
						<div class="team-grid">
							<img src="images/9.jpg" alt="" />
							<div class="team-grid-info">
								<h4>Xiang Yang</h4>
								<p>IT Department Manager
								</p>
							</div>
						</div>
						<div class="team-grid">
							<img src="images/10.jpg" alt="" />
							<div class="team-grid-info">
								<h4>Tim Tim</h4>
								<p>The Crew of Princess Cruise
								</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- container -->
			</div>
			<!-- //team -->
			<!-- footer -->
		<div class="footer" style="border-top:1px #ddd solid;">
			<!-- container -->
			<div class="container">
				<div class="footer-left">
					<p>Copyright &copy; <?php echo date("Y"); ?> <a href="#">Princess Cruise</a>. All Rights Reserved</p>
				</div>
					<div class="footer-right">
						<?php include("footer-menu.php"); ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
			<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>