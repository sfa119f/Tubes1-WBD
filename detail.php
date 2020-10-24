<?php
    include "assets/php/checklogin.php"
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Detail</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/board.css">
    <link rel="stylesheet" href="assets/css/detail.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="#Home"><i class="fas fa-home"></i> Home</a></li>
        <?php if($_SESSION['role'] === "1") : ?>
            <li><a href="#AddChoco"><i class="fas fa-plus"></i> Add Choco</a></li>
        <?php else : ?>
            <li><a href="#History"><i class="fas fa-history"></i> History</a></li>
        <?php endif; ?>
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
                <h2>Milk Choco</h2>
            </div>
        </div>
        <div class="flex detail">
            <div class="image mid">
                <img src="assets/img/choco_milk.jpg" alt="Milk Choco">
            </div>
            <div class="info left">
                <table>
                    <tr>
                        <th>Amount Sold</th>
                        <td>21</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>Rp 3.000,00</td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>9</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>guy uyg uydsg ug uyds yu kysvd sdv usvyug sduyg  kjli asuchyd cu uysdckuab cubdchuabc usbcusdbckasdb</td>
                    </tr>
                </table>
            </div>
        </div>        
        <div>
            <button class="back"><i class="fas fa-chevron-left"></i> Back</button>
            
            <?php if($_SESSION['role'] === "1") : ?>
                <button class="addStock"><i class="fas fa-plus-square"></i> Add Stock</button>
            <?php else : ?>
                <button class="buy"><i class="fas fa-shopping-cart"></i> Buy Now</button>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>