<?php
    include_once "assets/php/checklogin.php";
    include_once "assets/php/dbconfig.php";

    //Get transaction database
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM transaction WHERE user_id='".$user_id."' ORDER BY transaction_date ASC";
    $result = mysqli_query($con, $query) or die (mysqli_error($con));
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
                        <?php
                            $temp = "SELECT choco_name FROM chocolate WHERE choco_id='".$row["choco_id"]."'";
                            $res = mysqli_query($con, $temp) or die (mysqli_error($con));
                            $choconame = mysqli_fetch_array($res)["choco_name"]
                        ?>  
                        <td><?php echo $choconame; ?></td>
                        <td><?php echo $row["transaction_amount"]; ?></td>
                        <?php
                            $chocoprice = $row["transaction_total"];
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
                        <td>Rp <?php echo $chocopricestr; ?>,00</td>
                        <td><?php echo $row["transaction_date"]; ?></td>
                        <td><?php echo gmdate("H:i:s", $row["transaction_time"]); ?></td>
                        <td><?php echo $row["transaction_address"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>    
        </table>
    </div>
</body>
</html>