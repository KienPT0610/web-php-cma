<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="app.scss" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <script>
  const darkMode = localStorage.getItem('darkMode') === 'true';
  if (darkMode) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }
  </script>
  <main>
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="bg-primary w-50 h-100 d-flex flex-column justify-content-center align-items-center custom-radius">
        <img src="images/image-login.png" alt="Placeholder Image" />
        <div class="text-center text-white p-4">
          <h3>Chào mừng bạn đến với trang đăng nhập</h3>
          <p class="">Vui lòng nhập thông tin của bạn để tiếp tục</p>
        </div>
      </div>
      <div class="w-50 h-100 p-4">
        <div class="mt-5 p-8">
          <h2>Đăng nhập</h2>
          <form method="POST" action="authencation.php" class="form-login" novalidate>
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn"
                required />
              <div class="invalid-feedback">
                Email không hợp lệ!
              </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Mật khẩu</label>
              <input type="password" class="form-control" id="password" name="password"
                placeholder="Nhập mật khẩu của bạn" required />
              <div class="invalid-feedback">
                Mật khẩu không hợp lệ!
              </div>
            </div>

            <!-- Remember me -->
            <div class="mb-3 d-flex">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberMe" />
                <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
              </div>
              <div class="ms-auto">
                <a href="#" class="text-decoration-none">Quên mật khẩu?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="submit" value="Login" class="btn btn-primary">Đăng nhập</button>
            <button class="btn btn-outline-secondary">
              <a href="register.php" class="text-decoration-none">Đăng ký</a>
            </button>
        </div>

      </div>
    </div>
    <?php include 'components/toogleTheme.php'; ?>
  </main>
</body>

</html>