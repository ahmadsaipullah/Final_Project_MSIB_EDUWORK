<?php
include 'koneksi.php';

//get data dari form
$movie_id = $_POST['movie_id'];
$reviewer_name = $_POST['reviewer_name'];
$review_text = $_POST['review_text'];
$rating = $_POST['rating'];
$date = date("Y-m-d");

//query insert data ke dalam database
$query = "INSERT INTO reviews (movie_id, reviewer_name, review_date, review_text, rating) VALUES ('$movie_id', '$reviewer_name', '$date','$review_text','$rating')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($conn->query($query)) {
  header("location: home.php ");
} else {
  echo "Data Gagal Disimpan!";
}
