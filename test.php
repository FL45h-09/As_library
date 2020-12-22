 <?php
  include('SqlCon.php');

  $images = scandir("imgs/books/", 1);
  $count = count($images);
  //echo $count;
  //var_dump($images);

  $books = array();
  for ($i = 0; $i <= ($count - 2); $i++) {
    //$bks = trim($images[$i], ".jpg");
    //echo $images[$i];

    $bks = str_replace(".", "", $images[$i]);

    $intg = (int)$bks;

    if ($intg != "") {
      $books[$i] = $intg;
    }
    //echo sort($newarray);
  }
  sort($books);
  $sql = "INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', 'Lab Girl', 1);";

  foreach ($books as $value) {
    echo $value . "<br>";
  }



  ?>



 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B3', "The Gene", 3);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B4', "What The F", 4);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Eruption", 5);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Seven Skeletons", 6);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Silent Sparks", 7);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Slick Water", 8);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Avengers", 9);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Spider Man", 10);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Civil War", 11);
 INSERT INTO books (Bid, Bname, Bimg) VALUES ('B1', "Captain Marvel", 12);