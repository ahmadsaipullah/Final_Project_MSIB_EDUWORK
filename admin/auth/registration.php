<?php
include '../../koneksi.php';
include '../../vendor/autoload.php';
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendmail($email, $reset_token)
{

  $mail = new PHPMailer(true);

  try {

    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io'; // SMTP server
    $mail->SMTPAuth   = true;                  // Enable SMTP authentication
    $mail->Username   = '91a9d484239dc7';       // SMTP username
    $mail->Password   = '0b2279c78b57ac';       // SMTP password
    $mail->SMTPSecure = 'tls';                 // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 2525;                   // TCP port to connect to


    $mail->setFrom('ahmadsaipullah16@gmail.com');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Password Reset link form Kelompok 1 Eduwork MSIB';
    $mail->Body    = "kami mendapat permintaan dari Anda untuk mengatur ulang Kata Sandi! <br>Klik tautan di bawah: <br>
        <a href='http://localhost/final_project/admin/updatePassword.php?email=$email&reset_token=$reset_token'>reset password</a>";

    $mail->send();
    return true;
  } catch (Exception $e) {
    return false;
  }
}


if (isset($_POST['send-link'])) {

  $email = $_POST['email'];

  $sql = "SELECT * FROM `admin` WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result) {

    if ($row = $result->fetch_assoc()) {

      $reset_token = bin2hex(random_bytes(16));
      date_default_timezone_set('Asia/kolkata');
      $date = date("Y-m-d");

      $sql = "UPDATE `admin` SET resettoken ='$reset_token', resettokenexp = '$date' WHERE email = '$email'";

      if (($conn->query($sql) === TRUE) && sendmail($email, $reset_token) === TRUE) {
        echo "
                      <script>
                          alert('Password reset link send to mail.');
                          window.location.href='../login.php'    
                      </script>";
      } else {
        echo "
                      <script>
                          alert('Something got Wrong');
                          window.location.href='../forgotPassword.php'
                      </script>";
      }
    } else {
      echo "
              <script>
                  alert('Email Address Not Found');
                  window.location.href='../forgotPassword.php'
              </script>";
    }
  } else {
    echo "
          <script>
              alert('Server Down');
              window.location.href='../forgotPassword.php'
          </script>";
  }
}
