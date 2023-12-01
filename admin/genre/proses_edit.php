<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['genre_id'], $_POST['genre_name'])) {
        // Escape input untuk mencegah serangan SQL Injection
        $genre_id = mysqli_real_escape_string($conn, $_POST["genre_id"]);
        $genre_name = mysqli_real_escape_string($conn, $_POST["genre_name"]);

        // Perbaikan pada query UPDATE menggunakan prepared statement untuk keamanan
        $sql = "UPDATE genres SET genre_name=? WHERE genre_id=?";

        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("si", $genre_name, $genre_id);
            if ($stmt->execute()) {
                echo "Data genre berhasil diubah.";
                $stmt->close();
                header("Location: ../genre.php"); // Pindah ke halaman utama setelah berhasil mengubah data
                exit();
            } else {
                echo "Error dalam mengeksekusi query: " . $stmt->error;
            }
        } else {
            echo "Error dalam persiapan statement: " . $conn->error;
        }
    } else {
        echo "Error: Semua field harus diisi.";
    }
} else {
    echo "Error: Metode tidak diizinkan.";
}
?>
