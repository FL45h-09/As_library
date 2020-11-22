<?php
    include('includes/SqlCon.php');

    $sqlId = "SELECT * FROM users ORDER BY id DESC LIMIT 1";

    $res = mysqli_query($conn, $sqlId);

    while($row = mysqli_fetch_array($res)){
        $id = $row['id'];
    }

    var_dump($id);
    echo "</br>Converted to int: ";
    $num = (int)$id;
    var_dump($num);
    echo "</br>Increment by 1: ";
    $nxt = ++$num;
    var_dump($nxt);
    echo "</br>Increment by 1: ";
    $nxt = ++$nxt;
    var_dump($nxt);
?>