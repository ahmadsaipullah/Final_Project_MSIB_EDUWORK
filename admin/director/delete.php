<?php
include '../../koneksi.php';
$director_id= $_GET ['director_id'] ;

mysqli_query ($conn, "DELETE FROM director WHERE director_id = '$director_id'") or die(mysqli_error($conn));
header("Location:../director.php");
?> 