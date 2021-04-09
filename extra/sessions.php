<?php

    include('SqlCon.php');

    //To check if the user have any active plan or not.

    $mod1 = 0; // 1 = yes and 0 = No
    $mod2 = 1; // 1 = yes and 0 = No
    $freeCard = 0;

    if(isset($_SESSION["user_n"]))
    {
    $userN = $_SESSION["user_n"];
    }

    $sqlQ = "SELECT * FROM users WHERE userid = '$userN'";

    $dateCurrent = strtotime(date("Y-m-d"));
    

    $reslt = mysqli_query($conn, $sqlQ);

    while($row = mysqli_fetch_array($reslt)){
        $dbdate = strtotime($row['regDate']);
        
    }

    
    // Formulate the Difference between two dates 
    $diff = abs($dateCurrent - $dbdate);
    
    $years = floor($diff / (365*60*60*24));  
    
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

    if($months< 3)
    {
        $freeCard = 1;
    }

    include("extra/sub_plan_info.php");

    if($subRowCount == 0)
    {
        $mod1 = 1;
    }

    if($subRowCount == 0)
    {
        $mod2 = 0;
    }

?>