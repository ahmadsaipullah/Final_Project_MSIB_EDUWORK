<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnLogin'])) {
    // Ambil data yang dikirimkan melalui form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query SQL untuk memeriksa apakah data login valid
    $query = "SELECT * FROM admin WHERE nama = '$username' AND password = '$password'";
    
    // Periksa apakah hasil query mengembalikan satu baris (login berhasil)
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        // Login berhasil, redirect ke halaman admin
        header("Location: movies.php"); // Ganti halaman_admin.php dengan halaman yang sesuai
        exit();
    } else {
        // Login gagal, tampilkan pesan error
        echo '<script>alert("Username atau Password salah. Silakan coba lagi.");</script>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/vendor/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/vendor/adminlte/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- datatables -->
    <link rel="stylesheet" href="../assets/vendor/datatables/css/dataTables.bootstrap4.min.css">
    <!-- fancybox -->
    <link rel="stylesheet" href="../assets/vendor/fancybox/jquery.fancybox.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- MyCSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/img_properties/logo.png">
    <title>Login Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url(../images/episodes/ce3.jpg);
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -55%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 mx-5 py-4 px-5 text-dark rounded border border-dark" style="background-color: rgba(180,190,196,.6);">
                <h2 class="text-center">Selamat Datang</h2>
                <h3 class="text-center">Administrator</h3>
                <form method="post">
                    <div class="form-group">
                        <label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
                        <input required class="form-control rounded-pill" type="text" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
                        <input required class="form-control rounded-pill" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <a href="../index.php" class="btn btn-info rounded-pill text-left"><i class="fas fa-fw fa-arrow-left"></i> Back</a>
                        <button class="btn btn-success rounded-pill float-right" type="submit" name="btnLogin"><i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer style="position: absolute; bottom: 0; width: 100%; text-align: center;">
        <div style="background-color: transparent;" class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-lg text-center text-white pt-4 pb-2">
                    <p>&copy; Copyright 2023. By Final Project Eduwork 1</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>