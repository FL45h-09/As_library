 <?php
  include('includes/SqlCon.php');

  $images = scandir("imgs/books/", 1); // This line grabs the name of all files from the given folder.
  $count = count($images); //This line basically calculates the numbers of entry in the given array.

  $books = array(); //init new array.

  for ($i = 0; $i <= ($count - 2); $i++) {
    $bks = str_replace(".", "", $images[$i]); //strip down the extention from the file name. 

    $intg = (int)$bks; // Conver the string into integer.

    if ($intg != "") {
      $books[$i] = $intg; // put the converted integer into new array.
    }
  }
  sort($books); // sort the array by assending order.
  $bid = "";
  foreach ($books as $value) {
    $bid = "B".$value;
    echo $value . "<br>"; // Print the array.
    $sqlQ = "UPDATE books SET id= 0 WHERE Bid= '$bid'"; // update the id from the books table.

    if ($conn->query($sqlQ) === TRUE) {
      echo "New record created successfully." . "<br>";
    } else {
      echo "Error: " . $sqlQ . "<br>" . $conn->error;
    }
    
  }



  ?>