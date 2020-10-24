<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
unset($_COOKIE['logged']);
unset($_COOKIE['logged_type']);
//session_destroy();

header("Location: ../../login.php");
exit;
?>