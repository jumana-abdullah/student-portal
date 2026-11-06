<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>عرض المسجلين - بوابة جمانة</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <p>اسم الطالبة: جمانة عبدالله العبيسي</p>
        <p>اسم المقرر: تقنيات الإنترنت</p>
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
        <h2 class="highlight">قائمة الطلاب المسجلين في قاعدة البيانات</h2>
        <table>
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>الجنس</th>
                    <th>المستوى</th>
                    <th>إجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM students");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['level']."</td>";
                    // أزرار الإجراءات الإدارية (تعديل وحذف)
                    echo "<td>
                        <a href='edit.php?id=" . $row['id'] . "' style='color: blue; text-decoration: none; font-weight: bold;'>تعديل</a> | 
                        <a href='delete.php?id=" . $row['id'] . "' style='color: red; text-decoration: none; font-weight: bold;' onclick='return confirm(\"هل أنت متأكد من رغبتك في حذف هذا الطالب؟\")'>حذف</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>