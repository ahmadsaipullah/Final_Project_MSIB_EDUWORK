<?php
include '../../koneksi.php';

if (isset($_POST['tambah'])) {
    $genre_name = $_POST['genre_name'];

    // Using prepared statements to prevent SQL injection
    $query = "INSERT INTO genres (genre_name) VALUES (?)";
    
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $genre_name);
    
    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../genre.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
