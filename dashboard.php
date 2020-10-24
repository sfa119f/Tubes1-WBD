<?php
    include "assets/php/checklogin.php"
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/board.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="" class="active"><i class="fas fa-home"></i> Home</a></li>
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
        <li style="float:right; width:110px;"><a href="assets/php/logoutprocess.php" style="text-align: right;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
    <div class="content">
        <div class="flex">
            <div class="flex-1 left">
                <h3>Hello, <?php echo $_COOKIE['logged']?></h3>
            </div>
            <div class="flex-1 right mid">
                <a href="">View all chocolates</a>
            </div>
        </div>
        <div class="flex listChoco">
            <div class="card">
                <span class="tooltip center">Details</span>
                <div class="image center mid">
                    <img src="assets/img/choco_milk.jpg" alt="Milk Choco">
                </div>
                <div class="info left">
                    <h4>Choco milk</h4>
                    <h5>Amount sold</h5>
                    <h5>Price</h5>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="assets/scripts/tooltip.js"></script>

</html>
