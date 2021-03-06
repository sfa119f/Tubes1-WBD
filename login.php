<?php
    session_start();
    //checking jika sudah login langsung dialihkan ke dashboard
    if(!empty($_SESSION['username']) && !empty($_COOKIE['logged'])){
        echo'
            <script>
                window.location.href="dashboard.php";
            </script>
        ';
    }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/alert.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
</head>
<body>
    <div class="form">
        <div class="banner center">
            <h1>Willy Wangky Choco Factory</h1>
        </div>
        <div class="field">
            <form action="#" method="POST">
                <div>
                    <input type="text" id="username" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div>
                    <input type="password" id="password" name="pass" required>
                    <label for="password">Password</label>
                    <a onclick="showPass(1)">
                        <i class="fa fa-eye right" id="show" style="display: none;"></i>
                        <i class="fa fa-eye-slash right" id="hide"></i>
                    </a>
                </div>
                <input type="submit" name="login" value="Log In">
                <h4 class="center">Don't have an account? <a href="register.php">Register</a></h4>
            </form>
            <?php include "assets/php/loginprocess.php"?>
        </div>
    </div>
</body>

<script src="assets/scripts/showPass.js"></script>

</html>