<?php
include('../../koneksi.php');

$director_id = $_POST['director_id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$query = "UPDATE director SET nama = '$nama', email = '$email' WHERE director_id = $director_id";

if (mysqli_query($conn, $query)) {
    header("location: ../director.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>