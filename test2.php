<?php

    $email = array("test", "test2", "test@example.com", "test2@example.com", "test392", "test@example.net", "vishal", "vishal@gmail.com");

    function checkEmail($email) {
        $find1 = strpos($email, '@');
        $find2 = strpos($email, '.');
        return ($find1 !== false && $find2 !== false && $find2 > $find1);
    }

    echo "total array: ".count($email)."</br>";

    foreach($email as $value){
        if ( checkEmail($value) ) {
            echo $value . ' ( looks like a valid email address.)'."</br>";
        }
    }
?>