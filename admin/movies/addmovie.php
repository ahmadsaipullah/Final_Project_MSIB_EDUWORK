<?php
include '../../koneksi.php';

if (isset($_POST['tambah']) && $_POST['tambah'] == 'simpan') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $director_id = $_POST['director_id'];
    $genre_id = $_POST['genre_id'];
    $movie_link = $_POST['movie_link'];
    $actor = $_POST['actor'];
    $durasi = $_POST['durasi'];

    // Proses upload gambar
    $cover_image = $_FILES['cover_image']['name'];
    $temp_image = $_FILES['cover_image']['tmp_name'];
    $folder = "../../images/img/";
    move_uploaded_file($temp_image, $folder . $cover_image);

    // Insert data ke database
    $insert_query = "INSERT INTO movies (judul, deskripsi, director_id, genre_id, movie_link, actor, durasi, cover_image) VALUES ('$judul', '$deskripsi', '$director_id', '$genre_id', '$movie_link', '$actor', '$durasi', '$cover_image')";

    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        echo "<script>alert('Movie added successfully');</script>";
    } else {
        echo "<script>alert('Failed to add movie');</script>";
    }
}

header("Location: ../movies.php"); // Redirect back to movies.php
exit();
?>
