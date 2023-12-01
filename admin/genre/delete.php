<?php
include '../../koneksi.php';
$genre_id= $_GET ['genre_id'] ;

mysqli_query ($conn, "DELETE FROM genres WHERE genre_id = '$genre_id'") or die(mysqli_error($conn));
header("Location:../genre.php");
?> 