<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tapit";

$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
	die("Khong the ket noi den database");
}
