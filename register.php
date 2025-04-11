<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Form Register Info</title>
  <link rel="stylesheet" href="app.scss">
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
  <div class="p-5">
    <form class="form-register" novalidate>
      <h2>Đăng ký thông tin</h2>
      <!-- Name -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName" class="form-label">Họ</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nhập họ của bạn"
            required>
          <div class="invalid-feedback">
            Họ không hợp lệ!
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName" class="form-label">Tên</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nhập tên của bạn" required>
          <div class="invalid-feedback">
            Tên không hợp lệ!
          </div>
        </div>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu của bạn"
          required>
        <div class="invalid-feedback">
          Mật khẩu không hợp lệ!
        </div>
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn" required>
        <div class="invalid-feedback">
          Email không hợp lệ!
        </div>
      </div>

      <!-- Date and Sex -->
      <div class="mb-3">
        <div class="row">
          <div class="col-md-3 d-flex gap-3 mb-3">
            <label for="date" class="form-label">Ngày sinh</label>
            <input type="date" id="date" name="date" required>
          </div>
          <div class="col d-flex gap-3">
            <label for="sex">Giới tính:</label>
            <div class="d-flex gap-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="male" value="male" required />
                <label class="form-check-label" for="male">Nam</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="female" value="female" />
                <label class="form-check-label" for="female">Nữ</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="option3" value="option3" />
                <label class="form-check-label" for="option3">Khác</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Interest -->
      <div class="mb-3 d-flex gap-3">
        <label for="interest" class="form-label">Sở thích:</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="interest" id="readBook" value="readBook" />
          <label class="form-check-label" for="">Đọc sách</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="interest" id="music" value="music" />
          <label class="form-check-label" for="">Nghe nhạc</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="interest" id="watchTV" value="watchTV" />
          <label class="form-check-label" for="">Xem phim</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="interest" id="football" value="football" />
          <label class="form-check-label" for="">Bóng đá</label>
        </div>
      </div>

      <!-- Description -->
      <div class="mb-3">
        <label for="description" class="form-label">Mô tả bản thân</label>
        <textarea class="form-control w-25" name="description" id="description" rows="5"></textarea>
      </div>

      <!-- Button -->
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">
          <a href="index.php" class="text-decoration-none text-white">Đăng ký</a>
        </button>
        <button type="reset" class="btn btn-primary">Làm lại</button>
      </div>
    </form>
  </div>
  <?php include 'components/toogleTheme.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>