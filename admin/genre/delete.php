<?php
include '../../koneksi.php';

$genre_id = $_POST['genre_id'];

$updateQuery = "UPDATE movies SET genre_id = NULL WHERE genre_id = $genre_id";

if (mysqli_query($conn, $updateQuery)) {
    $deleteQuery = "DELETE FROM genres WHERE genre_id = $genre_id";
    if (mysqli_query($conn, $deleteQuery)) {
        header("location: ../genre.php");
    } else {
        echo "Data Gagal Hapus!";
    }
} else {
    echo "Gagal menghapus";
}
?>