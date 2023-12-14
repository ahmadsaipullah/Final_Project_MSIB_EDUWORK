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
  <title>Update Password</title>
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
  <?php

  include '../koneksi.php';


  if (isset($_GET['email']) && isset($_GET['reset_token'])) {

    date_default_timezone_set('Asia/kolkata');
    $date = date("Y-m-d");

    $email = $_GET['email'];
    $reset_token = $_GET['reset_token'];

    $sql = "SELECT * FROM `admin` WHERE email = '$email' AND resettoken = '$reset_token' AND resettokenexp = '$date'";
    $result = $conn->query($sql);

    if ($result) {

      if ($result->num_rows == 1) {
        echo '
             <div class="container d-flex justify-content-center mt-5 pt-5">
                            <div class="card mt-5" style="width:500px">
                                <div class="card-header">
                                    <h1 class="text-center">Creat New Password</h1>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="mt-2">
                                            <label for="Password">Password : </label>
                                            <input type="password" name="Password" class="form-control" placeholder="Creat New Password">
                                            <input type="hidden" name="email" class="form-control" value=' . $email . '>
                                        </div>
                                        <div class="mt-4 text-end">
                                            <input type="submit" name="update" value="update" class="btn btn-primary">
                                            <a href="forgotPassword.php" class="btn btn-danger">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>';
      } else {
        echo "
                        <script>
                            alert('invelid or Expired link');
                            window.location.href='forgotPassword.php'
                        </script>";
      }
    }
  } else {
    echo "
                <script>
                    alert('server down!!');
                    window.location.href='forgotPassword.php'
                </script>";
  }

  if (isset($_POST['update'])) {
    $pass = md5($_POST['Password']);
    echo $pass;
    $email = $_POST['email'];
    echo $email;

    $update = "UPDATE `admin` SET password='$pass',resettoken='NULL',resettokenexp=NULL WHERE email = '$email'";

    if ($conn->query($update) === TRUE) {
      echo "
                    <script>
                        alert('New Password Created Successfully');
                        window.location.href='login.php'                
                        </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      echo "
                    <script>
                    alert('Password not updated');
                    window.location.href='forgotPassword.php'                     
                    </script>";
    }
  }
  ?>
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