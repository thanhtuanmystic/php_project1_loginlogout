<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<h1>Đây là trang chủ</h1>
<a href="./inc/logout.inc.php">Log out</a>