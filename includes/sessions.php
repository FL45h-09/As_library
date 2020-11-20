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
        $mod1 = 1;
    }

    if($months< 3)
    {
        $mod2 = 0;
    }

?>