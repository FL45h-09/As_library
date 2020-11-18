<center>
<?php
    //$t1 = $_POST["t1"];
    $t1 = "password";
    $encrptmsg = hash('md5', $t1);
    echo $encrptmsg;

?>

</br>
</br>

<a href="test2.php">Home</a>
</center>