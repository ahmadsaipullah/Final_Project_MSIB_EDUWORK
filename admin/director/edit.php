<!DOCTYPE html>
<html>

<head>
    <title>Edit Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include '../../koneksi.php';
    $director_id = $_GET['director_id'];
    $directors = mysqli_query($conn, "SELECT * from director WHERE director_id = '$director_id'");
    $director = mysqli_fetch_assoc($directors); 
    
    $nama = $director['nama'];
    $email = $director['email'];
   
    ?>
    <form method="POST" action="proses_edit.php">
    <input type="hidden" name="director_id" value="<?php echo $director_id; ?>">
    <div class="form-group">
        <label for="nama">nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
    </div>
    
    <button type="submit" class="btn btn-primary" name="update">Simpan Perubahan</button>
</form>
</body>

</html>