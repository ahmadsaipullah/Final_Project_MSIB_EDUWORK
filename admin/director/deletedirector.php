<?php
include '../../koneksi.php';

<<<<<<< HEAD

//Update di barang


if (isset($_POST['director_id'])) {
    $updateQuery = "UPDATE movies SET director_id = NULL WHERE director_id = $director_id";
    $director_id = $_POST['director_id'];
=======
$director_id = $_POST['director_id'];

$updateQuery = "UPDATE movies SET director_id = NULL WHERE director_id = $director_id";

if (mysqli_query($conn, $updateQuery)) {
>>>>>>> 4f374f26714ed141a18b9aa668455d160df52c63
    $deleteQuery = "DELETE FROM director WHERE director_id = $director_id";
    if (mysqli_query($conn, $deleteQuery)) {
        header("location: ../director.php");
    } else {
        echo "Data Gagal Hapus!";
    }
} else {
<<<<<<< HEAD
    echo "Gagal menghapus FOREIGN KEY.";
=======
    echo "Gagal menghapus";
>>>>>>> 4f374f26714ed141a18b9aa668455d160df52c63
}
?>