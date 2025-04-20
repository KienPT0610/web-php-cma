<?php
session_start();

$userId = $_GET['id'] ?? null;
if (empty($userId)) {
  header('Location: index.php');
  exit;
}
$data = $_SESSION['user_data'];
$firstName = htmlspecialchars($data['firstName']);
$lastName = htmlspecialchars($data['lastName']);
$email = htmlspecialchars($data['email']);
$password = htmlspecialchars($data['password']);
$date = htmlspecialchars($data['date']);
$sex = htmlspecialchars($data['sex']);
$description = htmlspecialchars($data['description']);
$interestArray = $data['interest'] ?? [];
$interest = is_array($interestArray) ? implode(', ', $interestArray) : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Thông tin đăng ký</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-5">
  <?php
    if(isset($_GET['message'])) {
      echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($_GET['message']) . '</div>';
    }
  ?>
  <h2>Thông tin người dùng</h2>
  <ul class="list-group w-50">
    <li class="list-group-item"><strong>ID:</strong> <?= $userId ?></li>
    <li class="list-group-item"><strong>Họ tên:</strong> <?= $firstName ?> <?= $lastName ?></li>
    <li class="list-group-item"><strong>Email:</strong> <?= $email ?></li>
    <li class="list-group-item"><strong>Mật khẩu:</strong> <?= $password ?></li>
    <li class="list-group-item"><strong>Ngày sinh:</strong> <?= $date ?></li>
    <li class="list-group-item"><strong>Giới tính:</strong> <?= $sex ?></li>
    <li class="list-group-item"><strong>Sở thích:</strong> <?= $interest ?></li>
    <li class="list-group-item"><strong>Mô tả:</strong> <?= $description ?></li>
  </ul>

  <div class="d-flex gap-3 mt-3 mb-3">
    <button id="btnEdit" class="btn btn-warning">Sửa</button>
    <a href="/database/users/delete.php?id=<?= $userId ?>" class=" btn btn-danger">Xóa</a>
    <a href="index.php" class="btn btn-primary">Thoát</a>
  </div>
  <form class="form-edit d-none" method="POST" action="/database/users/edit.php?id=<?= $userId ?>" novalidate>
    <h2>Sửa thông tin</h2>
    <!-- Name -->
    <div class="row">
      <div class="col-12 col-md-6 mb-3">
        <label for="firstName" class="form-label">Họ</label>
        <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $firstName ?>"
          placeholder="Nhập họ của bạn" required>
        <div class="invalid-feedback">
          Họ không hợp lệ!
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3">
        <label for="lastName" class="form-label">Tên</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $lastName ?>" placeholder=" Nhập
          tên của bạn" required>
        <div class="invalid-feedback">
          Tên không hợp lệ!
        </div>
      </div>
    </div>

    <!-- Password -->
    <div class="mb-3">
      <label for="password" class="form-label">Mật khẩu</label>
      <input type="password" class="form-control" id="password" name="password" value="<?= $password ?>" placeholder="
        Nhập mật khẩu của bạn" required>
      <div class="invalid-feedback">
        Mật khẩu không hợp lệ!
      </div>
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" placeholder=" Nhập email của
        bạn" required>
      <div class="invalid-feedback">
        Email không hợp lệ!
      </div>
    </div>

    <!-- Date and Sex -->
    <div class="mb-3">
      <div class="row">
        <div class="col-md-3 d-flex gap-3 mb-3">
          <label for="date" class="form-label">Ngày sinh</label>
          <input type="date" id="date" value="<?= $date ?>" name="date" required>
        </div>
        <div class="col d-flex gap-3">
          <label for="sex">Giới tính:</label>
          <div class="d-flex gap-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" id="male" value="male"
                <?= $sex === 'male' ? 'checked' : '' ?> required />
              <label class="form-check-label" for="male">Nam</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" id="female" value="female"
                <?= $sex === 'female' ? 'checked' : '' ?> />
              <label class="form-check-label" for="female">Nữ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" id="option3" value="option3"
                <?= $sex === 'option3' ? 'checked' : '' ?> />
              <label class="form-check-label" for="option3">Khác</label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Interest -->
    <div class="mb-3">
      <label for="interest" class="form-label">Sở thích:</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="interest[]" id="readBook" value="readBook"
          <?= in_array('readBook', $interestArray) ? 'checked' : '' ?> />
        <label class="form-check-label" for="">Đọc sách</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="interest[]" id="music"
          <?= in_array('music', $interestArray) ? 'checked' : '' ?> value="music" />
        <label class="form-check-label" for="">Nghe nhạc</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="interest[]" id="watchTV"
          <?= in_array('watchTV', $interestArray) ? 'checked' : '' ?> value="watchTV" />
        <label class="form-check-label" for="">Xem phim</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="interest[]" id="football"
          <?= in_array('football', $interestArray) ? 'checked' : '' ?> value="football" />
        <label class="form-check-label" for="">Bóng đá</label>
      </div>
    </div>

    <!-- Description -->
    <div class="mb-3">
      <label for="description" class="form-label">Mô tả bản thân</label>
      <textarea class="form-control w-25" name="description" id="description" rows="5"><?= $description ?></textarea>
    </div>

    <!-- Button -->
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">
        <!-- <a href="index.php" class="text-decoration-none text-white">Đăng ký</a> -->Lưu
      </button>
      <button type="reset" class="btn btn-secondary">Khôi phục</button>
    </div>
  </form>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const btnEdit = document.getElementById('btnEdit');
    const formEdit = document.querySelector('.form-edit');

    btnEdit.addEventListener('click', function() {
      formEdit.classList.toggle('d-none');
      btnEdit.textContent = formEdit.classList.contains('d-none') ? 'Sửa' : 'Đóng';
    });
  });
  </script>
</body>

</html>