<?php
    include "assets/php/detailprocess.php";
    include "assets/php/checklogin.php";    
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
    <?php include "navbar.php"?>
    <div class="content">
        <div class="flex">
            <div class="flex-1 left">
                <h2><?php echo $choconame?></h2>
            </div>
        </div>
        <div class="flex detail">
            <div class="image mid">
                <img src="<?php echo $chocoimg?>" alt="<?php echo $choconame?>">
            </div>
            <div class="info left">
                <table>
                    <tr>
                        <th>Amount Sold</th>
                        <td><?php echo $chocosold?></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>Rp <?php echo $chocopricestr?>,00</td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td><?php echo $chocoamount?></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><?php echo $chocodesc?></td>
                    </tr>
                </table>
            </div>
        </div>        
        <div>
            <a href="dashboard.php?show=def"><button class="back"><i class="fas fa-chevron-left"></i> Back</button></a>
            
            <?php if($_SESSION['role'] === "1") : ?>
                <a href="doDetail.php?chocoid=<?php echo $chocoid?>"><button class="addStock"><i class="fas fa-plus-square"></i> Add Stock</button></a>
            <?php else : ?>
                <a href="doDetail.php?chocoid=<?php echo $chocoid?>"><button class="buy"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>