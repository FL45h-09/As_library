<?php 
    session_start();
    include('SqlCon.php');

    $usrID = $_POST["u_name"];
    $passwd = hash('md5', $_POST["u_pass"]);

    if(count($_POST)>0)
    {
        $sqlQ = "SELECT * FROM users WHERE userid = '$usrID'";

    $reslt = mysqli_query($conn, $sqlQ);

    while($row = mysqli_fetch_array($reslt)){
      
            $dbpass = $row['passwd']; 
            $dbusr = $row['userid']; 
    }

    if($usrID == $dbusr AND $passwd == $dbpass)
    {
        $_SESSION["user_n"] = $dbusr;

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