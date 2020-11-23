<?php

    $email = array("test", "test2", "test@example.com", "test2@example.com", "test392", "test@example.net", "Sanker", "vishal@gmail.com", 3, 5);

    function checkEmail($email) {
        $find1 = strpos($email, '@');
        $find2 = strpos($email, '.');
        return ($find1 !== false && $find2 !== false && $find2 > $find1);
    }

    echo "total array: ".count($email)."</br>";

    foreach($email as $value){
        if ( checkEmail($value) ) {
            echo "</br>".$value . ' ( looks like a valid email address.)'."</br>";
        }else {
        echo("</br>$value is not a valid email address </br>");
    }
    }

    foreach($email as $value){
    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
        echo("</br>$value is a valid email address");
    } else {
        echo("</br>$value is not a valid email address");
    }
    }
?>