<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link href="dist/images/logo.svg" rel="shortcut icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A responsive admin dashboard template using Bootstrap 5.">
  <meta name="keywords" content="admin template, dashboard template, responsive admin template, web app">
  <meta name="author" content="LEFT4CODE">
  <title>Seller List - Bootstrap Admin Template</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Optional: Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
  .sidebar {
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    overflow-y: auto;
    background-color: #f8f9fa;
  }
  </style>
</head>

<body>

  <nav class="col-md-3 col-lg-2 d-none d-md-block sidebar">
    <div class="p-3">
      <a href="#" class="d-flex align-items-center mb-3">
        <img src="dist/images/logo.svg" alt="Logo" width="24" height="24" class="me-2">
        <span class="fs-5">Admin</span>
      </a>
      <hr>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#dashboardMenu">Dashboard <i
              class="bi bi-chevron-down ms-auto"></i></a>
          <div class="collapse" id="dashboardMenu">
            <ul class="nav flex-column ms-3">
              <li class="nav-item"><a class="nav-link" href="#">Overview 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Overview 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Overview 3</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Overview 4</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" data-bs-toggle="collapse" data-bs-target="#ecommerceMenu">E-Commerce
            <i class="bi bi-chevron-down ms-auto"></i></a>
          <div class="collapse show" id="ecommerceMenu">
            <ul class="nav flex-column ms-3">
              <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Add Product</a></li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#productsMenu">Products <i
                    class="bi bi-chevron-down ms-auto"></i></a>
                <div class="collapse" id="productsMenu">
                  <ul class="nav flex-column ms-3">
                    <li class="nav-item"><a class="nav-link" href="#">Product List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Product Grid</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#" data-bs-toggle="collapse" data-bs-target="#sellersMenu">Sellers
                  <i class="bi bi-chevron-down ms-auto"></i></a>
                <div class="collapse show" id="sellersMenu">
                  <ul class="nav flex-column ms-3">
                    <li class="nav-item"><a class="nav-link active" href="#">Seller List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Seller Detail</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <!-- Add more menu items as needed -->
      </ul>
    </div>
  </nav>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>