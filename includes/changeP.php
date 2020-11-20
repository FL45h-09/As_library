<?php  
    session_start();
    include('SqlCon.php');

    $cPass = hash('md5', $_POST["cPasswd"]);
    $nPass1 = hash('md5', $_POST["nPasswd1"]);
    $nPass2 = hash('md5', $_POST["nPasswd2"]);

    if(count($_POST)>0)
    {
        $sqlQ = "SELECT * FROM users WHERE passwd = '$cPass'";

    $reslt = mysqli_query($conn, $sqlQ);

    while($row = mysqli_fetch_array($reslt)){
      
            $dbpass = $row['passwd'];
    }

    
    if($cPass == $dbpass)
    {
        if($nPass1 == $nPass2)
        {
            $sqlQ2 = "UPDATE users SET passwd = '$nPass2' WHERE passwd = '$cPass'";
            mysqli_query($conn, $sqlQ2);
            
            header("Location:/logout.php");
        }else
        {
        $_SESSION["error2"] = "Passwords not matching.";
        header("Location:/change_pass.php");
        }
    }
    else
    {
        $_SESSION["error"] = "Wronge current password.";
        header("Location:/change_pass.php");
    }
    }
?>