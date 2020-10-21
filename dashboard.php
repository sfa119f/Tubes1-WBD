<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/board.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/solid.min.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="" class="active">Home</a></li>
        <li><a href="#History">History</a></li>
        <li class="search">
            <form action="">
                <input type="text" placeholder="Search" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </li>
        <li style="float:right"><a href="#Logout" style="text-align: right;">Logout</a></li>
    </ul>
    <div class="content">
        <div class="flex">
            <div class="flex-1 left">
                <h3>Hello, NAMA</h3>
            </div>
            <div class="flex-1 right">
                <a href="">View all chocolates</a>
            </div>
        </div>
    </div>
</body>
