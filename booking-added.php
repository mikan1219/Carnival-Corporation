<?php
session_start();
if(!isset($_SESSION['user'])){
	header("Location:login.php");
}
?>

<?php
$olddata = file_get_contents('./user/jackteoh-bookings.txt', true);
$newbooking = fopen("user/jackteoh-bookings.txt", "w") or die("Unable to open file!");
	$btxt = "<tr><td>". $_POST['bfrom'] ."</td><td>". $_POST['bto'] ."</td><td>". $_POST['datepicker'] ."</td><td>". $_POST['datepicker1'] ."</td><td>". $_POST['people'] ."</td></tr>" . $olddata;
	fwrite($newbooking, $btxt);
	fclose($newbooking);

	echo "Your bookings is added, thanks for you support!<br />Auto redirect in 3 seconds...";
	echo '<meta http-equiv="refresh" content="3;url=travel.php" />';

?>