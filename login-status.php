<?php
session_start();
if(isset($_SESSION['user'])){
	header("Location:index.php");
}
?>

<?php
if(isset($_POST['login-username']) && isset($_POST['login-password'])){
	if($_POST["login-username"]=="jackteoh" && $_POST["login-password"]==file_get_contents('./user/jackteoh.txt', true)){
		$_SESSION["user"] = "jackteoh";
		echo "Login Successful<br />Auto redirect in 3 seconds...";
		echo '<meta http-equiv="refresh" content="3;url=index.php" />';
	}
	else{
		echo "Login Failed, Please try again!<br />Auto redirect in 3 seconds...";
		echo '<meta http-equiv="refresh" content="3;url=login.php" />';
	}
}
else{
	
}

?>