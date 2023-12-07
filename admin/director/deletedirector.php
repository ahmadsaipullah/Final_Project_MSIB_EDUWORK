<?php
include '../../koneksi.php';

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 87312c90d02fff2c9a3c464d0d8b18560126a474
<<<<<<< HEAD

//Update di barang


if (isset($_POST['director_id'])) {
    $updateQuery = "UPDATE movies SET director_id = NULL WHERE director_id = $director_id";
    $director_id = $_POST['director_id'];
=======
<<<<<<< HEAD
=======
>>>>>>> 03acf66e23b6df5fc0b123905a5034ac206d5d63
=======
>>>>>>> 87312c90d02fff2c9a3c464d0d8b18560126a474
$director_id = $_POST['director_id'];

$updateQuery = "UPDATE movies SET director_id = NULL WHERE director_id = $director_id";

if (mysqli_query($conn, $updateQuery)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4f374f26714ed141a18b9aa668455d160df52c63
=======
>>>>>>> 03acf66e23b6df5fc0b123905a5034ac206d5d63
=======
>>>>>>> 4f374f26714ed141a18b9aa668455d160df52c63
>>>>>>> 87312c90d02fff2c9a3c464d0d8b18560126a474
    $deleteQuery = "DELETE FROM director WHERE director_id = $director_id";
    if (mysqli_query($conn, $deleteQuery)) {
        header("location: ../director.php");
    } else {
        echo "Data Gagal Hapus!";
    }
} else {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 87312c90d02fff2c9a3c464d0d8b18560126a474
<<<<<<< HEAD
    echo "Gagal menghapus FOREIGN KEY.";
=======
    echo "Gagal menghapus";
>>>>>>> 4f374f26714ed141a18b9aa668455d160df52c63
<<<<<<< HEAD
=======
    echo "Gagal menghapus";
>>>>>>> 03acf66e23b6df5fc0b123905a5034ac206d5d63
=======
>>>>>>> 87312c90d02fff2c9a3c464d0d8b18560126a474
}
?>