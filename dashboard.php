<?php
    include_once "assets/php/checklogin.php";
    include_once "assets/php/dashboardprocess.php";
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
    <?php include "navbar.php"?>
    <div class="content">
        <div class="flex">
            <div class="flex-1 left">
                <h3>Hello, <?php echo $_COOKIE['logged']?></h3>
            </div>
            <div class="flex-1 right mid">
                <?php if($allSearch) : ?>
                    <a href="dashboard.php?show=<?php echo $search?>" id="viewDefChoco">View all result</a>
                <?php elseif($allChoco) : ?>
                    <a href="dashboard.php?show=def" id="viewDefChoco">View most sold</a>
                <?php else : ?>
                    <a href="dashboard.php?show=all" id="viewAllChoco">View all chocolates</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="flex listChoco">
            <?php if(mysqli_num_rows($result)) :?>
				<?php while($row = mysqli_fetch_array($result)) : ?>
                    <a href="detail.php?chocoid=<?php echo $row["choco_id"]?>">
                    <div class="card">
                        <span class="tooltip center">Details</span>
                        <div class="image center mid">
                            <img src="images/<?php echo $row["image"]; ?>" >
                        </div>
                        <div class="info left">
                            <h4><?php echo $row["choco_name"]; ?></h4>
                            <h5>Amount sold: <?php echo $row["amount_sold"]; ?></h5>
                            <?php
                                $chocoprice = $row["price"];
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
                            <h5>Price: Rp <?php echo $chocopricestr; ?>,00</h5>
                        </div>
                    </div></a>
                <?php endwhile; ?>
            <?php else : ?>
                <h1 class="flex-1 mid center" style="height:300px; padding:125px">No Result</h1>
            <?php endif; ?>
        </div>
    </div>
</body>

<script src="assets/scripts/tooltip.js"></script>

</html>