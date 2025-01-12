<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(173, 68, 113), rgb(108, 132, 148));
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            color: #34495e;
            border: 8px solid rgb(2, 1, 1); /* Thicker border added */
        }
        h1 {
            text-align: center;
            color:rgb(173, 68, 92);
            margin-bottom: 20px;
        }
        form label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: #2c3e50;
        }
        form input, form select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dcdde1;
            border-radius: 5px;
            font-size: 1rem;
        }
        form input[type="radio"] {
            width: auto;
            margin: 0 10px 0 0;
        }
        form input[type="submit"] {
            background-color:rgb(173, 68, 96);
            color: white;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            width: 100%;
        }
        form input[type="submit"]:hover {
            background-color:rgb(131, 52, 52);
        }
        .radio-group {
            margin-bottom: 15px;
            font-size: 1rem;
        }
        .radio-option {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        .radio-option label {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Fill Out Your Information</h1>
        <form action="save.php" method="POST">
            <label for="sex">Gender</label>
            <div class="radio-group">
                <div class="radio-option">
                    <input type="radio" id="male" name="sex" value="m">
                    <label for="male">Male</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="female" name="sex" value="f">
                    <label for="female">Female</label>
                </div>
            </div>

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name">

            <label for="birthday">Birthday</label>
            <input type="date" id="birthday" name="birthday">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Choose your username">

            <label for="password">Password</label>
            <input type="password" id="password" name="pwd" placeholder="Set your password">

            <input type="submit" value="Save Information">
        </form>
    </div>
</body>
</html>
