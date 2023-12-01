<?php
// Pastikan form menggunakan atribut name yang sesuai dengan kolom dalam tabel movies

$nama = $_POST["nama"];
$email = $_POST["email"];

include_once "../../koneksi.php";

// Lakukan query untuk menyimpan data film ke dalam tabel movies
mysqli_query($conn, "INSERT INTO `director` (`nama`, `email` ) 
VALUES ('$nama', '$email')");

// Redirect ke halaman movies.php setelah berhasil menambahkan film
header("Location: ../director.php");
?>
