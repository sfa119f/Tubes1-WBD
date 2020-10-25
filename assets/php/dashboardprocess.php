<?php
    include "assets/php/dbconfig.php";

    //Show list choco
    $query = "SELECT * FROM chocolate ORDER BY amount_sold DESC LIMIT 10";
    $allSearch = false;
    $allChoco = false;
    if(isset($_GET["show"])) {
        if($_GET["show"] === "def") {
            $query = "SELECT * FROM chocolate ORDER BY amount_sold DESC LIMIT 10";
            $allChoco = false;
        }
        elseif($_GET["show"] === "all") {
            $query = "SELECT * FROM chocolate ORDER BY choco_name ASC";
            $allChoco = true;
        }
        else {
            $search = substr($_GET["show"], 1);
            $query = "SELECT * FROM chocolate WHERE choco_name LIKE '%".$search."%' ORDER BY choco_name ASC";
            $allChoco = false;
        }
    }
    elseif(isset($_GET["search"])) {
        $search = $_GET["search"];
        $query = "SELECT * FROM chocolate WHERE choco_name LIKE '%".$search."%' ORDER BY amount_sold DESC";
        if(mysqli_num_rows(mysqli_query($con, $query)) > 5){
            $query = "SELECT * FROM chocolate WHERE choco_name LIKE '%".$search."%' ORDER BY amount_sold DESC LIMIT 5";
            $allSearch = true;
        }
    }
    $result = mysqli_query($con, $query);
?>