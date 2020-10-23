<?php
    include "../php/dbconfig.php";
    $q = $_GET["q"];
    $str = "";
    $selectdata = "SELECT * FROM users WHERE email='$q' ";
    $query = mysqli_query($con,$selectdata) or die (mysqli_error($con));
    $countuser = mysqli_num_rows($query); 
    if($countuser == 1){
        $str = "Email Already Taken";?>
        <style type="text/css">
            #email {
                border: 1px solid red;
            }
        </style>
        <?php
    }
    else if ($q == ""){
        $str = "Required";?>
        <style type="text/css">
            #email {
                border: 1px solid red;
            }
        </style>
        <?php
    }
    else if ($countuser != 1){
        $str = "Email Avaiable";?>
        <style type="text/css">
            #email {
                border: ;
            }
        </style>
        <?php
    }
    else{
        $str = "ERROR";
    }

    echo $str
?>