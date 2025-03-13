<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
</head>
<body>
    <h1>مرحبًا بك في لوحة التحكم!</h1>
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>