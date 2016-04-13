<?php
session_start();
?>

<?php
if(isset($_SESSION["user"])){
		session_unset();
		echo "Logout Successful<br />Auto redirect in 3 seconds...";
		echo '<meta http-equiv="refresh" content="3;url=index.php" />';
}
else{
		echo "Your request is not allowed, please login first!<br />Auto redirect in 3 seconds...";
		echo '<meta http-equiv="refresh" content="3;url=login.php" />';
}
?>