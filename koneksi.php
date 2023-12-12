<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "dbfilm2";

$conn = new mysqli($hostName, $userName, $password, $dbName);

function tambahKomentar($data)
{
    global $conn; // Change this line
    $movie_id = $data['movie_id'];
    $reviewer_name = htmlspecialchars(addslashes($data['reviewer_name']));
    $review_date = date("Y-m-d");
    $review_text = htmlspecialchars(addslashes($data['review_text']));
    
    // Check if the key 'rating' exists before accessing it
    $rating = isset($data['rating']) ? htmlspecialchars($data['rating']) : '';
    
    mysqli_query($conn, "INSERT INTO reviews VALUES ('', '$movie_id', '$reviewer_name', '$review_date', '$review_text', '$rating')");
    return mysqli_affected_rows($conn);
}
