<?php
session_start();
require("dbconnect.php");
if ($_SESSION['emp_level'] != "a") {
  echo "<center>หน้าสำหรับผู้ดูแลระบบ <a href=login.php>กรุณาเข้าสู่ระบบก่อน</a></center>";
  exit();
}
if (!$_SESSION["emp_id"]) {
  header("location:login.php");
} else {

  $sqllogin = "SELECT * FROM employee WHERE emp_id='" . $_SESSION["emp_id"] . "'";
  $result = mysqli_query($con, $sqllogin);
  $row = mysqli_fetch_assoc($result);

?>
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
        background-color: #e9ecef;
        font-family: 'Arial', sans-serif;
      }

      .container {
        margin-top: 30px;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        max-width: 80%;
      }

      h2 {
        color: #4CAF50;
        font-size: 2.8rem;
        margin-bottom: 20px;
        text-align: center;
      }

      p {
        font-size: 1.1rem;
        color: #495057;
        text-align: center;
      }

      .table thead {
        background-color: #007bff;
        color: white;
      }

      .table td, .table th {
        vertical-align: middle;
        text-align: center;
      }

      .btn-danger, .btn-success {
        font-size: 1rem;
        padding: 8px 15px;
        border-radius: 50px;
      }

      .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
      }

      .btn-danger:hover {
        background-color: #c82333;
        border-color: #c82333;
      }

      .btn-success {
        background-color: #28a745;
        border-color: #28a745;
      }

      .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
      }

      .logout-icon {
        font-size: 1.4rem;
        margin-left: 10px;
      }

      .table-container {
        margin-top: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      }

      .alert {
        margin-top: 20px;
        padding: 10px;
        font-size: 1.1rem;
        border-radius: 8px;
      }

      .alert-info {
        background-color: #d1ecf1;
        color: #0c5460;
        border-color: #bee5eb;
      }
    </style>

    <title>Admin Panel</title>
  </head>

  <body>
    <div class="container">
      <h2>ยินดีต้อนรับผู้ดูแลระบบ</h2>
      <p><i class='bx bx-user-voice'></i> สวัสดีคุณ <?php echo $row["emp_title"];
                                                    echo $row["emp_name"];
                                                    echo "&nbsp";
                                                    echo $row["emp_surname"]; ?> 
        <a href="logout.php" class="btn btn-danger btn-sm">
          <i class='bx bx-lock-open bx-flashing logout-icon'></i> Log Out
        </a>
      </p>

      <div class="table-container">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>คำนำหน้า</th>
              <th>ชื่อ</th>
              <th>สกุล</th>
              <th>วันเกิด</th>
              <th>ที่อยู่ปัจจุบัน</th>
              <th>ทักษะความสามารถ</th>
              <th>เบอร์โทรศัพท์</th>
              <th>แก้ไข</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $row["emp_title"]; ?></td>
              <td><?php echo $row["emp_name"]; ?></td>
              <td><?php echo $row["emp_surname"]; ?></td>
              <td><?php echo $row["emp_birthday"]; ?></td>
              <td><?php echo $row["emp_adr"]; ?></td>
              <td><?php echo $row["emp_skill"]; ?></td>
              <td><?php echo $row["emp_tel"]; ?></td>
              <!--แก้ไขข้อมูล-->
              <td><a href="editformdata.php?emp_id=<?php echo $row["emp_id"] ?>" class="btn btn-success">แก้ไข</a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="alert alert-info">
        <p>โปรดตรวจสอบข้อมูลของผู้ใช้อย่างรอบคอบก่อนทำการแก้ไข</p>
      </div>
      
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  <?php  } ?>

  </html>
