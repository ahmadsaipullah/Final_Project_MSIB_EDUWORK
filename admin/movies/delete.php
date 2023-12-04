<?php
include '../../koneksi.php';

if (isset($_POST['hapus'])) {
    $movie_id = $_POST['movie_id'];

    // Delete data from the database
    $delete_query = mysqli_query($conn, "DELETE FROM movies WHERE movie_id = '$movie_id'");

    if ($delete_query) {
        // Redirect to the manage.php page after successful deletion
        header("Location: ../movies.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
