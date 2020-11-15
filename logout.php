<?php
    session_start();
    if(isset($_SESSION["user_n"])) {
    unset($_SESSION["user_n"]);
    header("Location:login.php");
    }
?>