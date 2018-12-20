<?php
include 'connectDB.php';
$sql = "SELECT * FROM `db_room`";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<link rel="stylesheet" href="test.css">
</head>
<body>
	<?php
	if(mysqli_num_rows($result) > 0){
	 ?>
	<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Temperature</th>
			<th>Light</th>
		</tr>
	</thead>
	<tbody>
	<?php 	while($row = mysqli_fetch_assoc($result)){  ?>
		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['temperature']?></td>
			<td><?=$row['light']?></td>
		</tr>
	<?php } ?>
	</tbody>	
	</table>
	<?php
	}
	else echo "Table is empty";
	mysqli_close($con);
	 ?>
</body>
</htm