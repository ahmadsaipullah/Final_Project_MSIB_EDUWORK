<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie_id = $_POST['movie_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $director_id = $_POST['director_id'];
    $genre_id = $_POST['genre_id'];
    $movie_link = $_POST['movie_link'];
    $actor = $_POST['actor'];
    $durasi = $_POST['durasi'];

    // Cek apakah file cover_image diupload
    if (!empty($_FILES['cover_image']['name'])) {
        $cover_image = $_FILES['cover_image']['name'];
        $temp = $_FILES['cover_image']['tmp_name'];
        $path = "../../images/img/" . $cover_image;
        move_uploaded_file($temp, $path);
    } else {
        // Jika tidak diubah, ambil nama file cover_image yang ada di database
        $result = mysqli_query($conn, "SELECT cover_image FROM movies WHERE movie_id = '$movie_id'");
        $row = mysqli_fetch_assoc($result);
        $cover_image = $row['cover_image'];
    }

    $update_query = "UPDATE movies SET 
                    judul = '$judul',
                    deskripsi = '$deskripsi',
                    director_id = '$director_id',
                    genre_id = '$genre_id',
                    movie_link = '$movie_link',
                    actor = '$actor',
                    durasi = '$durasi',
                    cover_image = '$cover_image'
                    WHERE movie_id = '$movie_id'";

    if (mysqli_query($conn, $update_query)) {
        header("location: ../movies.php");
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>