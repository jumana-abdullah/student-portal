<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $level = $_POST['level'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO students (name, email, password, gender, level, comments)
            VALUES ('$name', '$email', '$password', '$gender', '$level', '$comments')";

    if (mysqli_query($conn, $sql)) {
        // هذا السطر هو المسؤول عن نقلك لصفحة الجدول
        echo "<script>alert('تم التسجيل بنجاح يا جمانة!'); window.location.href='view.php';</script>";
    } else {
        echo "خطأ في التخزين: " . mysqli_error($conn);
    }
}
?>