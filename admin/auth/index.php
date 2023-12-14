<?php
session_start();
$_SESSION["admin"];
if (!isset($_SESSION["admin"])) header("Location: ../admin/login.php");
