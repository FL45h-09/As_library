<?php
    include('includes/SqlCon.php');
    $colors = array("red", "green", "blue", "yellow");

    /*foreach ($colors as $value) {
      echo "$value <br>";
    }*/

        $fname = "Mala";
        $lname = "Jogi";
        $email = "mala@gmail.com";
        $usrid = "mala_j";
        $dob = "1993-12-01";
        $passwd = hash('md5', "mala123");
        $passwd2 = hash('md5', "mala123");
        //Take the curent date and store it into the variable.
        $todatD = date("Y/m/d");

        // The following quuery is to get the last id. 

        $sqlId = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
        $res = mysqli_query($conn, $sqlId);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
        }

        //Take the last id convert it into integer and increment it by 1.
        $LastId = (int)$id;
        var_dump($LastId);
            echo "</br>";
        $nextId = ++$LastId;
        var_dump($nextId);
            echo "</br>";

        $sqlQ2 = "INSERT INTO users (id, userid, email, passwd, regDate) VALUES ('$nextId', '$usrid', '$email', '$passwd2', '$todatD')";

        $sqlQ3 = "INSERT INTO userdtls (srNo, userid, FName, LName, DoB) VALUES ('$nextId', '$usrid', '$fname', '$lname', '$dob')";

        if(mysqli_query($conn, $sqlQ2) && mysqli_query($conn, $sqlQ3)){
          echo "Data in two tables successfully inserted.";
        }else{ 
          echo "Error: not inserted data.</br>";
          echo ("Error: ". mysqli_error());
        }
?>