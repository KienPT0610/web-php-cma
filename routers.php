<?php
$path = $_SERVER['REQUEST_URI'];
$path = explode('?', $path)[0]; // Lấy phần trước dấu ?: seller
// echo $path;
if($path=="/sellers") {
  include 'pages/sellers/clients.php'; 
}
if($path=="/seller-add") {
  include 'pages/sellers/add.php'; 
}
if($path=="/seller-edit") {
  include 'pages/sellers/edit.php'; 
}
if ($path== '/admin-profile') {
  include 'pages/admin/profile.php'; 
}
?>