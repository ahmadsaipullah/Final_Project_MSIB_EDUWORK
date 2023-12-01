<?php
include '../../koneksi.php';

if (!isset($_POST['director_id'])) {
    die("Error: ID barang tidak ditemukan.");
}

// Proses form edit data
$director_id = $_POST["director_id"];
$nama = $_POST["nama"];
$email = $_POST["email"];

// Perbaikan pada query UPDATE
$sql = "UPDATE director SET nama='$nama', email='$email' WHERE director_id='$director_id'";

if ($conn->query($sql) === TRUE) {
    echo "Data produk berhasil diubah.";
    header("Location: ../director.php"); // Pindah ke halaman utama setelah berhasil mengubah data
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
