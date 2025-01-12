<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่มาจากฟอร์มแก้ไข
$emp_id = $_POST["emp_id"];
$emp_title = $_POST["emp_title"];
$emp_name = $_POST["emp_name"];
$emp_surname = $_POST["emp_surname"];
$emp_birthday = $_POST["emp_birthday"];
$emp_adr = $_POST["emp_adr"];
$emp_skill = $_POST["emp_skill"];
$emp_tel = $_POST["emp_tel"];

// สร้างคำสั่ง SQL สำหรับการอัปเดตข้อมูล
$sql = "UPDATE employee SET 
            emp_title=?, 
            emp_name=?, 
            emp_surname=?,
            emp_birthday=?, 
            emp_adr=?, 
            emp_skill=?, 
            emp_tel=? 
        WHERE emp_id=?";

// เตรียมคำสั่ง SQL
$stmt = mysqli_prepare($con, $sql);

// ผูกค่าตัวแปรกับคำสั่ง SQL
mysqli_stmt_bind_param($stmt, "sssssssi", $emp_title, $emp_name, $emp_surname, $emp_birthday, $emp_adr, $emp_skill, $emp_tel, $emp_id);

// ส่งคำสั่ง SQL ไปยังฐานข้อมูล
if (mysqli_stmt_execute($stmt)) {
    header("location: index.php");
    exit(0);
} else {
    echo "ไม่สามารถแก้ไขข้อมูลได้: " . mysqli_error($con);
}

// ปิดการเชื่อมต่อ
mysqli_stmt_close($stmt);
mysqli_close($con);
?>
