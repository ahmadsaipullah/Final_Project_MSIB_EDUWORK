<?php
// Pastikan form menggunakan atribut name yang sesuai dengan kolom dalam tabel movies

$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$cover_image = $_POST["cover_image"];
$actor = $_POST["actor"];

include_once "../../koneksi.php";

// Lakukan query untuk menyimpan data film ke dalam tabel movies
mysqli_query($conn, "INSERT INTO movies (judul, deskripsi, cover_image, actor, durasi ) 
VALUES ('$judul', '$deskripsi', '$cover_image', '$actor', '$durasi')");

// Redirect ke halaman movies.php setelah berhasil menambahkan film
header("Location: ../movies.php");
?>