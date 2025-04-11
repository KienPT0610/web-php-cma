<?php
session_start();
if(!isset($_SESSION['authencation']) || $_SESSION['authencation'] !== true) {
  header('Location: login.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Client Management</title>
  <link href="app.scss" rel="stylesheet" type="text/css" />
  <link href="styles/avatar.scss" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <!-- get mode -->
  <script>
  const darkMode = localStorage.getItem('darkMode') === 'true';
  if (darkMode) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }
  </script>
  <div class="d-flex">
    <?php include 'sidebar.php'; ?>
    <div class="content-container">
      <div class="box-content">
        <?php include 'header.php'; ?>
        <?php include 'routers.php' ?>
      </div>
    </div>
    <?php include 'components/toogleTheme.php'; ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>