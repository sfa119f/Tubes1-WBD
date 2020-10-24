<?php
    $connect = mysqli_connect("localhost", "root", "", "choco_factory");
    include "assets/php/checklogin.php"
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
    <ul class="navbar">
        <li><a href="#Home"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="" class="active"><i class="fas fa-history"></i> History</a></li>
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
                <h2>Transaction History</h2>
            </div>
        </div>
        <table class="left">
            <?php
				$query = "SELECT * FROM transaction ORDER BY transaction_date ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
            ?>                
            <tr>
                <th>Chocolate Name</th>
                <th>Amount</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Time</th>
                <th>Address</th>
            </tr>
                <td><?php echo $row["choco_id"]; ?></td>
                <td><?php echo $row["transaction_amount"]; ?></td>
                <td><?php echo $row["transaction_total"]; ?></td>
                <td><?php echo $row["transaction_date"]; ?></td>
                <td><?php echo gmdate("H:i:s", $row["transaction_time"]); ?></td>
                <td><?php echo $row["transaction_address"]; ?></td>
            <?php
					}
				}
			?>    
        </table>
    </div>
</body>
</html>