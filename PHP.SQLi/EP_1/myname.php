<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผล</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(255, 243, 252);
            color:rgb(10, 52, 42);
            text-align: center;
            padding: 50px;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $name = "Pattanun";
        $surname = "Kamhongsa";
        echo "<h1>สวัสดีคุณ: $name</h1>";
        echo "<p>นามสกุล: $surname</p>";
        ?>
    </div>
</body>
</html>
