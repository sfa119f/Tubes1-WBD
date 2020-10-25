<?php
    include "assets/php/dbconfig.php";
    if(isset($_POST["buy"])){
        $amountBuy = $_POST["amount"];
        if($amountBuy <= $chocoamount) {
            $address = $_POST["address"];
            if($address != ""){
                $userid = $_SESSION['user_id'];
                date_default_timezone_set("Asia/Jakarta");
                $date = date("Y-m-d");
                $time = date("his");
                $chocoamount = $chocoamount - $amountBuy;
                $chocosold = $chocosold + $amountBuy;
                $totalPrice = $amountBuy * $chocoprice;
                $buyQuery = "UPDATE chocolate SET amount='".$chocoamount."', amount_sold='".$chocosold."' WHERE choco_id='".$chocoid."'";
                $transaction = "INSERT INTO transaction (user_id, choco_id, transaction_date, transaction_time, transaction_address, transaction_total, transaction_amount) VALUES ('".$userid."', '".$chocoid."', '".$date."', '".$time."', '".$address."', '".$totalPrice."', '".$amountBuy."')";
                $query1 = mysqli_query($con,$buyQuery) or die (mysqli_error($con));
                $query2 = mysqli_query($con,$transaction) or die (mysqli_error($con));
                if($query1 && $query2) {
                    echo'
                    <script>
                    alert("Success buy chocolate");
                    window.location.href="history.php";
                    </script>
                    ';
                }
                else {
                    echo'
                    <script>
                    alert("Error when add stock");
                    window.location.href="doDetail.php?chocoid='.$chocoid.'";                
                    </script>
                    ';
                }
            }
            else {
                echo'
                <script>
                    alert("Address is empty, please fill it");
                    window.location.href="doDetail.php?chocoid='.$chocoid.'";
                </script>
                ';
            }
        }
        else {
            echo'
            <script>
                alert("Not enough stock to buy");
            </script>
            ';
        }
    }
    elseif(isset($_POST["add"])){
        $amountAdd = $_POST["amount"];
        $chocoamount = $chocoamount + $amountAdd;
        $addQuery = "UPDATE chocolate SET amount='".$chocoamount."' WHERE choco_id='".$chocoid."'";
        $query = mysqli_query($con,$addQuery) or die (mysqli_error($con));
        if($query) {
            echo'
            <script>
            alert("Success add stock");
            window.location.href="dashboard.php?show=all";
            </script>
            ';
        }
        else{
            if($query) {
                echo'
                <script>
                alert("Error when add stock");
                window.location.href="doDetail.php?chocoid='.$chocoid.'";                
                </script>
                ';
            }
        }
    }
?>