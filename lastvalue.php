<?php
include 'connectDB.php';
$sql = "SELECT * FROM `db_room` ORDER BY `id` DESC LIMIT 1";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	echo "Last temperature:". $row['temperature']."<br> Last light:".$row['light']. "<br>";
	}
}
mysqli_close($con);
?>
