
<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "dbfilm";

$conn = new mysqli($hostName, $userName, $password, $dbName);
?>
<?php
$con = mysqli_connect("localhost", "root", "", "dbfilm");
?>
<?php 
$conn = mysqli_connect("localhost","root","","dbfilm");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>