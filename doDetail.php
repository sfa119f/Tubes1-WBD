<?php
    include "assets/php/checklogin.php";
    include "assets/php/detailprocess.php";
    include "assets/php/doDetailprocess.php";
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <?php if($_SESSION['role'] === "1") : ?>
        <title>Add Stock</title>
    <?php else : ?>
        <title>Buy Choco</title>
    <?php endif; ?>
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
                <h2>Buy Chocolate</h2>
            </div>
        </div>
        <div class="flex detail">
            <div class="image mid">
                <img src="<?php echo $chocoimg?>" alt="Milk Choco">
            </div>
            <div class="info left">
                <h3><?php echo $choconame?></h3>
                <table style="font-size:0.9rem">
                    <tr>
                        <th>Amount sold</th>
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
                <form action="" method="POST">
                    <div>
                        <?php if($_SESSION['role'] === "1") : ?>
                            <label for="amount" id="amountLabel">Amount to Add:</label>
                        <?php else : ?>
                            <label for="amount" id="amountLabel">Amount to Buy:</label>
                        <?php endif; ?>
                        <input class="center" type="number" id=amount name="amount" value="1">
                        <i class="fas fa-plus-circle" onclick="inAmount(); setPrice()"></i>
                        <i class="fas fa-minus-circle" onclick="decAmount(1); setPrice()"></i>
                    </div>
                    <?php if($_SESSION['role'] === "2") : ?>
                        <label id="priceLabel">Price: </label>
                        <label id="price">Rp <?php echo $chocopricestr ?>,00</label>
                        <div class="address">
                        <label for="address" id="addressLabel">Address:</label>
                        <textarea name="address" id="address" rows="3" placeholder="Insert your address"></textarea>
                        </div>
                    <?php endif; ?>
                    <div>
                        <?php if($_SESSION['role'] === "1") : ?>
                            <button class="add"><i class="fas fa-plus-square"></i> Add</button>
                            <input type="hidden" name="add" value="Add">
                        <?php else : ?>
                            <button class="buy"><i class="fas fa-shopping-cart"></i> Buy</button>
                            <input type="hidden" name="buy" value="Buy">
                        <?php endif; ?>
                    </div>
                </form>        
                <div>
                    <a href="detail.php?chocoid=<?php echo $chocoid?>"><button class="cancel"><i class="fas fa-ban"></i> Cancel</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="assets/scripts/numArrow.js"></script>
<script>
    const total = document.getElementById("amount");
    const finalPrice = document.getElementById("price");

    function setPrice(){
        var final = (parseInt(total.value) * <?php Print($chocoprice) ?>).toString();
        var temp = final.length%3;
        var finalstr = final.substring(0, temp);
        if (temp!=0) finalstr = finalstr + "."
        for(var i=temp; i<final.length; i++){
            finalstr = finalstr + final[i];
            if ((i-temp+1)%3==0 && i+1!=final.length) finalstr = finalstr + ".";
        }
        finalPrice.innerHTML="Rp " + finalstr + ",00";
    }
</script>

</html>