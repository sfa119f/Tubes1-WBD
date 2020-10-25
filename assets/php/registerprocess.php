<?php
include "dbconfig.php";
if(isset($_POST['register'])){ #baca dari name
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    //$regex = "/^[a-zA-Z0-9-_]+$/";
    $regex = '/^([a-z]|[0-9]|[_])+$/i';
    $selectdata = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $query = mysqli_query($con,$selectdata) or die (mysqli_error($con));
    $countuser = mysqli_num_rows($query);
    if($countuser >= 1){
        echo'
            <div class="error">
                Username or Email already taken
            </div>
        ';
    }
    else if(!preg_match($regex, $password)){
        echo'
            <div class="error">
                Password can only contain alphanumeric characters and underscores
            </div>
        ';
    }
    else if($password != $confirmPassword){
        echo'
            <div class="error">
                Password and Confirm password must same
            </div>
        ';
    }
    else{
        // ini sukses
        //insertdata ="INSERT INTO <table> (field1,field2,...,fieldn) VALUES (val1,val2,...,valn)";
        $insertdata ="INSERT INTO users (username,email,password,user_type) VALUES('$username','$email','$password',2)";  
        /*  1 superuser
            2 user
         */
        $query = mysqli_query($con,$insertdata) or die (mysqli_error($con));
        if($query){
            $_SESSION['username'] = $username;
            $temp = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $qtemp = mysqli_query($con,$temp) or die (mysqli_error($con));
            if($qtemp) {
                $rtemp = mysqli_fetch_assoc($qtemp);
                $_SESSION['role'] = $rtemp["user_type"];;        
                $_SESSION['user_id'] = (int)$rtemp["user_id"];
                setcookie('logged',$username,time()+3600);
                setcookie('logged_type',2,time()+3600);
                echo'
                <div class="success">
                    Registration success
                </div>
                ';
                sleep(2);
                echo'
                <script>
                    window.location.href="dashboard.php";
                </script>
                ';
            }
        }
        else{
            echo'
            <div class="error">
                error on server side, no need to worry
            </div>
        ';
        }
    }
}
else{
}
?>