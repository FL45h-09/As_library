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

    if (count($_POST) > 0){
    //Take all the post data and store it in to the variables.
    $fname = sanitize_input($_POST['fname']);
    $lname = sanitize_input($_POST['lname']);
    $Dob = $_POST['dob'];
    $email = sanitize_input($_POST['email']);
    $country = sanitize_input($_POST['country']);
    $city = sanitize_input($_POST['city']);
    $state = sanitize_input($_POST['state']);
    $zip = sanitize_input($_POST['zip']);
    $street = sanitize_input($_POST['street']);
    // The following quuery is to get the last id. 
        $sqlfn = "SELECT * FROM userdtls WHERE userid = '$usrid'";
    $res = mysqli_query($conn, $sqlfn);
    while ($row = mysqli_fetch_array($res)) {
        $fnm = $row['FName'];
    }

    if($fnm == $fname)
    {
        $sqlUpdate = "UPDATE userdtls SET FName = '$fname', LName = '$lname', DoB = '$Dob', city = '$city', states = '$state', country = '$country', zip = '$zip', street = '$street' WHERE userid = '$usrid'";
        $sqlUpdate1 = "UPDATE users SET email = '$email'";

        echo "Your profile is updated...";
    }
}

?>