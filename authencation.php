<?php
session_start();
if(isset($_POST["email"]) &&  isset($_POST["password"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $_SESSION['authencation'] = true;
  header('Location: index.php');
  exit;
}
?>