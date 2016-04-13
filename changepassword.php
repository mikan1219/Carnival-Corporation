<?php
session_start();
if(!isset($_SESSION['user'])){
	header("Location:login.php");
}
?>

<?php
if($_POST["old-pwd"] == file_get_contents('./user/jackteoh.txt', true) && $_POST["new-pwd"] == $_POST["new2-pwd"] ) {
		$myfile = fopen("user/jackteoh.txt", "w") or die("Unable to open file!");
	$txt = $_POST["new2-pwd"];
	fwrite($myfile, $txt);
	fclose($myfile);
		session_unset();
		echo "Password Change Successful<br />Auto redirect in 3 seconds...";
		echo '<meta http-equiv="refresh" content="3;url=login.php" />';
}
else{
		echo "Cannot change password, please make sure your password is correct!<br />Auto redirect in 3 seconds...";
		echo '<meta http-equiv="refresh" content="3;url=profile.php" />';
}

?>