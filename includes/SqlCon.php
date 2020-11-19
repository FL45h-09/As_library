 <?php
 
$servername = "localhost";
$username = "root";
$password = "Kalbatatahuna9";
$database = "aslib";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}//else {echo "Connected successfully";}

//mysqli_close($conn);

?> 