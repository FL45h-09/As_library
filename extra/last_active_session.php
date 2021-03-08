<?php
    //Check if the cookie is set or not.
    if(!isset($_COOKIE['Active_time'])){
        unset($_SESSION["user_n"]);

        //header("Location:login.php");
    }
?>