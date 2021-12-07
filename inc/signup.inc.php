<?php
include 'db.inc.php';
 session_start();
if (isset($_POST['submit']) && $_POST['username'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['repassword'] != "") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($password != $repassword) {
        $_SESSION['thongbao'] = "Mật khẩu không trùng khớp";
        header("location:../signup.php");
        die();
    }
    $password = md5($password);
    $sql = "SELECT * FROM usercontrol WHERE username = '$username'";
    $checkUserName = mysqli_query($connect, $sql);

    if (mysqli_num_rows($checkUserName) > 0) {
        $_SESSION['thongbao'] = "Username đã tồn tại";
        header("location: ../signup.php");
        die();
    }
    $sql = "INSERT INTO usercontrol (username,email,password) VALUES ('$username','$email','$password')";
    mysqli_query($connect, $sql);
    header("Location:../index.php");
    $_SESSION['thongbao'] = "Đã đăng ký thành công";
} else {
    header("Location: ../signup.php");
}
