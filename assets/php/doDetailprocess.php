<?php
    include "assets/php/dbconfig.php";
    if(isset($_POST["buy"])){
        $amountBuy = $_POST["amount"];
        if($amountBuy <= $chocoamount) {
            $address = $_POST["address"];
            date_default_timezone_set("Asia/Jakarta");
            $date = date("Y-m-d");
            $time = date("his");
            $chocoamount = $chocoamount - $amountBuy;
            $chocosold = $chocosold + $amountBuy;
            $totalPrice = $amountBuy * $chocoprice;
            $buyQuery = "UPDATE chocolate SET amount='".$chocoamount."', amount_sold='".$chocosold."' WHERE choco_id='".$chocoid."'";
            $userid = $_SESSION['user_id'];
            $transaction = "INSERT INTO 'transaction' ('user_id', 'choco_id', 'transaction_date', 'transaction_time', 'transaction_address', 'transaction_total', 'transaction_amount') VALUES ('".$userid."', '".$chocoid."', '".$date."', '".$time."', '".$address."', '".$totalPrice."', '".$amountBuy."')";
        }
        else {
            echo'
            <script>
                alert("Not enough stock to buy");
            </script>
            ';
        }
    }
    if(isset($_POST["add"])){
        $amountAdd = $_POST["amount"];
        $chocoamount = $chocoamount + $amountAdd;
        $addQuery = "UPDATE chocolate SET amount='".$chocoamount."' WHERE choco_id='".$chocoid."'";
        $query = mysqli_query($con,$addQuery) or die (mysqli_error($con));
        if($query) {
            echo'
            <script>
            alert("Success add stock");
            </script>
            ';
        }
        else{
            if($query) {
                echo'
                <script>
                alert("Error when add stock");
                </script>
                ';
            }
        }
    }
?>