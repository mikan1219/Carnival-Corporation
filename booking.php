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
		<!-- booking -->
		<div class="booking">
			<!-- container -->
			<div class="container">
				<div class="booking-info">
					<h3>booking</h3>
				</div>
				<div class="booking-form">
					<!---strat-date-piker---->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
					<!---/End-date-piker---->
					<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
					<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
					<script type="text/javascript" src="js/JFCore.js"></script>
					<script type="text/javascript" src="js/JFForms.js"></script>
					<!-- Set here the key for your domain in order to hide the watermark on the web server -->
					<script type="text/javascript">
						(function() {
							JC.init({
								domainKey: ''
							});
						})();
					</script>
					<div class="online_reservation">
							<div class="b_room">
								<div class="booking_room">
									<div class="reservation">
										<form method="POST" action="booking-added.php">	
										<ul>	
											<li  class="span1_of_1 left">
												 <h5>From</h5>
												 <div class="book_date">
														<select id="bfrom" name="bfrom" onchange="change_country(this.value)" class="frm-field required">
														<option value="Singapore" selected>Singapore</option> 
														<option value="Malaysia">Malaysia</option>
														<option value="Indonesia">Indonesia</option>
														</select>
												 </div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>To</h5>
												 <div class="book_date">
													<select id="bto" name="bto"  onchange="change_country(this.value)" class="frm-field required">
														<option value="Melbourne" selected>Melbourne</option> 
														<option value="Los Angeles">Los Angeles</option> 
														<option value="New York">New York</option> 
														<option value="Shang Hai">Shang Hai</option>  
													</select>
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Arrival</h5>
												 <div class="book_date">
													 <input class="date" id="datepicker" name="datepicker" type="text" placeholder="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '8/08/2016';}" required />
												 </div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Depature</h5>
												 <div class="book_date">
												 <form>
													<input class="date" id="datepicker1" name="datepicker1" type="text" placeholder="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '22/08/2016';}" required />
												 </form>
												 </div>		
											 </li>
											 <li class="span1_of_1">
												 <h5>Number of People</h5>
												 <div class="section_room">
													  <select id="people" name="people" onchange="change_country(this.value)" class="frm-field required">
															<option value="1 ppl">1 ppl</option>
															<option value="2 ppl">2 ppl</option>
															<option value="3 ppl">3 ppl</option>
															<option value="4 ppl">4 ppl</option>
															<option value="5 ppl">5 ppl</option>         
															<option value="6 ppl">6 ppl</option>
															<option value="7 ppl">7 ppl</option>
															<option value="8 ppl">8 ppl</option>
															<option value="9 ppl">9 ppl</option>
															<option value="10 ppl">10 ppl</option>
													  </select>
												 </div>	
											 </li>

											 <li class="span1_of_3">
													<div class="date_btn">
															<input type="submit" value="Book Now" />
													</div>
											 </li>
											 <div class="clearfix"></div>
										</ul>
											 </form>
									 </div>
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
					<!---->
				</div>
				<div class="clearfix"></div>
				
			<div class="visiting">
				<!-- container -->
				<div class="container">
					<div class="visiting-info">
						<h3>VISITING PLACES</h3>
					</div>
					<div class="top-grids">
						<div class="top-grid">
							<img src="images/6.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Singapore</h3>
								<p>Singapore, an island city-state off southern Malaysia, is a global financial centre with a tropical climate and multicultural population. 
                                                                   In circa-1820 Chinatown stands the red-and-gold Buddha’s Tooth Relic Temple, Little India offers colorful souvenirs and Arab Street is lined with fabric shops. Singapore is also known for eclectic street fare, served in hawker centres such as Tiong Bahru and Maxwell Road.</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/3.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Melbourne</h3>
								<p>Melbourne, Victoria’s coastal capital, is a city of stately 19th-century buildings and tree-lined boulevards. Yet at its centre is the strikingly modern Federation Square development, with plazas, bars, restaurants and cultural events along the Yarra River. 
                                                                   In Southbank, the Melbourne Arts Precinct is site of Arts Centre Melbourne – a performing arts complex – and National Gallery of Victoria, displaying Australian and Indigenous art.</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/2.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Malaysia</h3>
								<p>Malaysia is a Southeast Asian country occupying the Malaysian Peninsula and part of the island of Borneo. It's known for its beaches, rainforests and mix of Malay, Chinese, Indian and European influences. 
                                                                   The sprawling capital, Kuala Lumpur, is home to colonial buildings, busy shopping districts such as Bukit Bintang and skyscrapers including the iconic, 451m-tall Petronas Twin Towers.</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/4.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>New York City</h3>
								<p>Home to the Empire State Building, Times Square, Statue of Liberty and other iconic sites, New York City is a fast-paced, globally influential center of art, culture, fashion and finance.
                                                                   The city’s 5 boroughs sit where the Hudson River meets the Atlantic Ocean, with the island borough of Manhattan at the “Big Apple's" core.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>
		</div>
		<!-- booking -->
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