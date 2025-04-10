<?php
require 'sellers.php';


$keyword = $_GET['keyword'] ?? '';
if(empty($keyword)) {
    header('Location: clients.php');
    return;
}
$filtered = array_filter($sellers, function ($seller) use ($keyword) {
    return stripos($seller['name'], $keyword) !== false;
});

if (empty($filtered)) {
    echo "<p>Không tìm thấy seller nào.</p>";
    return;
}

foreach ($filtered as $seller):
  ?>
<tr>
  <td><input type="checkbox" class="form-check-input"></td>
  <td>
    <div class="seller-info">
      <img src="<?= $seller['image'] ?>" alt="Seller Image">
      <div>
        <div class="name"><?= htmlspecialchars($seller['name']) ?></div>
        <div class="email"><?= htmlspecialchars($seller['email']) ?></div>
      </div>
    </div>
  </td>
  <td class="text-center"><a href="#" class="text-primary"><?= $seller['store'] ?></a></td>
  <td class="text-center"><?= $seller['gender'] ?></td>
  <td class="text-center">
    <span class="<?= $seller['status'] === Active ? 'status-active' : 'status-inactive'; ?>">
      <i class="bi bi-check-circle me-1"></i>
      <?= $seller['status'] ?>
    </span>
  </td>
  <td class="text-center"><?= $seller['total_products'] ?> sản phẩm</td>
  <td class="text-center actions">
    <a href="#" class="edit"><i class="bi bi-pencil-square"></i> Sửa</a>
    <a href="#" class="delete"><i class="bi bi-trash"></i> Xóa</a>
  </td>
</tr>
<?php endforeach; ?>