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
    <ul class="navbar">
        <li><a href="dashboard.php" class="active"><i class="fas fa-home"></i> Home</a></li>
        <?php if($_SESSION['role'] === "1") : ?>
            <li><a href="addChoco.php"><i class="fas fa-plus"></i> Add Choco</a></li>
        <?php else : ?>
            <li><a href="history.php"><i class="fas fa-history"></i> History</a></li>
        <?php endif; ?>
        <li class="search">
            <form action="dashboard.php" method="GET">
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
                            <h5>Price: Rp <?php echo $row["price"]; ?>,00</h5>
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