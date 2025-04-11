<?php
$current_path = $_SERVER['REQUEST_URI'];
$path = str_replace('/','', $current_path); 
// echo $path;
?>

<nav class="header navbar navbar-expand-lg mb-4">
  <div class="container-fluid">
    <nav aria-label="breadcrumb" class="d-none d-sm-block">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Ứng dụng</a></li>
        <li class="breadcrumb-item active" aria-current="page">
          <?php
          if ($path == 'index.php') {
            echo 'Bảng điều khiển';
          } elseif ($path == 'products') {
            echo 'Sản phẩm';
          } elseif ($path == 'sellers') {
            echo 'Khách hàng';
          } else {
            echo 'Trang không xác định';
            // echo $path;
          }
          ?>
        </li>
      </ol>
    </nav>
    <div class="ms-auto d-flex align-items-center">
      <!-- Search -->
      <form class="d-flex gap-1 me-3">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <!-- Notifications -->
      <div class="dropdown me-3">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li class="dropdown-header">Notifications</li>
          <li><a class="dropdown-item" href="#">John Travolta - 01:10 PM</a></li>
          <li><a class="dropdown-item" href="#">Kate Winslet - 05:09 AM</a></li>
        </ul>
      </div>
      <!-- Account -->
      <div class="dropdown">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
          <img src="images/logo.png" alt="Profile" class="rounded-circle" width="30" height="30">
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li class="dropdown-header"> <strong class="text-primary">John Belus</strong> <br><small>Frontend
              Engineer</small></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="/admin-profile"><i class="bi bi-person me-2"></i> Trang cá
              nhân</a></li>
          <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>
              Đăng xuất</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>