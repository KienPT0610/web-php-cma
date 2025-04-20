<?php
session_start();
include "../database.php"; // đảm bảo đúng đường dẫn đến file database.php

$userId = $_GET["id"] ?? null;
if (empty($userId)) {
    die("ID người dùng không hợp lệ.");
}

if ($userId) {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $userId);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            unset($_SESSION['user_data']); // xóa session nếu cần
            header("Location: /register.php?message=Người dùng đã được xóa thành công.");
            exit();
        } else {
            die("Lỗi khi xóa người dùng: " . mysqli_error($conn));
        }
    } else {
        die("Lỗi prepare statement: " . mysqli_error($conn));
    }
} else {
    die("ID người dùng không hợp lệ.");
}