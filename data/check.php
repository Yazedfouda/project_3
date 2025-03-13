<?php
session_start();

// الاتصال بقاعدة البيانات
include("config.php");
// التأكد من أن الطلب هو POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EMAIL = trim($_POST["email"]);
    $PASSWORD = trim($_POST["password"]);

    try {
        // تجهيز الاستعلام
        $stmt = $con->prepare("SELECT id, password FROM login WHERE email = :email");
        $stmt->execute([':email' => $EMAIL ]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // التحقق من وجود المستخدم
        if ($user && password_verify($PASSWORD, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["Email"] = $_EMAIL;
            header("Location: ../layout/book.php");
            exit;
        } 
        else {
            echo "<script>alert('❌ البريد الإلكتروني أو كلمة المرور غير صحيحة!'); window.location.href='../layout/login.php';</script>";
        }
    } catch (PDOException $e) {
        echo "خطأ أثناء تسجيل الدخول: " . $e->getMessage();
    }
}
?>