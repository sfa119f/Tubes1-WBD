<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>History</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/board.css">
    <link rel="stylesheet" href="assets/css/history.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="#Home"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="" class="active"><i class="fas fa-history"></i> History</a></li>
        <li class="search">
            <form action="">
                <input type="text" placeholder="Search" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </li>
        <li style="float:right; width:110px;"><a href="#Logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
    <div class="content">
        <div class="flex">
            <div class="flex-1 left">
                <h2>Transaction History</h2>
            </div>
        </div>
        <table class="left">
            <tr>
                <th>Chocolate Name</th>
                <th>Amount</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Time</th>
                <th>Address</th>
            </tr>
                <td>Milk Choco</td>
                <td>7</td>
                <td>Rp21.000,00</td>
                <td>23 Oktober 2020</td>
                <td>11.22.33</td>
                <td>Indonesia</td>
        </table>
    </div>
</body>
</html>