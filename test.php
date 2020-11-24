<?php
    session_start();
    include('includes/SqlCon.php');
    $colors = array("red", "green", "blue", "yellow");

    /*foreach ($colors as $value) {
      echo "$value <br>";
    }*/

    $_SESSION["error3"] = "You have successfully signed up.";
    header("Location:/login.php");
?>