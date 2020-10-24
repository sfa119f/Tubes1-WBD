<?php
    include_once "assets/php/checklogin.php";
    include_once "assets/php/dbconfig.php";

    //Get transaction database
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM transaction WHERE user_id='".$user_id."' ORDER BY transaction_date ASC";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>History</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/board.css">
    <link rel="stylesheet" href="assets/css/history.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
</head>
<body>
    <?php include "navbar.php"?>
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
            <?php if(mysqli_num_rows($result) > 0) : ?>
				<?php while($row = mysqli_fetch_array($result)) : ?>
                    <tr>               
                        <td><?php echo $row["choco_id"]; ?></td>
                        <td><?php echo $row["transaction_amount"]; ?></td>
                        <td><?php echo $row["transaction_total"]; ?></td>
                        <td><?php echo $row["transaction_date"]; ?></td>
                        <td><?php echo gmdate("H:i:s", $row["transaction_time"]); ?></td>
                        <td><?php echo $row["transaction_address"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>    
        </table>
        <?php
        
            // display the links to the pages
            for ($page=1;$page<=$number_of_pages;$page++) {
                echo '<a href="history.php?page=' . $page . '">' . $page . '</a> ';
            }
        ?>
    </div>
</body>
</html>