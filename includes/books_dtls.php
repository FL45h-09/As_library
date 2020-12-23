<?php
    include('SqlCon.php');

    $Bimages = scandir("../imgs/books/", 1);
    $count = count($Bimages) - 2;
    $i =1;

    for($i = 1; $i <= $count; $i++){
        //foreach($Bimages as $value){
        $sqlQ = "SELECT * FROM books WHERE id = '$i'";
        $reslt = mysqli_query($conn, $sqlQ);
        $row = mysqli_fetch_array($reslt);

        //echo "Book ID: ".$row['Bid']."<br>";
        //echo "Book Name: ".$row['Bname']."<br>";
        //echo "Book Image: ".$row['Bimg']."<br>";
        //echo "Book Details: ".$row['Bdtls']."<br>";

        $BID = $row['Bid'];
        $BName = $row['Bname'];
        //echo $BName."<br>";
        $BImg = $row['Bimg'];
        $BDtls = $row['Bdtls'];
        //echo "--------------------------------------------<br><br>  ";
    }
?>