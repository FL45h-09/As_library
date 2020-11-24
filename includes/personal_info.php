<?php
    include('SqlCon.php');

    if (isset($_SESSION["user_n"])) {
        $uname = $_SESSION["user_n"];
    }

    $sqlQ = "SELECT * FROM users WHERE userid = '$uname'";
    $sqlQ1 = "SELECT * FROM userdtls WHERE userid = '$uname'";

    $reslt = mysqli_query($conn, $sqlQ);
    $reslt1 = mysqli_query($conn, $sqlQ1);
    while ($row = mysqli_fetch_array($reslt) AND $row1 = mysqli_fetch_array($reslt1)) 
    {
        $dbmail =   $row['email'];
        $dbusr = $row['userid'];
        $dbfname = $row1['FName'];
        $dblname = $row1['LName'];
    }
?>