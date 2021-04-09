<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Toggle Menu CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Library</title>
</head>

<body class="content-center justify-items-auto items-center">

    <?php
    include("extra/header.php");
    if (isset($_SESSION["user_n"])) {
    ?>
        <div class="container mx-auto flex flex-wrap grid grid-rows-1">
            <?php
            include('extra/sessions.php');

            if ($mod1 == 1) {
                include("extra/notify.php");
            }

            ?>

            <?php
            include("extra/searchbar.php");
            ?>


            <?php
            include("extra/books_pre.php");
            //include("extra/pages.php");
            ?>

        </div>

    <?php
        include("extra/footer.php");
    } else header("Location:/login.php");
    ?>
</body>

</html>