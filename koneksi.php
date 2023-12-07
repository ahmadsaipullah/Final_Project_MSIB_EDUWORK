<<<<<<< HEAD
<<<<<<< HEAD
<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "db_film";

$conn = new mysqli($hostName, $userName, $password, $dbName);
=======
<<<<<<<< HEAD:config.php
<?php
$con = mysqli_connect("localhost", "root", "", "dbfilm");
========
<?php 
$conn = mysqli_connect("localhost","root","","dbfilm");
>>>>>>>> 03acf66e23b6df5fc0b123905a5034ac206d5d63:koneksi.php

=======

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

>>>>>>> 87312c90d02fff2c9a3c464d0d8b18560126a474
// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
<<<<<<< HEAD
>>>>>>> 03acf66e23b6df5fc0b123905a5034ac206d5d63
=======
?>
>>>>>>> 87312c90d02fff2c9a3c464d0d8b18560126a474
