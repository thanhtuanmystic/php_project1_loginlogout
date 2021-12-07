<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assest/css/signup_style.css">
    <title>Document</title>
</head>

<body>


<div class="container">
    <form action="./inc/signup.inc.php" method="POST">
        <h1>Đăng ký</h1>
        <p style="color: red">
            <?php
            if (isset($_SESSION['thongbao'])) {
                echo $_SESSION['thongbao'];
                session_unset();
            }
            ?>
        </p>
        <p>Vui lòng nhập đủ thông tin để đăng ký tài khoản mới</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>User Name</b></label>
        <input type="text" placeholder="User name" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="repassword" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" name="submit">Sign Up</button>
        </div>
    </form>

</div>
</body>

</html>