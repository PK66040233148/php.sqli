<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      background-color: #f7f7f7;
      font-family: 'Arial', sans-serif;
      padding: 50px 0;
    }
    .form-login {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 450px;
      margin: auto;
    }
    .form-login h2 {
      text-align: center;
      color:rgb(82, 80, 231);
      font-size: 24px;
      margin-bottom: 20px;
    }
    .form-control {
      border-radius: 20px;
      border: 1px solid #ddd;
    }
    .btn {
      border-radius: 20px;
      padding: 10px 20px;
      font-size: 16px;
    }
    .btn-info {
      background-color: #17a2b8;
      color: white;
    }
    .btn-success {
      background-color: #28a745;
      color: white;
    }
    .btn-warning {
      background-color: #ffc107;
      color: white;
    }
    .btn:hover {
      opacity: 0.9;
    }
    .form-footer {
      text-align: center;
      margin-top: 20px;
    }
    .form-footer a {
      text-decoration: none;
      color: #50e7d4;
    }
  </style>
  <title>เข้าระสู่ระบบจัดการข้อมูลพนักงาน</title>
</head>

<body>

  <div class="container">
    <div class="form-login">
      <h2><i class='bx bxs-user-pin'></i> เข้าระสู่ระบบจัดการข้อมูลพนักงาน</h2>
      <form method="POST" action="chk.php">
        <div class="mb-3">
          <label for="username" class="form-label">ชื่อเข้าระบบ</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">รหัสผ่าน</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
        <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
        <a href="index.php" class="btn btn-info">กลับหน้าหลัก</a>
      </form>
      <div class="form-footer">
        <p>&copy; 2025 จัดการข้อมูลพนักงาน</p>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
