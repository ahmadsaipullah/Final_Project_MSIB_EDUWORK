<?php
// Pastikan form menggunakan atribut name yang sesuai dengan kolom dalam tabel movies

$genre_name = $_POST["genre_name"];

include_once "../../koneksi.php";

// Lakukan query untuk menyimpan data film ke dalam tabel movies
mysqli_query($conn, "INSERT INTO `genres` (`genre_name` ) 
VALUES ('$genre_name')");

// Redirect ke halaman movies.php setelah berhasil menambahkan film
header("Location: ../genre.php");
?>
