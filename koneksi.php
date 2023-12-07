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

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
>>>>>>> 03acf66e23b6df5fc0b123905a5034ac206d5d63
