<?php
    include "assets/php/dbconfig.php";
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