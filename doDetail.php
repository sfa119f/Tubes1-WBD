<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Detail</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/board.css">
    <link rel="stylesheet" href="/assets/css/detail.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/solid.min.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="#Home"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#History"><i class="fas fa-history"></i> History</a></li>
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
                <h2>Buy Chocolate</h2>
            </div>
        </div>
        <div class="flex detail">
            <div class="image mid">
                <img src="/assets/img/choco_milk.jpg" alt="Milk Choco">
            </div>
            <div class="info left">
                <h3>Milk Choco</h3>
                <table style="font-size:0.9rem">
                    <tr>
                        <th>Amount sold</th>
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
                        <td>guy uyg uydsg ug uyds yu kysvd sdv usvyug sduyg  kjli asuchyd cu uysdckuab cubdchuabc usbcusdbc sbcjb jdshbcsdj jhds jc kasdb</td>
                    </tr>
                </table>
                <div>
                    <label for="amount" id="amountLabel">Amount to Buy:</label>
                    <input class="center" type="number" id=amount name="amount" value="1">
                    <i class="fas fa-plus-circle" onclick="inAmount()"></i>
                    <i class="fas fa-minus-circle" onclick="decAmount(1)"></i>
                </div>
                    <label id="priceLabel">Price: </label>
                    <label id="price">Rp 20000</label>
            </div>
        </div>
        <div>
            <label for="address" id="addressLabel">Address</label>
            <input type="text" id="address" name="address" placeholder="Insert your address">
        </div>
        <div>
            <button class="cancel"><i class="fas fa-ban"></i> Cancel</button>
            <button class="buy"><i class="fas fa-shopping-cart"></i> Buy</button>
        </div>
    </div>
</body>

<script src="assets/scripts/numArrow.js"></script>

</html>