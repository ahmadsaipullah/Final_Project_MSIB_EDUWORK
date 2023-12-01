<!DOCTYPE html>
<html>

<head>
    <title>Edit Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include '../../koneksi.php';
    $genre_id = $_GET['genre_id'];
    $genres = mysqli_query($conn, "SELECT * from genres WHERE genre_id = '$genre_id'");
    $genre = mysqli_fetch_assoc($genres); 
    
    $genre_name = $genre['genre_name'];
    ?>
    <form method="POST" action="proses_edit.php">
    <input type="hidden" name="genre_id" value="<?php echo $genre_id; ?>">
    <div class="form-group">
        <label for="genre">genre:</label>
        <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $genre; ?>">
    </div>
   
    <button type="submit" class="btn btn-primary" name="update">Simpan Perubahan</button>
</form>
</body>

</html>