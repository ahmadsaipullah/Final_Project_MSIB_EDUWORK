<!DOCTYPE html>
<html>

<head>
    <title>Edit Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include '../../koneksi.php';
    $movie_id = $_GET['movie_id'];
    $movies = mysqli_query($conn, "SELECT * from movies WHERE movie_id = '$movie_id'");
    $movie = mysqli_fetch_assoc($movies); 
    
    $judul = $movie['judul'];
    $deskripsi = $movie['deskripsi'];
    $cover_image = $movie['cover_image'];
    $actor = $movie['actor'];
    $durasi = $movie['durasi'];
    ?>
    <form method="POST" action="proses_edit.php">
    <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi; ?>">
    </div>
    <div class="form-group">
        <label for="cover_image">Cover Image:</label>
        <input type="file" class="form-control" id="cover_image" name="cover_image" value="<?php echo $cover_image; ?>">
    </div>
    <div class="form-group">
        <label for="actor">Actor:</label>
        <input type="text" class="form-control" id="actor" name="actor" value="<?php echo $actor; ?>">
    </div>
    <div class="form-group">
        <label for="durasi">Durasi:</label>
        <input type="text" class="form-control" id="durasi" name="durasi" value="<?php echo $durasi; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="update">Simpan Pserubahan</button>
</form>
</body>

</html>