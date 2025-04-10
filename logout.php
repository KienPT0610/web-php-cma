<?php
session_start();

// Xoá toàn bộ biến session
session_unset();

// Huỷ toàn bộ session
session_destroy();

// Quay về trang login 
header("Location: login.php");
exit;