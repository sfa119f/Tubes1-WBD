<?php
    session_start();
    if(empty($_SESSION['username']) || empty($_COOKIE['logged'])){
        echo'
            <script>
                alert("Not logged in yet");
                window.location.href="login.php";
            </script>
        ';
    }
?>