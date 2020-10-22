<?php
    //include "../../db/dbconfig.php";
    $q = $_GET["q"];
    $str = "";
    /* $selectdata = "SELECT * FROM user WHERE username='$q' ";
    $query = mysqli_query($con,$selectdata) or die (mysqli_error($con));
    $countuser = mysqli_num_rows($query); 
    if($countuser == 1){*/
    if($q == "test"){
        $str = "Username Already Taken";?>
        <style type="text/css">
            #username {
                border: 1px solid red;
            }
        </style>
        <?php
    }
    else if ($q == ""){
        $str = "Required";?>
        <style type="text/css">
            #username {
                border: 1px solid red;
            }
        </style>
        <?php
    }
    else{
        $str = "Username Avaiable";?>
        <style type="text/css">
            #username {
                border: ;
            }
        </style>
        <?php
    }

    echo $str
?>