<?php
    include('SqlCon.php');
    session_start();
    $userId = $_SESSION["user_n"];

    $yesno1 = (isset($_POST['yesno']) ) ? 1 : 0;

    echo $yesno."<br>";
    //$Querysql = "UPDATE `subdtls` SET `Autorenew`= $yesno WHERE 'userid' = '$userId';";
    
    $Querysql = "UPDATE `subdtls` SET `Autorenew` = $yesno1 WHERE userid = '$userId'";

    echo $Querysql;

    if (mysqli_query($conn, $Querysql)) 
    {
        $_SESSION["savedData"] = "Your data is saved.";
        $conn->close();
        header("Location:/history.php");
    } else{
        echo "Error: " . $Querysql . "<br>" . $conn->error;
    }

?>