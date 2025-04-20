<?php 
$sellers = include 'data.php'; // Lấy dữ liệu từ file data.php
?>


<main class="container">
  <!-- Tiêu đề -->
  <div class="mb-4">
    <h2 class="fw-bold">Dashboard Quản lý Khách hàng</h2>
    <p class="text-muted">Tổng quan và danh sách khách hàng</p>
  </div>

  <!-- Thống kê nhanh -->
  <div class="row mb-4">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Tổng số khách hàng</h5>
          <h3 class="text-primary"> <?=  count($sellers) ?> </h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Khách hàng mới (tháng này)</h5>
          <h3 class="text-success">15</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Khách hàng VIP</h5>
          <h3 class="text-warning">6</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Tìm kiếm -->
  <div class="row mb-3">
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="Tìm kiếm khách hàng...">
    </div>
    <div class="col">
      <a class="btn btn-primary" href="seller-add">Thêm khách hàng</a>
    </div>
  </div>

  <!-- Bảng danh sách khách hàng -->
  <div class="card shadow-sm">
    <div class="card-body">
      <h5 class="card-title mb-3">Danh sách khách hàng</h5>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Tên</th>
              <th>Email</th>
              <th>Điện thoại</th>
              <th>Loại</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Nguyễn Văn A</td>
              <td>vana@gmail.com</td>
              <td>0901234567</td>
              <td><span class="badge bg-success">Thường</span></td>
              <td>
                <button class="btn btn-sm btn-primary">Sửa</button>
                <button class="btn btn-sm btn-danger">Xóa</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Trần Thị B</td>
              <td>thib@gmail.com</td>
              <td>0912345678</td>
              <td><span class="badge bg-warning text-dark">VIP</span></td>
              <td>
                <button class="btn btn-sm btn-primary">Sửa</button>
                <button class="btn btn-sm btn-danger">Xóa</button>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="card-footer">
          <a href="sellers" class="btn btn-primary">Xem thêm</a>
        </div>
      </div>
    </div>
  </div>
</main>