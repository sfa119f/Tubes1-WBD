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
            <script>
                alert("Username or Email already taken");
            </script>
        ';
    }
    else if(!preg_match($regex, $password)){
        echo'
            <script>
                alert("Password can only contain alphanumeric characters and underscores");
            </script>
        ';
    }
    else if($password != $confirmPassword){
        echo'
            <script>
                alert("Password and Confirm password must same");
            </script>
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
                <script>
                    window.location.href="dashboard.php";
                </script>
                ';
            }
        }
        else{
            echo'
            <script>
                alert("error on server side, no need to worry");
            </script>
            ';
        }
    }
}
else{
}
?>