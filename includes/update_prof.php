<?php
    session_start();
    include('SqlCon.php');
    
    if (isset($_SESSION["user_n"])) {
        $usrid = $_SESSION["user_n"];
    }

    //Define variables.
    $dbmail = $dbusr = $dbfname = $dblname = $dbNo = $dbDoB = $dbcity = $dbstate = $dbcountry = $dbZip = $dbstreet = "";

    function sanitize_input($data)
    {
        $data = trim($data); //Strip unnecessary characters (extra space, tab, newline) from the user input data
        $data = stripslashes($data); //Remove backslashes (\) from the user input data
        $data = htmlspecialchars($data); //it treats special charactors as HTML escaped code.
        return $data;
    }

if (count($_POST) > 0) {

    //Take all the post data and store it in to the variables.
    $fname = sanitize_input($_POST['fname']);
    $lname = sanitize_input($_POST['lname']);
    $email = sanitize_input($_POST['email']);
    $country = sanitize_input($_POST['country']);
    $city = sanitize_input($_POST['city']);
    $state = sanitize_input($_POST['state']);
    $zip = sanitize_input($_POST['zip']);
    $street = sanitize_input($_POST['street']);
    //Take the curent date and store it into the variable.
    $todatD = date("Y/m/d");
    // The following quuery is to get the last id. 
    $sqlId = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
    $res = mysqli_query($conn, $sqlId);
    while ($row = mysqli_fetch_array($res)) {
        $id = $row['id'];
    }

    //Take the last id convert it into integer and increment it by 1.
    $LastId = (int)$id;
    $nextId = ++$LastId;

    //following query is to grab the userid from data base to check if it exist of not.
    $sqlQ = "SELECT * FROM users WHERE userid = '$usrid'";
    

    echo "File is under construction... please bare with us...";
}

?>