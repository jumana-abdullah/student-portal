<?php
$conn = mysqli_connect(
    "localhost",
    "YOUR_USERNAME",
    "YOUR_PASSWORD",
    "student_portal"
);

if (!$conn) {
    die("Database connection failed.");
}
?>
