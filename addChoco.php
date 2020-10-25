<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Add New Choco</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/board.css">
    <link rel="stylesheet" href="assets/css/addChoco.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
</head>
<body>
    <?php include "navbar.php"?>
    <div class="content">
        <div class="flex">
            <div class="flex-1 left">
                <h2>Add New Chocolate</h2>
            </div>
        </div>
        <div class="addChoco">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name">Name</label>
                    <input class="left" type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="price">Price (Rp)</label>
                    <input class="center" type="number" id="price" name="price" value="500">
                    <i class="fas fa-plus-circle" onclick="inPrice()"></i>
                    <i class="fas fa-minus-circle" onclick="decPrice()"></i>
                </div>
                <div>
                    <label for="amount">Amount</label>
                    <input class="center" type="number" id="amount" name="amount" value="0">
                    <i class="fas fa-plus-circle" onclick="inAmount()"></i>
                    <i class="fas fa-minus-circle" onclick="decAmount(0)"></i>
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div>
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" rows="5" required></textarea>
                </div>
                <input type="submit" name="addChocolate" value="Add Chocolate">
            </form>
        </div>
    </div>
</body>

<?php include "assets/php/addChocoprocess.php"?>
<script src="assets/scripts/numArrow.js"></script>

</html>