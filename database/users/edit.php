<?php
session_start();
include '../database.php'; // đường dẫn đến file kết nối CSDL

$userId = $_GET['id'] ?? null;
if (!$userId) {
    die('ID không hợp lệ');
}

$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$date = $_POST['date'] ?? '';
$sex = $_POST['sex'] ?? '';
$description = $_POST['description'] ?? '';
$interest = $_POST['interest'] ?? [];
$interestStr = implode(', ', $interest);

// Cập nhật dữ liệu
$sql = "UPDATE users SET firstName=?, lastName=?, email=?, password=?, date=?, sex=?, description=?, interest=? WHERE id=?";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'ssssssssi', $firstName, $lastName, $email, $password, $date, $sex, $description, $interestStr, $userId);
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['user_data'] = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $password,
            'date' => $date,
            'sex' => $sex,
            'description' => $description,
            'interest' => $interest
        ];
        header("Location: /info.php?id=$userId&message=Cập nhật thành công");
        exit;
    } else {
        echo "Lỗi khi cập nhật: " . mysqli_error($conn);
    }
} else {
    echo "Lỗi prepare statement: " . mysqli_error($conn);
}