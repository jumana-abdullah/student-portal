<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>صفحة التحقق من البيانات - بوابة جمانة</title>
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
        <h1>🔒 التحقق من صحة المدخلات (Form Validation)</h1>
        <p class="highlight">برجاء ملء الحقول أدناه. سيقوم نظام جافا سكريبت بفحص البيانات فوراً قبل إرسالها.</p>

        <div class="form-container">
            <div id="error-message" class="error-box"></div>

            <form name="myForm" onsubmit="return validateForm(event)">
                
                <label for="username">الاسم الكامل (مطلوب):</label>
                <input type="text" id="username" name="name" placeholder="أدخل اسمك الثلاثي">

                <label for="useremail">البريد الإلكتروني (مطلوب وبصيغة صحيحة):</label>
                <input type="text" id="useremail" name="email" placeholder="example@domain.com">

                <label for="userpassword">كلمة المرور (مطلوب - 6 خانات على الأقل):</label>
                <input type="password" id="userpassword" name="password" placeholder="أدخل كلمة المرور">

                <input type="submit" value="إرسال البيانات وفحصها" class="interactive-btn">
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>