<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $movie_id = $_POST['movie_id'];
  $reviewer_name = $_POST['reviewer_name'];
  $review_date = $_POST['review_date'];
  $review_text = $_POST['review_text'];
  $rating = $_POST['rating'];

  $update_query = "UPDATE reviews SET 
                    movie_id = '$movie_id',
                    reviewer_name = '$reviewer_name',
                    review_date = '$review_date',
                    review_text = '$review_text',
                    rating = '$rating'
                    WHERE movie_id = '$movie_id'";


  if (mysqli_query($conn, $update_query)) {
    header("location: ../coment.php");
  } else {
    echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
