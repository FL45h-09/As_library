<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Toggle Menu CSS -->
    <link rel="stylesheet" href="/css/sb_style.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Library</title>
</head>

<body class="content-center justify-items-auto items-center">


<?php
    include("./header.php");
    if(isset($_SESSION["user_n"])) {
?>
    <?php
    include("./sessions.php");
    ?>

    <section class="text-gray-700 body-font ">
        <div class="container px-5 py-20 mx-auto ">
            <div class="flex flex-wrap -m-4 ">
                <!--Book card start from here-->
                <?php
                //php loop starts here
                
                include('SqlCon.php');

                $Bimages = scandir("../imgs/books/", 1);
                $count = count($Bimages) - 2;
                $i =1;

                $arr = array();
                for ($i=1; $i<=$count -2;$i++) {
                    $arr[] = $i;
                }
                shuffle($arr);

                for($i = 0; $i < $count -2; $i++){
                    $id = $arr[$i];
                    $sqlQ = "SELECT * FROM books WHERE id = '$id'";
                    $reslt = mysqli_query($conn, $sqlQ);
                    $row = mysqli_fetch_array($reslt);

                    $BID = $row['Bid'];
                    $BName = $row['Bname'];
                    $BImg = $row['Bimg'];
                    $BDtls = $row['Bdtls'];
    
                ?>
                    <div class="lg:w-1/6 md:w-1/2 p-4 w-full">
                        <a href="#" class="block relative h-48 rounded overflow-hidden border-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-xl hover:scale-110 modal-open">
                            <img alt="Book" class="object-cover object-center w-full h-full block" src="..\imgs\books\<?php echo $BImg;?>.jpg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Name</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $BName ?></h2>

                        </div>
                    </div>
                    <!--Php loop ends here-->
                <?php
                }
                ?>
                <!--Book card start ends here-->

            </div>
        </div>

        <!--The following include is to add modal in this page -->
        <?php
        if ($mod2 == 1) {
            include("./modal.php");
        } elseif ($mod2 == 0) {
            include("./modal2.php");
        }
        ?>
        <!--This is the JavaScript for the mpodal to work properly... -->
        <script src="\js\main.js"></script>

    </section>
<?php
    }
?>

</body>
</html>