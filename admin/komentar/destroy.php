<?php
include '../../koneksi.php';

if (isset($_POST['hapus'])) {
  $review_id = $_POST['review_id'];

  // Delete data from the database
  $delete_query = mysqli_query($conn, "DELETE FROM reviews WHERE review_id = '$review_id'");

  if ($delete_query) {
    // Redirect to the manage.php page after successful deletion
    header("Location: ../coment.php");
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
