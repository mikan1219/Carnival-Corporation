<?php
if(isset($_SESSION["user"])){ ?>
<div class="footer-nav">
		<ul>                                               
				<li><a href="travel.php">Your Booking</a></li>  
				<li><a href="profile.php">Profile</a></li>   
				<li style="border-right:none;"><a href="logout.php">Logout</a></li>
		</ul>
</div>
<?php } else{ ?>
	<div class="footer-nav">
		<ul>                                               
				<li><a href="login.php">Login</a></li>  
				<li><a href="login.php">Sign Up</a></li>   
				<li style="border-right:none;"><a href="forgot.php">Forgot Password</a></li>
		</ul>
</div>
<?php } ?>
