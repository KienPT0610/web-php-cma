<div class="container">
  <h3>Thêm khách hàng</h3>
  <form class="form-register" novalidate>
    <!-- Avatar upload -->
    <div class="mb-3">
      <label for="avatar" class="form-label" hidden>Avatar</label>
      <div class="avatar-preview mb-2">
        <img src="/assets/images/avatar.png" alt="Avatar Preview" id="avatarPreview" class="rounded-circle" width="100"
          height="100">
      </div>
      <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*" required>
      <div class="invalid-feedback">
        Vui lòng chọn ảnh đại diện!
      </div>
    </div>
    <!-- Name -->
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName" class="form-label">Họ</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nhập họ" required>
        <div class="invalid-feedback">
          Họ không hợp lệ!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName" class="form-label">Tên</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nhập tên" required>
        <div class="invalid-feedback">
          Tên không hợp lệ!
        </div>
      </div>
    </div>

    <!-- Password -->
    <div class="mb-3">
      <label for="password" class="form-label">Mật khẩu</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
      <div class="invalid-feedback">
        Mật khẩu không hợp lệ!
      </div>
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
      <div class="invalid-feedback">
        Email không hợp lệ!
      </div>
    </div>

    <!-- Phone -->
    <div class="mb-3">
      <label for="phoneNumber" class="form-label">Số điện thoại</label>
      <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Nhập Số điện thoại"
        required>
      <div class="invalid-feedback">
        Email không hợp lệ!
      </div>
    </div>

    <div class="mb-3">
      <?php include 'components/CountryDropdown.php' ?>
    </div>

    <!-- Address -->
    <div class="mb-3">
      <label for="address" class="form-label">Địa chỉ chi tiết</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ chi tiết" required>
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
    <div class="mb-3 d-flex gap-3 align-items-center justify-content-center">
      <label for="interest" class="form-label">Kênh:</label>
      <select class="form-select" aria-label="Lọc theo">
        <option selected>Kênh</option>
        <option value="1">Shopee</option>
        <option value="2">Tiki</option>
        <option value="3">Lazada</option>
      </select>
    </div>

    <!-- Description -->
    <div class="mb-3">
      <label for="description" class="form-label">Mô tả</label>
      <textarea class="form-control w-25" name="description" id="description" rows="5"></textarea>
    </div>

    <!-- Button -->
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">
        <a href="#" class="text-decoration-none text-white">Đăng ký</a>
      </button>
      <button type="reset" class="btn btn-primary">Làm lại</button>
    </div>
  </form>
</div>