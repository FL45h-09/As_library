<?php
    //session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    
    <!-- Toggle Menu CSS -->
    <link rel="stylesheet" href="/css/sb_style.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Library</title>
</head>
<body class="content-center justify-items-auto items-center">

<?php
    include("includes/header.php");
    if(isset($_SESSION["user_n"])) {
?>
<div class="container mx-auto flex">
<?php
    $a = 5;
    if( $a == 6)
    {
    include("includes/notify.php");
    }
    
?>

<?php
   include("includes/searchbar.php");
?>

<?php
   include("includes/books_pre.php");
?>

</div>

<?php
    include("includes/footer.php");
    }else header("Location:/login.php");
?>
</body>
</html>