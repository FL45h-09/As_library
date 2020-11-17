 <?php
 /*
$servername = "localhost";
$username = "root";
$password = "";
$database = "aslib";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {echo "Connected successfully";}
mysqli_close($conn);
*/
?> 


<?php


$servername = "aslibrary.ga:3307";
$username = "root1";
$password = "Kalbatatahuna9";
$database = "aslib";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {echo "Connected successfully";}
mysqli_close($conn);


?>
