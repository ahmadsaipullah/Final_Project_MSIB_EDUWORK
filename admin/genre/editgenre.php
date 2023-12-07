<?php
include('../../koneksi.php');

if (isset($_POST['genre_id'], $_POST['genre_name'])) {
    $genre_id = $_POST['genre_id'];
    $genre_name = $_POST['genre_name'];

    $query = "UPDATE genres SET genre_name = ? WHERE genre_id = ?";
    
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'si', $genre_name, $genre_id);
    
    if (mysqli_stmt_execute($stmt)) {
        header("location: ../genre.php");
        exit();
    } else {
        echo "Data Gagal Diupdate!";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo "Missing required data!";
}
?>
