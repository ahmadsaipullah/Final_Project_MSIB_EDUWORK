<?php
include '../../koneksi.php';

if (isset($_POST['tambah']) && $_POST['tambah'] == 'simpan') {
    $movie_id = $_POST['movie_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $director_id = $_POST['director_id'];
    $genre_id = $_POST['genre_id'];
    $movie_link = $_POST['movie_link'];
    $actor = $_POST['actor'];
    $durasi = $_POST['durasi'];

    // File upload handling
    $target_dir = "../../images/img/";
    $cover_image = basename($_FILES["cover_image"]["name"]);
    $target_file = $target_dir . $cover_image;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["cover_image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["cover_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["cover_image"]["tmp_name"], $target_file)) {
            // Perform the update query
            $update_query = "UPDATE movies SET judul='$judul', deskripsi='$deskripsi', director_id='$director_id', genre_id='$genre_id', movie_link='$movie_link', actor='$actor', durasi='$durasi', cover_image='$cover_image' WHERE movie_id='$movie_id'";
            $result = mysqli_query($conn, $update_query);

            if ($result) {
                header("Location: ../movies.php"); // Redirect to the movies.php page after successful update
                exit();
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    // Redirect to the movies.php page if 'tambah' is not set
    header("Location: ../movies.php");
    exit();
}
?>