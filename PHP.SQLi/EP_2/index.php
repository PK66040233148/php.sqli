<?php
require('dbconnect.php');
$sql = "SELECT * FROM employee"; // เลือกข้อมูลจากตาราง employee ออกมาแสดง
$result = mysqli_query($con, $sql); // รันคำสั่งที่ถูกเก็บไว้ในตัวแปร $sql

$count = mysqli_num_rows($result); // เก็บผลที่ได้จากคำสั่ง $result ไว้ในตัวแปร $count
$order = 1; // ให้เริ่มนับแถวจากเลข 1
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายชื่อพนักงานทั้งหมด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #f4f7f6; /* Soft grey background */
            color: #4a4a4a;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
            margin-top: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .btn {
            padding: 10px 30px;
            font-size: 1rem;
            border-radius: 25px;
        }

        .btn-info {
            background-color: #4ab1a8; /* Fresh teal color */
            border: none;
            color: white;
        }

        .btn-info:hover {
            background-color: #40a495; /* Darker teal */
        }

        .btn-success {
            background-color: #ff5c8d; /* Soft pink */
            border: none;
            color: white;
        }

        .btn-success:hover {
            background-color: #ff4756; /* Darker pink */
        }

        .btn-danger {
            background-color: #ff6b6b; /* Light coral */
            border: none;
            color: white;
        }

        .btn-danger:hover {
            background-color: #e84242; /* Darker coral */
        }

        .table {
            background-color: #ffffff; /* White background for table */
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .table th, .table td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
        }

        .table thead {
            background-color: #333;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f0f8ff;
        }

        .form-control {
            border-radius: 20px;
            padding: 12px 20px;
            font-size: 1rem;
            background-color: #eaeaea; /* Light grey background for input */
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #ff5c8d; /* Pink border on focus */
            box-shadow: 0 0 10px rgba(255, 92, 141, 0.5); /* Light pink glow */
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .search-bar {
            margin-top: 30px;
            display: flex;
            gap: 10px;
        }

        .search-bar input[type="submit"] {
            width: 100%;
            border-radius: 25px;
        }

        .btn-container {
            margin-top: 30px;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>รายชื่อพนักงานทั้งหมด</h1>

    <form action="searchdata.php" method="POST" class="search-bar">
        <input type="text" name="namesearch" placeholder="กรอกชื่อพนักงานที่ต้องการค้นหา" class="form-control">
        <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info">
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>คำนำหน้า</th>
                <th>ชื่อ</th>
                <th>สกุล</th>
                <th>วันเกิด</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $order++; ?></td>
                <td><?php echo $row["emp_title"]; ?></td>
                <td><?php echo $row["emp_name"]; ?></td>
                <td><?php echo $row["emp_surname"]; ?></td>
                <td><?php echo $row["emp_birthday"]; ?></td>
                <td><a href="editdata.php?emp_id=<?php echo $row["emp_id"]; ?>" class="btn btn-success">แก้ไข</a></td>
                <td><a href="deletedata.php?emp_id=<?php echo $row["emp_id"]; ?>" class="btn btn-danger">ลบข้อมูล</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <div class="btn-container">
        <a href="insertform.php" class="btn btn-success">กรอกข้อมูลพนักงาน</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
