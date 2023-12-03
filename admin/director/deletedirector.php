<?php
include '../../koneksi.php';


//Update di barang


if (isset($_POST['director_id'])) {
    $updateQuery = "UPDATE movies SET director_id = NULL WHERE director_id = $director_id";
    $director_id = $_POST['director_id'];
    $deleteQuery = "DELETE FROM director WHERE director_id = $director_id";
    if (mysqli_query($conn, $deleteQuery)) {
        header("location: ../director.php");
    } else {
        echo "Data Gagal Hapus!";
    }
} else {
    echo "Gagal menghapus FOREIGN KEY.";
}
?>