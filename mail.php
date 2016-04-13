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
		<!-- mail -->
		<div class="mail">
			<!-- container -->
			<div class="container">
				<div class="mail-info">
					<h3>OUR LOCATION</h3>
				</div>
				<div class="map">
					<div style="width:1140px;overflow:hidden;height:400px;max-width:100%;"><div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Johor+Bahru+Johor+Malaysia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="code-for-google-map" rel="nofollow" href="https://www.interserver-coupons.com" id="enable-maps-data">InterserverCoupons</a><style>#my-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=250c9168-267c-eae4-2af7-80c1365bd221&c=code-for-google-map&u=1460048904" defer="defer" async="async"></script>
				</div>
				<div class="mail-info-grids">
					<div class="col-md-6 mail-info-grid">
						<h3>Contact Information</h3>
						<p>
						For further information or if you have any questions please do not hesitate to contact us. We are looking forward to hearing from you.
						</p>
						<h6>Princess Cruise
						<span>1000, Jalan JB 10/100,</span>
							Johor Bahru, Johor.
						</h6>
						<p>Telephone: +60123456789
						<span>FAX: +6012345678</span>
						E-mail: <a href="mailto:mail@princesscruise.com">mail@princesscruise.com</a>
						</p>
					</div>
					<div class="col-md-6 contact-form">
						<form method="POST" action="sendmail.php">
							<input type="text" placeholder="Name:" required="" id="ctname" name="ctname">
							<input type="email" placeholder="Email:" required="" id="ctemail" name="ctemail">
							<input type="text" placeholder="Subject:" required="" id="ctsubject" name="ctsubject">
							<textarea placeholder="Message:" required="" id="ctmsg" name="ctmsg"></textarea>
							<input type="submit" value="SEND">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //mail -->
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