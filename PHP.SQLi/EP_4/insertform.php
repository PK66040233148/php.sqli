<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .form-signin {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            margin: auto;
            max-height: 80vh; /* Limits the height of the form */
            overflow-y: auto; /* Adds vertical scrolling if needed */
            overflow-x: hidden; /* Prevents horizontal scrolling */
            border: 2px solid #ddd; /* Border around the form */
            border-radius: 10px; /* Rounded corners */
            background:rgb(227, 140, 217); /* Light paper-like background */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }

        .form-group {
            background: #ffffff; /* White background for each form field */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px; /* Spacing between form fields */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Soft shadow for fields */
        }

        body {
            background: linear-gradient(135deg, #a3aaff, #f9f7fc);
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        h2 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            color:rgb(16, 96, 19); /* Green color for the header */
        }
    </style>
    <title>บันทึกข้อมูลพนักงาน</title>
</head>

<body>
    <div class="container">
        <?php //include "nav.php"; ?>
        <h2 class="text-center">บันทึกข้อมูลพนักงาน</h2>
        <hr>
        <form action="insertdata.php" method="POST" class="form-signin">
            <div class="form-group">
                <label for="emp_title">คำนำหน้า :</label>
                <select name="emp_title" class="form-control" required>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="form-group">
                <label for="emp_name">ชื่อ :</label>
                <input type="text" name="emp_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="emp_surname">นามสกุล :</label>
                <input type="text" name="emp_surname" class="form-control">
            </div>
            <div class="form-group">
                <label for="emp_birthday">วันเดือนปีเกิด :</label>
                <input type="date" name="emp_birthday" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="emp_adr">ที่อยู่ :</label>
                <textarea name="emp_adr" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="emp_skill">ทักษะพิเศษ :</label>
                <textarea name="emp_skill" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="emp_tel">เบอร์โทรศัพท์</label>
                <input type="tel" name="emp_tel" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="emp_user">ชื่อเข้าระบบ</label>
                <input type="tel" name="emp_user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="emp_pass">รหัสผ่าน</label>
                <input type="password" name="emp_pass" class="form-control" required>
            </div>
            <div class="form-group">
    <label for="emp_level">ระดับผู้ใช้งาน <i class='bx bxs-user-pin'></i></label>
    <select name="emp_level" class="form-control" required>
        <option value="">--เลือกระดับผู้ใช้งาน--</option>
        <option value="a">ผู้ดูแลระบบ</option>
        <option value="u">ผู้ใช้งาน</option>
    </select>
</div>
<div class="form-group">
    <label for="emp_department">แผนก :</label>
    <select name="emp_department" id="emp_department" class="form-control" required>
        <option value="">--เลือกแผนก--</option>
        <option value="1">ฝ่ายบุคคล</option>
        <option value="2">ฝ่ายสินเชื่อ</option>
        <option value="3">ฝ่ายขาย</option>
        <option value="4">ฝ่ายจัดซื้อ</option>
        <option value="5">ฝ่ายการเงิน</option>
        <option value="6">ฝ่ายส่งของ</option>
    </select>
</div>

            <div class="my-3">
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
                <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
