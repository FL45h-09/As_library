<?php 
    session_start();
    include('SqlCon.php');

    $usrID = $_POST["u_name"];
    $passwd = hash('md5', $_POST["u_pass"]);

        if(count($_POST)>0)
        {
        //Check if the given userid input is email or userID.
            if (filter_var($usrID, FILTER_VALIDATE_EMAIL)) {

                $sqlQ = "SELECT * FROM users WHERE email = '$usrID'";
                $reslt = mysqli_query($conn, $sqlQ);

                while($row = mysqli_fetch_array($reslt)){
                
                        $dbpass = $row['passwd'];
                        $dbmail =   $row['email'];
                        $dbusr = $row['userid'];
                }

                if($usrID == $dbmail AND $passwd == $dbpass)
                {
                    $_SESSION["user_n"] = $dbusr;

                    if(isset($_SESSION["user_n"]))
                    {
                        $conn->close();
                        header("Location:/index.php");
                    }
                }
                else
                {
                    $_SESSION["error"] = "Invalid username or password.";
                    $conn->close();
                    header("Location:/login.php");
                }
                        

            } else {

                $sqlQ = "SELECT * FROM users WHERE userid = '$usrID'";
                $reslt = mysqli_query($conn, $sqlQ);

                while($row = mysqli_fetch_array($reslt)){
                
                        $dbpass = $row['passwd'];
                        $dbusr = $row['userid'];
                }

                if($usrID == $dbusr AND $passwd == $dbpass)
                {
                    $_SESSION["user_n"] = $dbusr;

                    if(isset($_SESSION["user_n"]))
                    {
                        $conn->close();
                        header("Location:/index.php");
                    }
                }
                else
                {
                    $_SESSION["error"] = "Invalid username or password.";
                    $conn->close();
                    header("Location:/login.php");
                }
            }

    }
?>