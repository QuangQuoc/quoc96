<?php
include 'connectDB.php';
if(isset($_GET['temp'], $_GET['light'])){
	$temp = $_GET['temp'];
	$light = $_GET['light'];

	$sql = "INSERT INTO `db_room` (`temperature`, `light`) VALUES ('$temp', '$light')";
	if($result=mysqli_query($con, $sql)){
	echo "Insert completed";
	}
} else echo "No Data";
	mysqli_close($con);
?>