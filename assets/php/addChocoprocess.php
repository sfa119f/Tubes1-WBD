<?php
include "dbconfig.php";
if(isset($_POST['addChocolate'])){ #baca dari name
    $name = $_POST['name'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $imagename = $_FILES['image']['name'];//ini file
    $imagetmpname = $_FILES['image']['tmp_name'];//ini file
    $desc = $_POST['desc'];
    
    $targetdir = "assets/img/";
    $targetfile = $targetdir . basename($imagename);
    // Get file extension
    $imageext = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    // Allowed file types
    $allowedfileext = array("jpg", "jpeg", "png");
    if (!file_exists($imagetmpname)) {
        echo'
        <script>
            alert("Image not exists");
        </script>
        ';
    }
    else if (!in_array($imageext, $allowedfileext)) {
        echo'
        <script>
            alert("Allowed file formats .jpg, .jpeg and .png.");
        </script>
        ';           
    }
    else if (file_exists($targetfile)) {
        echo'
        <script>
            alert("Image already exists, please rename or change the file!");
        </script>
        ';
    }
    else {
        if (move_uploaded_file($imagetmpname, $targetfile)) {
            $insertfile = '../'.$targetfile;
            $insertdata ="INSERT INTO chocolate (choco_name,image,price,description,amount,amount_sold) VALUES('$name','$insertfile','$price','$desc','$amount',0)"; 
            $query = mysqli_query($con,$insertdata) or die (mysqli_error($con));
            if($query){
                echo'
                <script>
                alert("Success");
                window.location.href="dashboard.php?show=all";
                </script>
                ';
            }
            else{
                echo'
                <script>
                    alert("Insert failed");
                </script>
                ';
            }
        } 
        else {
            echo'
            <script>
                alert("Image cannot be uploaded");
            </script>
            ';
        }
    }
}
else{
}
?>