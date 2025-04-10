<?php
include 'enum.php';
$sellers = include 'data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['perPage'])) {
  $_SESSION['perPage'] = (int)$_POST['perPage'];
}

$perPage = $_SESSION['perPage'] ?? 10;
$totalSellers = count($sellers);
$totalPages = ceil($totalSellers / $perPage); // tổng số trang

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1); // không cho nhỏ hơn 1
$page = min($page, $totalPages); // không cho vượt quá số trang

$start = ($page - 1) * $perPage;
$currentSellers = array_slice($sellers,$start, $perPage);
?>

<div class="p-2">
  <h3>Danh sách khách hàng</h3>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <div class="d-flex gap-2 align-items-center">
      <button class="btn btn-primary">Thêm khách hàng</button>
      <div class="dropdown">
        <button class="btn bg-white border" data-bs-toggle="dropdown"><i class="bi bi-plus"></i></button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#"><i class="bi bi-printer me-2"></i>In</a></li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-filetype-pdf me-2"></i>Xuất PDF</a></li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-excel me-2"></i>Xuất Excel</a></li>
        </ul>
      </div>
    </div>
    <span class="text-muted">Hiện <?php echo htmlspecialchars($perPage) ?> trong
      <?php echo htmlspecialchars($totalSellers)?> khách hàng</span>
    <div class="d-flex gap-2 align-items-center">
      <input id="searchInput" type="text" class="form-control" placeholder="Tìm kiếm khách hàng"
        aria-label="Tìm kiếm khách hàng">
      <select class="form-select w-75" aria-label="Lọc theo">
        <option selected>Trạng thái</option>
        <option value="1">Tất cả</option>
        <option value="2">Hoạt động</option>
        <option value="3">Không hoạt động</option>
      </select>
    </div>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th><input type="checkbox" class="form-check-input"></th>
        <th>KHÁCH HÀNG</th>
        <th class="text-center">KÊNH</th>
        <th class="text-center">GIỚI TÍNH</th>
        <th class="text-center">TRẠNG THÁI</th>
        <th class="text-center">SỐ SẢN PHẨM</th>
        <th class="text-center">HÀNH ĐỘNG</th>
      </tr>
    </thead>
    <tbody id="results">
      <?php
        foreach ($currentSellers as $seller):?>
      <tr>
        <td><input type="checkbox" class="form-check-input"></td>
        <td>
          <div class="seller-info">
            <img src="<?php echo $seller['image']; ?>" alt="Seller Image">
            <div>
              <div class="name"><?php echo htmlspecialchars($seller['name']); ?></div>
              <div class="email"><?php echo htmlspecialchars($seller['email']); ?></div>
            </div>
          </div>
        </td>
        <td class="text-center">
          <a href="#" class="text-primary"><?php echo htmlspecialchars($seller['store']); ?></a>
        </td>
        <td class="text-center"><?php echo htmlspecialchars($seller['gender']); ?></td>
        <td class="text-center">
          <span class="<?php echo $seller['status'] === Active ? 'status-active' : 'status-inactive'; ?>">
            <i class="bi bi-check-circle me-1"></i>
            <?php echo htmlspecialchars($seller['status']); ?>
          </span>
        </td>
        <td class="text-center"><?php echo htmlspecialchars($seller['total_products']); ?> sản phẩm</td>
        <td class="text-center actions">
          <a href="#" class="edit"><i class="bi bi-pencil-square"></i> Sửa</a>
          <a href="#" class="delete"><i class="bi bi-trash"></i> Xóa</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="d-flex justify-content-between align-items-center mt-3">
    <!-- Pagination -->
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item <?= ($page==1) ? 'disabled' : '' ?>">
          <a class="page-link" href="?page=<?=$page-1?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>

        <?php for($i=1; $i<=$totalPages; $i++): ?>
        <li class="page-item <?= ($i===$page) ? 'active' : '' ?> ">
          <a class="page-link" href="?page=<?= $i ?>">
            <?= $i ?>
          </a>
        </li>
        <?php endfor; ?>

        <li class="page-item <?= ($page==$totalPages) ? 'disabled' : '' ?>">
          <a class="page-link" href="?page=<?=$page+1?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    <form method="POST">
      <select class="form-select" name="perPage" onchange="this.form.submit()">
        <option value="10" <?= ($_SESSION['perPage'] ?? 10) == 10 ? 'selected' : '' ?>>10</option>
        <option value="25" <?= ($_SESSION['perPage'] ?? 10) == 25 ? 'selected' : '' ?>>25</option>
        <option value="35" <?= ($_SESSION['perPage'] ?? 10) == 35 ? 'selected' : '' ?>>35</option>
        <option value="50" <?= ($_SESSION['perPage'] ?? 10) == 50 ? 'selected' : '' ?>>50</option>
      </select>
    </form>
  </div>
</div>