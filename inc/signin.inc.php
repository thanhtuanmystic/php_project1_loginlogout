<?php
session_start();
include 'db.inc.php';
if (isset($_POST['submit']) && $_POST['username'] != "" && $_POST['password'] != '') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM usercontrol WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["user"] = $username;
        header("Location: ../homepage.php");
    } else {
        $_SESSION['thongbao'] = "Sai tên đăng nhập hoặc mật khẩu";
        header("Location: ../index.php");
    }
} else {
    $_SESSION['thongbao'] = "Hãy nhập đầy đủ thông tin tài khoản";
    header("location: ../index.php");
}
