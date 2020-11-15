<?php 
    session_start();

    $user = $_POST["u_name"];
    $passwd = $_POST["u_pass"];
    if(count($_POST)>0)
    {
    if($user == "vishal_ravan" AND $passwd == "password")
    {
        $_SESSION["user_n"] = $user;

        if(isset($_SESSION["user_n"]))
        {
            header("Location:/index.php");
        }
    }
    else
    {
        $_SESSION["error"] = "Invalid username or password.";
        header("Location:/login.php");
    }
    }
?>