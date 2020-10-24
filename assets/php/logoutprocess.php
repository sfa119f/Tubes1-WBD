<?php
session_start();
unset($_SESSION['username']);
unset($_COOKIE['logged']);
header("login.php");
exit;
//session_destroy();
?>