<?php 
    $connect = mysqli_connect("localhost", "root", "", "choco_factory")  or die(mysqli_error()); ;
    include "assets/php/checklogin.php";
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
                
				$sql = "SELECT * FROM transaction";
                $result = mysqli_query($connect, $sql);
                
                $result_per_page = 10;
                $number_of_results = mysqli_num_rows($result);

                $number_of_pages = ceil($number_of_results/$result_per_page);

                //Determine which page is on
                if(!isset($_GET['page'])){
                    $page = 1;
                }else{
                    $page = $_GET['page'];
                }
                
                //Determine starting limit
                $this_page_first_result = ($page-1)*$result_per_page;

                //Retrieve selcted results and limit them
                $sql = "SELECT * FROM transaction  ORDER BY transaction_date ASC LIMIT" . $this_page_first_result. ",".$result_per_page;

                $result = mysqli_query($connect, $sql);

                while($row = mysqli_fetch_array($result)){
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
			?>    
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