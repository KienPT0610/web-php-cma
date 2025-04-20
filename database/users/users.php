<?php
include "database/database.php";

if($_SERVER['REQUEST_METHOD']==='POST') {
  $firstName=$_POST['firstName'] ?? '';
  $lastName = $_POST['lastName'] ?? '';
  $password = $_POST['password'] ?? '';
  $email = $_POST['email'] ?? '';
  $date = $_POST['date'] ?? '';
  $sex = $_POST['sex'] ?? '';
  $description = $_POST['description'] ?? '';

  // Gộp sở thích
  $interestArray = $_POST['interest'] ?? [];
  $interest = is_array($interestArray) ? implode(', ', $interestArray) : '';

  $sql = "INSERT INTO users (firstName, lastName, password, email, date, sex, interest, description)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = mysqli_prepare($conn, $sql);
  if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $password, $email, $date, $sex, $interest, $description);
      $result = mysqli_stmt_execute($stmt);
      if ($result) {
        $lastInsertId = mysqli_insert_id($conn); // Lấy ID vừa insert
        // Lưu thông tin vào session
        session_start();
        $_SESSION["user_data"] = $_POST;
        header("Location: info.php?id=$lastInsertId");
        exit(); // Đừng quên dừng script tại đây
          // echo "<div class='alert alert-success'>Đăng ký thành công!</div>";
      } else {
          echo "<div class='alert alert-danger'>Lỗi khi đăng ký: " . mysqli_error($conn) . "</div>";
      }
  } else {
      echo "<div class='alert alert-danger'>Lỗi prepare statement: " . mysqli_error($conn) . "</div>";
  }
}



?>