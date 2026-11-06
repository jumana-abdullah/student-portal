<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    
    $update_sql = "UPDATE students SET name='$name', email='$email', level='$level' WHERE id=$id";
    if (mysqli_query($conn, $update_sql)) {
        echo "<script>alert('تم التعديل بنجاح!'); window.location.href='view.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تعديل البيانات - بوابة جمانة</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <p>اسم الطالبة: جمانة عبدالله العبيسي</p>
        <p>اسم المقرر: تقنيات الإنترنت (Internet Technologies)</p>
    </header>

    <nav id="main-nav">
        <img src="logo.jpg" alt="Logo">
        <a href="index.php">الصفحة الرئيسية</a>
        <a href="about.php">عن الموقع</a>
        <a href="services.php">الخدمات</a>
        <a href="courses.php">المواد الدراسية</a>
        <a href="contact.php">تسجيل جديد</a>
        <a href="view.php">عرض المسجلين</a>
        <a href="interactive.php">الصفحة التفاعلية</a>
        <a href="validation.php">صفحة التحقق</a>
    </nav>

    <div class="content-box">
        <h2>تعديل بيانات الطالب</h2>
        <form method="POST">
            <label>الاسم:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
            <label>الإيميل:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
            <label>المستوى:</label>
            <input type="text" name="level" value="<?php echo $row['level']; ?>">
            <br><br>
            <input type="submit" value="تحديث البيانات">
            <a href="view.php" style="margin-right: 10px; text-decoration: none; color: #a68946; font-weight: bold;">إلغاء</a>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>