<?php 

    session_start();
    include('SqlCon.php');

    function sanitize_input($data)
    {
        $data = trim($data); //Strip unnecessary characters (extra space, tab, newline) from the user input data
        $data = stripslashes($data); //Remove backslashes (\) from the user input data
        $data = htmlspecialchars($data); //it treats special charactors as HTML escaped code.
        return $data;
    }

    if(count($_POST)>0)
    {

        //Take all the post data and store it in to the variables.
        $fname = sanitize_input($_POST['fname']);
        $lname = sanitize_input($_POST['lname']);
        $email = sanitize_input($_POST['email']);
        $usrid = sanitize_input($_POST['uname']);
        $dob = sanitize_input($_POST['dob']);
        $passwd = hash('md5', $_POST['passwd']);
        $passwd2 = hash('md5', $_POST['passwd2']);
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
        $nextId = ++$LastId;
        
        //following query is to grab the userid from data base to check if it exist of not.
        $sqlQ = "SELECT * FROM users WHERE userid = '$usrid'";
        $sqlQ1 = "INSERT INTO users (id, userid, email, passwd, regDate) VALUES ('$nextId', '$usrid', '$email', '$passwd2', '$todatD');";
        $sqlQ1 .= "INSERT INTO userdtls (srNo, userid, FName, LName, DoB) VALUES ('$nextId', '$usrid', '$fname', '$lname', '$dob');";

        $reslt = mysqli_query($conn, $sqlQ);
        $dbusr = "";
        while($row = mysqli_fetch_array($reslt)){
            $dbusr = $row['userid']; 
            var_dump($dbusr);
        }

        
        if($usrid == $dbusr){
            
            $_SESSION["error"] = "Please select different User ID.";
            header("Location:/signup.php");
        }

        if($passwd == $passwd2){
           if ($conn->multi_query($sqlQ1) === TRUE) {
            $_SESSION["error"] = "You have successfully created account.";
            $conn->close();
            header("Location:/login.php");
            } else {
            echo "Error: " . $sqlQ1 . "<br>" . $conn->error;
            }
        }
        else{
            $_SESSION["error"] = "Passwords not matching.";
            header("Location:/signup.php");
        }

    }

?>