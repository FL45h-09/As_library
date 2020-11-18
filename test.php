

<?php
    include('includes/SqlCon.php');
    $usrID = $_POST['t1'];
    $usrPass = $_POST['p1'];
    $hashPass = hash('md5', $usrPass);

    //echo "1) From input: ".$hashPass."</br> ";
    //var_dump($hashPass);
    //echo "<br>";

    $sqlQ = "SELECT * FROM users WHERE userid = '$usrID'";

    $reslt = mysqli_query($conn, $sqlQ);

    while($row = mysqli_fetch_array($reslt)){
      echo "<tr>"; 
            $dbpass = $row['passwd']; 
            //echo "2) From Database passwd: ".$dbpass."</br>";
            //var_dump($dbpass); 
            //echo "<br>";
            $dbusr = $row['userid'];
            echo "3) From database user: ".$dbusr."</br>";  
    }
    
    if($hashPass === $dbpass)
    {
      echo "You have successfully logged in.";
    }else {
      echo "</br>"."Wrong user id pass!!";
    }
    
    $conn->close(); 
?>