<?php
    include "assets/php/dbconfig.php";
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
    <?php
        $chocoid = $_GET["chocoid"];
        $selectdata = "SELECT * FROM chocolate WHERE choco_id='$chocoid'";
        $query = mysqli_query($con,$selectdata) or die (mysqli_error($con));
        $data = mysqli_fetch_array($query);
        $choconame = $data['choco_name'];
        $chocoimg = substr($data['image'],3);
        $chocoprice = $data['price'];
        $chocodesc = $data['description'];
        $chocoamount = $data['amount'];
        $chocosold = $data['amount_sold'];

        if(strlen($chocoprice) > 3){
            $length = strlen($chocoprice)%3;
            if($length == 0){$length = 3;}
            $tempprice = $chocoprice;
            $chocoprice1 = str_split($tempprice,$length)[0];
            $tempprice = substr($tempprice,$length);
            $tempprice = str_split($tempprice,3);
            $chocopricestr = $chocoprice1;
            for($i=0;$i < count($tempprice);$i++){
                $chocopricestr = $chocopricestr.".".$tempprice[$i];
            }
        }
        else{
            $chocopricestr = $chocoprice;
        }
        ?>
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
            <button class="back"><i class="fas fa-chevron-left"></i> Back</button>
            
            <?php if($_SESSION['role'] === "1") : ?>
                <a href="doDetail.php?chocoid=<?php echo $chocoid?>"><button class="addStock"><i class="fas fa-plus-square"></i> Add Stock</button></a>
            <?php else : ?>
                <a href="doDetail.php?chocoid=<?php echo $chocoid?>"><button class="buy"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>