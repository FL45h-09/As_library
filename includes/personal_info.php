<?php
    include('SqlCon.php');
    //Define variables.
    $dbmail = $dbusr = $dbfname = $dblname = $dbNo = $dbDoB = $dbcity = $dbstate = $dbcountry = $dbZip = $dbstreet = "";


    if (isset($_SESSION["user_n"])) {
        $uname = $_SESSION["user_n"];
    }

    $sqlQ = "SELECT * FROM users WHERE userid = '$uname'";
    $sqlQ1 = "SELECT * FROM userdtls WHERE userid = '$uname'";

    if($reslt = mysqli_query($conn, $sqlQ) AND $reslt1 = mysqli_query($conn, $sqlQ1))
    {
        while ($row = mysqli_fetch_array($reslt) AND $row1 = mysqli_fetch_array($reslt1)) 
        {
            $dbmail =   $row['email'];
            $dbusr = $row['userid'];
            $dbfname = $row1['FName'];
            $dblname = $row1['LName'];
            $dbNo = $row1['contact'];
            $dbDoB = $row1['DoB'];
            $dbcity = $row1['city'];
            $dbstate = $row1['state'];
            $dbcountry = $row1['country'];
            $dbZip = $row1['zip'];
            $dbstreet = $row1['street'];
        }
    }
?>