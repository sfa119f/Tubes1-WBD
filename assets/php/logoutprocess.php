<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
unset($_COOKIE['logged']);
//session_destroy();

header("Location: ../../login.php");
exit;
?>