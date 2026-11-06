<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل جديد - بوابة جمانة</title>
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
        <h2 class="highlight">نموذج تسجيل طالب جديد</h2>
        <form action="register.php" method="POST">
            <label>الاسم الكامل:</label>
            <input type="text" name="name" required placeholder="أدخلي اسمك الثلاثي">
            
            <label>البريد الإلكتروني:</label>
            <input type="email" name="email" required placeholder="example@tu.edu.sa">
            
            <label>كلمة المرور:</label>
            <input type="password" name="password" required>

            <label>الجنس:</label>
            <select name="gender">
                <option value="أنثى">أنثى</option>
                <option value="ذكر">ذكر</option>
            </select>

            <label>المستوى الدراسي:</label>
            <select name="level">
                <option value="المستوى السابع">المستوى السابع</option>
                <option value="المستوى الثامن">المستوى الثامن</option>
            </select>

            <label>ملاحظات إضافية:</label>
            <textarea name="comments" style="width:100%; height:100px; border-radius:4px; border:1px solid #ccc;"></textarea>
            
            <input type="submit" value="إرسال البيانات وحفظها">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>