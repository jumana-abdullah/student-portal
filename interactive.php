<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>الصفحة التفاعلية - بوابة جمانة</title>
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

    <div class="content-box" style="text-align: center;">
        <h1>🎮 تعزيز تفاعل المستخدم باستخدام JavaScript</h1>
        <p class="highlight">هذه الصفحة تم إنشاؤها لتطبيق مهارات التحكم في عناصر واجهة المستخدم (DOM Manipulation) والأحداث الديناميكية.</p>
        
        <hr>

        <h3>⏱️ الميزة الديناميكية الأولى: الوقت والتاريخ</h3>
        <p id="datetime-display">جاري تحميل الوقت الحالي...</p>

        <hr>

        <h3>🎨 تلاعب بعناصر الـ DOM والأحداث (onclick)</h3>
        <p id="demo">هذا النص الأصلي، قم بالضغط على الزر بالأسفل لتغييره ديناميكياً.</p>
        <button class="interactive-btn" onclick="changeTextAndStyle()">تغيير النص والتصميم</button>

        <hr>

        <h3>✨ حدث الفأرة التفاعلي (onmouseover & onmouseout)</h3>
        <p>مرر مؤشر الفأرة فوق الصندوق بالأسفل وشاهد كيف تتغير الأنماط (Styles):</p>
        <div id="interactive-box" onmouseover="toggleBoxHighlight(true)" onmouseout="toggleBoxHighlight(false)">
            ضع مؤشر الفأرة هنا!
        </div>

        <hr>

        <h3>⚙️ الميزة الديناميكية الثانية: تبديل المظهر (Dark / Light Mode)</h3>
        <button class="interactive-btn" id="theme-btn" onclick="toggleDarkMode()">🌙 تفعيل الوضع المظلم</button>
    </div>

    <hr>

        <div class="game-container">
            <h3>🎮 ميزة بونص إضافية: لعبة تخمين الأرقام</h3>
            <p class="game-instruction">لقد اخترت رقماً سرياً بين 1 و 10، هل يمكنك تخمينه؟</p>
            
            <input type="number" id="user-guess" min="1" max="10" placeholder="رقم من 1 إلى 10">
            <button class="interactive-btn" onclick="checkSecretGame()">تخمين الرقم</button>
            <p id="game-result"></p>
        </div>

    <script src="script.js"></script>
</body>
</html>