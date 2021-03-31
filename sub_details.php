<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Toggle Menu CSS -->

    <link rel="stylesheet" href="css/style.css">
    <title>Account details</title>
</head>

<!-- Header starts here... -->
<?php
include("extra/header.php");
include("extra/personal_info.php");
if (isset($_SESSION["user_n"])) {
?>

    <!-- Body starts here... -->

    </br>


    <div class="mx-10 sm:mt-0 mt-20 mb-20 rounded-lg lg:rounded-l-lg shadow-2xl border">
        <div class="px-10 md:grid grid-flow-col md:auto-cols-max md:auto-cols-min">
            <!--Left side starts here-->
            <div class="">
                <?php include("extra/sub_card_info.php") ?>
            </div>

            <!-- Right   side starts here-->
            <div class="mt-10 md:mt-0">
                <form action="sub_payment.php" method="POST">
                    <div class=" overflow-visible sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-auto gap-6">

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                                    <input value="<?php echo $dbfname; ?>" id="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="John" name="fname" required readonly>
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                                    <input value="<?php echo $dblname; ?>" id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Wick" name="lname" required readonly>
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="email_address" class="block  text-sm font-medium leading-5 text-gray-700">Email address</label>
                                    <input value="<?php echo $dbmail; ?>" id="email_address" type="email" autocomplete="on" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="john@example.com" name="email" required>
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Country / Region</label>
                                    <select id="country" name="country" class="mt-1 block form-select w-full py-3 px-4 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                                        <?php include("extra/countries.php"); ?>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="dob" class="block text-sm font-medium leading-5 text-gray-700">Date Of Birth</label>
                                    <input type="date" value="<?php echo $dbDoB; ?>" id="dob" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Maharashtra" name="dob" required>
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium leading-5 text-gray-700">City</label>
                                    <input value="<?php echo $dbcity; ?>" id="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Mumbai" name="city" required>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postal_code" class="block text-sm font-medium leading-5 text-gray-700">ZIP / Postal</label>
                                    <input value="<?php echo $dbZip; ?>" id="postal_code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="400100" name="zip" required>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="state" class="block text-sm font-medium leading-5 text-gray-700">State / Province</label>
                                    <input value="<?php echo $dbstate; ?>" id="state" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Maharashtra" name="state" required>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">Street address
                                    </label>
                                    <textarea rows="3" cols="10" id="street_address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Address" name="street" required><?php echo $dbstreet; ?></textarea>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <div class="float-right">
                                        <label for="state" class="block text-sm font-medium leading-5 text-gray-700">Total amount</label>
                                        <div class="flex border-t border-gray-200 py-2">
                                            <span class="text-gray-500">Price</span>
                                            <span class="ml-auto text-gray-900">$ <?php echo number_format($_SESSION["card_v"], 2);?> </span>
                                        </div>
                                        <div class="flex border-t border-gray-200 py-2">
                                            <span class="text-gray-500">Tax</span>
                                            <span class="ml-auto text-gray-900">$ <?php echo $_SESSION["card_tax"] ;?></span>
                                        </div>
                                        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                                            <span class="text-gray-500">Total</span>
                                            <span class="ml-auto text-gray-900">$ <?php echo $_SESSION["card_total"]; ?> </span>
                                        </div>
                                        <div class="flex">
                                            <span class="title-font font-medium text-2xl text-gray-900">$<?php echo $_SESSION["card_total"] ;?></span>

                                            <input onclick="javascript:window.location='subscription.php';" type="button" class="ml-8 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out cursor-pointer" value="Cancle"> &nbsp;&nbsp;


                                            <button onclick="return confirm('Are you sure you want to proceed?');" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                                Next
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 mb-10">



                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Footer starts here... -->

<?php
    include("extra/footer.php");
} else header("Location:login.php");
?>

</body>

</html>