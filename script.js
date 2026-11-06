window.onload = function() {
    if (document.title.includes("الرئيسية")) {
        alert("مرحباً في موقع بوابة الخدمات الطلابية!");
    }

    let welcomeElement = document.getElementById("welcome-user");
    if (welcomeElement) {
        let savedName = localStorage.getItem("student_name");
        if (savedName) {
            welcomeElement.innerHTML = `مرحباً بعودتك يا جمانة، الطالبة المسجلة الحالية: <strong>${savedName}</strong>! 👋`;
        }
    }
    
    if (document.getElementById("datetime-display")) {
        updateDateTime();
        setInterval(updateDateTime, 1000); 
    }
};

function changeBgColor() {
    document.body.style.backgroundColor = "#e8e1d2"; 
}

function validateForm(event) {
    let name = document.forms["myForm"]["name"].value.trim();
    let email = document.forms["myForm"]["email"].value.trim();
    let password = document.forms["myForm"]["password"].value;
    let errorBox = document.getElementById("error-message");
    
    if (errorBox) {
        errorBox.innerHTML = "";
        errorBox.style.display = "none";
    }

    if (name === "") {
        displayValidationError("عذراً، يجب إدخال الاسم الكامل ولا يمكن تركه فارغاً!");
        event.preventDefault(); 
        return false;
    }

    if (!email.includes("@")) {
        displayValidationError("خطأ في البريد الإلكتروني! يجب أن يحتوي على الرمز '@'.");
        event.preventDefault();
        return false;
    }

    if (password.length < 6) {
        displayValidationError("كلمة المرور ضعيفة! يجب أن تتكون من 6 خانات على الأكثر.");
        event.preventDefault();
        return false;
    }

    localStorage.setItem("student_name", name);
    alert("تهانينا! تم التحقق من البيانات بنجاح وحفظ الاسم في الذاكرة المحلية (localStorage).");
    return true;
}

function displayValidationError(message) {
    let errorBox = document.getElementById("error-message");
    if (errorBox) {
        errorBox.innerHTML = message;
        errorBox.style.display = "block";
    }
    alert(message); 
}

function changeTextAndStyle() {
    let demoText = document.getElementById("demo");
    if (demoText) {
        demoText.innerHTML = "🎯 رائع! تم تعديل محتوى النص وتغيير لونه وحجمه ديناميكياً باستخدام الجافا سكريبت الـ DOM.";
        demoText.style.color = "#a68946"; 
        demoText.style.fontSize = "20px";
        demoText.style.fontWeight = "bold";
    }
}

function toggleBoxHighlight(isMouseOver) {
    let box = document.getElementById("interactive-box");
    if (box) {
        if (isMouseOver) {
            box.style.backgroundColor = "#a68946";
            box.style.transform = "scale(1.08)";
            box.innerHTML = "✨ التفاعل نشط الآن (Mouse Over)!";
        } else {
            box.style.backgroundColor = "#2c3e50";
            box.style.transform = "scale(1)";
            box.innerHTML = "ضع مؤشر الفأرة هنا!";
        }
    }
}

function updateDateTime() {
    let dateTimeElement = document.getElementById("datetime-display");
    if (dateTimeElement) {
        let now = new Date();
        let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
        dateTimeElement.innerHTML = "تاريخ ووقت الزيارة الحالي: " + now.toLocaleDateString('ar-SA', options);
    }
}

function toggleDarkMode() {
    let bodyElement = document.body;
    bodyElement.classList.toggle("dark-mode");
    
    let themeButton = document.getElementById("theme-btn");
    if (themeButton) {
        if (bodyElement.classList.contains("dark-mode")) {
            themeButton.innerHTML = "💡 تفعيل الوضع المضيء";
        } else {
            themeButton.innerHTML = "🌙 تفعيل الوضع المظلم";
        }
    }
}

//  لعبة تخمين الأرقام التفاعلية
let secretNumber = Math.floor(Math.random() * 10) + 1;

function checkSecretGame() {
    let userGuess = document.getElementById("user-guess").value;
    let gameResult = document.getElementById("game-result");
    
    if (!userGuess) {
        gameResult.innerHTML = "❌ الرجاء إدخال رقم أولاً لكي تخمن!";
        gameResult.style.color = "red";
        return;
    }
    
    if (parseInt(userGuess) === secretNumber) {
        gameResult.innerHTML = "🎉 كفو يا جمانة! تخمينك صحيح 100%.. الإجابة هي " + secretNumber;
        gameResult.style.color = "green";
        // إعادة توليد رقم جديد بعد الفوز للتجديد
        secretNumber = Math.floor(Math.random() * 10) + 1;
    } else if (parseInt(userGuess) < secretNumber) {
        gameResult.innerHTML = "📉 الرقم السري أكبر من تخمينك، جربي مرة أخرى!";
        gameResult.style.color = "#a68946";
    } else {
        gameResult.innerHTML = "📈 الرقم السري أصغر من تخمينك، جربي مرة أخرى!";
        gameResult.style.color = "#a68946";
    }
}