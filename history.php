<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Toggle Menu CSS -->

    <link rel="stylesheet" href="/css/style.css">
    <title>Library | Profile</title>
    <script src="/js/main.js"></script>


</head>


<body>
    <!-- Header starts here... -->
    <?php
    include("extra/header.php");
    include("extra/personal_info.php");
    if (isset($_SESSION["user_n"])) {
    ?>

        <!-- Body starts here... -->

        </br>


        <div class="mx-10 sm:mt-0 mt-20 mb-20 rounded-lg lg:rounded-l-lg shadow-2xl border">
            <div class="px-10 md:grid md:grid-cols-3 md:gap-6">
                <!--Left side starts here-->
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0 mt-8">
                        <h1 class="text-2xl text-blue-500 font-bold lg:pt-0">
                            Active Plan
                        </h1>
                        <div class="mx-auto lg:mx-0 w-full pt-3 border-b-2 border-green-500 opacity-25">
                        </div>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            <?php 
                            include("extra/active_plan.php");
                            if ($subRowCount > 0) {
                                $regSub = date_create($subReg);
                                $expSub = date_create($subExp);

                                include("extra/plan_details.php");
                            ?>
                        </p>
                    <?php } ?>
                    </div>
                </div>

                <!-- Right   side starts here-->
                <div class="mt-10 md:mt-0 md:col-span-2">
                    <h1 class="text-3xl text-blue-500 font-bold pb-1 pt-8 lg:pt-0 mt-5">
                        <?php //echo $dbfname . " " . $dblname; 
                        ?> Histroy
                    </h1>
                    <div class="mx-auto lg:mx-0 w-full pt-3 border-b-2 border-green-500 opacity-25">
                    </div>
                    <?php include("extra/history_info.php"); ?>
                </div>
            </div>
        </div>


        <!-- Footer starts here... -->

    <?php
        include("extra/footer.php");
    } else header("Location:/login.php");
    ?>

</body>

</html>