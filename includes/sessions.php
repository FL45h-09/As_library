<?php

    include('SqlCon.php');

    $mod1 = 0;
    $mod2 = 1;

    if(isset($_SESSION["user_n"]))
    {
    $userN = $_SESSION["user_n"];
    }

    $sqlQ = "SELECT * FROM users WHERE userid = '$userN'";

    $dateCurrent = strtotime(date("Y-m-d"));
    //==echo "current date: ";
    //var_dump($dateCurrent);
    //echo "</br>";

    $reslt = mysqli_query($conn, $sqlQ);

    while($row = mysqli_fetch_array($reslt)){
        $dbdate = strtotime($row['regDate']);
        //echo "Registered date: ";
        //var_dump($dbdate);
    }

    
    // Formulate the Difference between two dates 
    $diff = abs($dateCurrent - $dbdate);
    
    $years = floor($diff / (365*60*60*24));  
    //echo "</br>Years: ".$years;
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    //echo "</br>Months: ".$months;
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    //echo "</br>Days: ".$days; 

    if($months< 3)
    {
        $mod1 = 1;
    }

    if($months< 3)
    {
        $mod2 = 0;
    }

?>