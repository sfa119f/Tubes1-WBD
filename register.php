<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
    <style type="text/css"></style>
</head>
<body>
<div class="form">
        <div class="banner center">
            <h1>Willy Wangky Choco Factory</h1>
        </div>
        <div class="field">
            <form action="#" method="POST">
                <div>
                    <input type="text" id="username" name="username" onkeyup="usernameCheck(this.value)" required>
                    <label for="username">Username</label>
                </div>
                <label for="" id="usernameWarn"></label>
                <div>
                    <input type="text" id="email" name="email" onkeyup="emailCheck(this.value)" required>
                    <label for="email">Email</label>
                </div>
                <label for="" id="emailWarn"></label>
                <div>
                    <input type="password" id="passw" name="password" onkeyup="passCheck(this.value)" required>
                    <label for="passw">Password</label>
                    <a onclick="showPass(2)">
                        <i class="fa fa-eye right" id="showPassw" style="display: none;"></i>
                        <i class="fa fa-eye-slash right" id="hidePassw"></i>
                    </a>
                </div>
                <label for="" id="passWarn"></label>
                <div>
                    <input type="password" id="confirmPassword" name="confirmPassword" onkeyup="cPassCheck(this.value)" required>
                    <label for="confirmPassword">Confirm Password</label>
                    <a onclick="showPass(3)">
                        <i class="fa fa-eye right" id="showCPass" style="display: none;"></i>
                        <i class="fa fa-eye-slash right" id="hideCPass"></i>
                    </a>
                </div>
                <label for="" id="cPassWarn"></label>
                <input type="submit" id="registerbtn" name="register" value="Register">
                <h4 class="center">Already have an account? <a href="login.php">Log In</a></h4>
            </form>
        </div>
    </div>
</body>

<?php include "assets/php/registerprocess.php"?>
<script src="assets/scripts/showPass.js"></script>
<script src="assets/scripts/register.js"></script>

</html>