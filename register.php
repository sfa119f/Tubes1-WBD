<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/form.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/solid.min.css">
</head>
<body>
<div class="form">
        <div class="banner center">
            <h1>Willy Wangky Choco Factory</h1>
        </div>
        <div class="field">
            <form action="" method="">
                <div>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Username</label>
                </div>
                <div>
                    <input type="text" id="email" name="email" required>
                    <label for="password">Email</label>
                </div>
                <div>
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                    <i class="fa fa-eye" id="eye1" aria-hidden="true" onclick="hidePass()"></i>
                    <i class="fa fa-eye-slash" id="eye2" aria-hidden="true" onclick="showPass()"></i>
                </div>
                <div>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                    <label for="password">Password</label>
                    <i class="fa fa-eye" id="eye1" aria-hidden="true" onclick="hidePass()"></i>
                    <i class="fa fa-eye-slash" id="eye2" aria-hidden="true" onclick="showPass()"></i>
                </div>
                <input type="submit" name="register" value="Register">
                <h4 class="center">Already have an account? <a href="login.php">Log In</a></h4>
            </form>
        </div>
    </div>
</body>