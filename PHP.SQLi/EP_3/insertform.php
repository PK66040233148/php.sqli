<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูลพนักงาน</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            background: linear-gradient(135deg, #a3aaff, #f9f7fc);
            color: #3e3e3e;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #5c4ad1;
            margin-bottom: 15px;
        }

        .form-container {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="date"], input[type="tel"], select, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background-color: #f5f5f5;
            font-size: 15px;
            box-sizing: border-box;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="date"]:focus, select:focus, input[type="tel"]:focus, textarea:focus {
            border-color: #5c4ad1;
            background-color: #e8eaff;
            outline: none;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        input[type="submit"], input[type="reset"], .btn-back {
            padding: 12px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            border-radius: 8px;
            text-decoration: none;
            color: #ffffff;
            transition: transform 0.3s ease;
        }

        input[type="submit"] {
            background-color: #5c4ad1;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #4a3c9c;
            transform: translateY(-2px);
        }

        input[type="reset"] {
            background-color: #f14e42;
            border: none;
        }

        input[type="reset"]:hover {
            background-color: #e53f30;
            transform: translateY(-2px);
        }

        .btn-back {
            background-color: #2ecc71;
            text-align: center;
            text-decoration: none;
            border: none;
        }

        .btn-back:hover {
            background-color: #27ae60;
            transform: translateY(-2px);
        }

        hr {
            border: none;
            height: 1px;
            background: #e3e3e3;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="insertdata.php" method="POST">
            <h2>กรอกข้อมูลพนักงาน</h2>
            <hr>
            <label for="emp_title">คำนำหน้า :</label>
            <select name="emp_title" id="emp_title" required>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
            <label for="emp_name">ชื่อ :</label>
            <input type="text" name="emp_name" id="emp_name" required>
            <label for="emp_surname">นามสกุล :</label>
            <input type="text" name="emp_surname" id="emp_surname" required>
            <label for="emp_birthday">วันเดือนปีเกิด :</label>
            <input type="date" name="emp_birthday" id="emp_birthday" required>
            <label for="emp_adr">ที่อยู่ปัจจุบัน :</label>
            <textarea name="emp_adr" id="emp_adr" rows="4" required></textarea>
            <label for="emp_skill">ทักษะความสามารถ :</label>
            <textarea name="emp_skill" id="emp_skill" rows="4" required></textarea>
            <label for="emp_tel">เบอร์โทรศัพท์ :</label>
            <input type="tel" name="emp_tel" id="emp_tel" required>
            <div class="button-group">
                <input type="submit" value="บันทึกข้อมูลพนักงาน">
                <input type="reset" value="ล้างข้อมูล">
                <a href="index.php" class="btn-back">กลับไปหน้าหลัก</a>
            </div>
        </form>
    </div>
</body>
</html>
