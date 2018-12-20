<?php 
if(isset($_GET['temperature'])){
	$temperature = $_GET['temperature'];
echo "$temperature";
}
else echo "Không có dữ liệu";
?>