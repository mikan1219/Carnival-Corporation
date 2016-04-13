<?php
session_start();
if(isset($_SESSION['user'])){
	header("Location:index.php");
}
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
			<div class="about" style="margin-bottom:40px;">
				<!-- container -->
				<div class="container">
					<div class="about-info" style="min-height:450px;">
					<!-- Forgot Password -->
						<div class="col-md-6 contact-form">
						<h3 style="margin-bottom:30px;">Recover Password</h3>
						<form method="POST" action="recoverpwd.php">
							<input type="text" placeholder="Username" />
							<input type="text" placeholder="Email" required/>
							<input type="submit" value="Login" />
						</form>
						</div>
					<!-- //Forgot Password -->
					</div>
				</div>
				<!-- //container -->
			</div>
			<!-- about -->
			
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