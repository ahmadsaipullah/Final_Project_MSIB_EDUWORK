<?php
session_start();
$_SESSION["admin"];
// Jika Belum Login Redirect Ke Index
if (!isset($_SESSION["admin"])) header("Location: ../admin/login.php");
