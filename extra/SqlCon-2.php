 <?php
 
 //Set veriables for connection.
$servername = "sql313.byethost17.com";
$username = "b17_28083988";
$password = "Rvindustry9";
$database = "b17_28083988_aslibrary";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 