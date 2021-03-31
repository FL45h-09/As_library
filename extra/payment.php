<?php
session_start();
include('SqlCon.php');
    $fullname = $_POST["fullname"];
    $cardNo = $_POST["cardNo"];
    $cardCvv = $_POST["cvv"];
    $cardExp = $_POST["expiry"];
    $usrid = $_SESSION["user_n"];

    // The following quuery is to get the last id. 
        $sqlId = "SELECT * FROM subdtls ORDER BY Srno DESC LIMIT 1";
        $res = mysqli_query($conn, $sqlId);
        while($row = mysqli_fetch_array($res)){
            $id = $row['Srno'];
        }

        //Take the last id convert it into integer and increment it by 1.
        $LastId = (int)$id;
        $nextId = ++$LastId;

        $subid = $_SESSION["user_n"].$nextId;
        $regdate = date("Y/m/d");
        $plan = $_SESSION["card_v"];
        $duration = $_SESSION["card_d"];

        if($duration == 3){
        $expdate = date('Y/m/d', strtotime('+3 months'));
        }elseif($duration == 12){
            $expdate = date('Y/m/d', strtotime('+12 months'));
        }elseif($duration == 24){
            $expdate = date('Y/m/d', strtotime('+24 months'));
        }elseif($duration == 36){
            $expdate = date('Y/m/d', strtotime('+36 months'));
        }


    $sqlQ2 = "INSERT INTO bank_dtls (userid, Cardholder, Cardno, Cardexp, Cardcvv) VALUES ('$usrid', '$fullname', '$cardNo', '$cardExp', '$cardCvv');";

    $sqlQ3 = "INSERT INTO subdtls (Srno, userid, Subid, Regdate, plan, Expdate) VALUES ('$nextId', '$usrid', '$subid', '$regdate', '$plan', '$expdate');";

    if (mysqli_query($conn, $sqlQ2) && mysqli_query($conn, $sqlQ3)) {
            $_SESSION["error3"] = "You have successfully Subsrcribed.";
            $conn->close();
            unset($_SESSION["card_n"]);
            unset($_SESSION["card_v"]);
            unset($_SESSION["card_d"]);
            
            header("Location:/index.php");
            } else{
            echo "Error: " . $sqlQ2 . "<br>" . $conn->error;
            echo "Error: " . $sqlQ3 . "<br>" . $conn->error;
            }


?>