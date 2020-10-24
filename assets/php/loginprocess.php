<?php
include "dbconfig.php";
if(isset($_POST['login'])){ #baca dari name
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $selectdata = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query = mysqli_query($con,$selectdata) or die (mysqli_error($con));
    $countuser = mysqli_num_rows($query);
    if($countuser == 1){
        echo'
            Login Success <br>
            Welcome '.$username.'
        ';
        $_SESSION['username'] = $username;
        $row = mysqli_fetch_assoc($query);
        $_SESSION['role'] = $row["user_type"];
        $_SESSION['user_id'] = (int)$row["user_id"];
        setcookie('logged',$username,time()+3600);
        setcookie('logged_type',$row["user_type"],time()+3600);
        echo'
        <script>
            window.location.href="dashboard.php?show=def";
        </script>
        ';
        //echo'<meta http-equiv = "refresh" content = "1; url = data.php?action=view&id=0" />';
    }
    else{
        echo'
            <script>
                alert("Username or Password invalid");
            </script>
        ';
    }
}
?>