<?php
session_start();
include("config.php");
$gettitle="yazed";
include("../func/function.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NAME = htmlspecialchars($_POST['name']);
    $EMAIL = htmlspecialchars($_POST['email']);
    $PASSWORD = password_hash($_POST['password'], PASSWORD_DEFAULT); // تشفير كلمة المرور
    if(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL)){
        die( "البريد غير صالح");
    }
    try {
        // إعداد الاستعلام
        $stmt = $con->prepare("INSERT INTO login (name, email, password) VALUES (:name, :email, :password)");

        // ربط القيم بالاستعلام
        $stmt->bindParam(':name', $NAME, PDO::PARAM_STR);
        $stmt->bindParam(':email', $EMAIL, PDO::PARAM_STR);
        $stmt->bindParam(':password', $PASSWORD, PDO::PARAM_STR);

        // تنفيذ الاستعلام
        if ($stmt->execute()) {
        header("location: ../layout/login.php");
        } else {
            echo "Error: لم يتم تنفيذ الاستعلام.";
        }
    } catch (PDOException $e) {
        echo "خطأ في التسجيل: " . $e->getMessage();
    }
}
?>