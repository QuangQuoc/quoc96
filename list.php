<?php
include 'connectDB.php';
$sql = "SELECT * FROM `db_room`";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "$row[id]) Temperature: $row[temperature] ---------- Light: $row[light]<br>";
	}
	mysqli_close($con);
}
else echo "Table is empty";

?>

