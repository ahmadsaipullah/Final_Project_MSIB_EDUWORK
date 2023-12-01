<?php
include '../../koneksi.php';
$movie_id= $_GET ['movie_id'] ;

mysqli_query ($conn, "DELETE FROM movies WHERE movie_id = '$movie_id'") or die(mysqli_error($conn));
header("Location:../movies.php");
?> 