<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="../js/payment.js"></script>

    <!-- Toggle Menu CSS -->

    <link rel="stylesheet" href="/css/style.css">
    <title>Library | Payment</title>
</head>

<!-- Header starts here... -->
<?php
include("header.php");
include("personal_info.php");
if (isset($_SESSION["user_n"])) {
?>

    <!-- Body starts here... -->

    </br>


    <div class="mx-10 sm:mt-0 mt-20 mb-20 rounded-lg lg:rounded-l-lg shadow-2xl border">
        <div class="px-10 md:grid md:grid-cols-3 md:gap-6">
            <!--Left side starts here-->
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 mt-10">Payment Information</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-600">
                        Your payment informations is safe with us.
                    </p>
                </div>
            </div>

            <!-- Right   side starts here-->
            <div class="mt-10 md:mt-0 md:col-span-2">
                <form action="./payment.php" method="POST">
                    <div class=" overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">Cardholder name</label>
                                    <input id="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Tony Stark" name="fname">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Debit / Credit Card No</label>
                                    <input id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Eg: 4321 8765 1211 1234" name="lname">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cvv" class="block  text-sm font-medium leading-5 text-gray-700">CVV</label>
                                    <input id="cvv" type="text" autocomplete="on" maxlength="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Eg: 437" name="cvv" required>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="dob" class="block text-sm font-medium leading-5 text-gray-700">Card Expiry</label>
                                    <input type="text" id="inputExpDate" placeholder="MM / YY" maxlength='7' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="dob" required>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 mb-10">

                            <input onclick="javascript:window.location='../subscription.php';" type="button" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out cursor-pointer" value="Cancle"> &nbsp;&nbsp;


                            <button onclick="return confirm('Are you sure you want to proceed?');" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                Pay now
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Footer starts here... -->

<?php
    include("footer.php");
} else header("Location:/login.php");
?>

</body>

</html>