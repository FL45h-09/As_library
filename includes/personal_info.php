<?php
    include('SqlCon.php');
    //Define variables.
    $dbmail = $dbusr = $dbfname = $dblname = $dbNo = $dbDoB = $dbcity = $dbstate = $dbZip = $dbstreet = "";

    $dbcountry = "Select Country";


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
            $for_DoB = date_format(date_create($dbDoB), "d-M-Y");
            $dbcity = $row1['city'];
            $dbstate = $row1['state'];
            $dbcountry = $row1['country'];
            if($dbcountry == "")
            {
                $dbcountry = "Select Country";
            }
            $dbZip = $row1['zip'];
            $dbstreet = $row1['street'];
        }
    }
?>