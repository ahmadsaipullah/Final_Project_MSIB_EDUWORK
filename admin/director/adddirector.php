<?php

include('../../koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];

//query insert data ke dalam database
$query = "INSERT INTO director (nama, email) VALUES ('$nama', '$email')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {
    header("location: ../director.php");
} else {
    echo "Data Gagal Disimpan!";
}

?>