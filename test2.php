<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    session_start();
    if(!isset($_SESSION["user_n"]))
    {
        header("location:test.php");
    }
    else
?>
    <h1>Home page!!</h1>
</body>
</html>