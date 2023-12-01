<?php
include '../../koneksi.php';

if (!isset($_POST['movie_id'])) {
    die("Error: ID barang tidak ditemukan.");
}

// Proses form edit data
$movie_id = $_POST["movie_id"];
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$cover_image = $_POST["cover_image"];
$actor = $_POST["actor"];
$durasi = $_POST["durasi"];

// Perbaikan pada query UPDATE
$sql = "UPDATE movies SET judul='$judul', deskripsi='$deskripsi', cover_image='$cover_image', actor='$actor', durasi='$durasi' WHERE movie_id='$movie_id'";

if ($conn->query($sql) === TRUE) {
    echo "Data produk berhasil diubah.";
    header("Location: ../movies.php"); // Pindah ke halaman utama setelah berhasil mengubah data
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
