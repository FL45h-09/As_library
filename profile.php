<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    
    <!-- Toggle Menu CSS -->
    
    <link rel="stylesheet" href="/css/style.css">
    <title>Library</title>
</head>

<!-- Header starts here... -->
<?php
    include("includes/header.php");
    if(isset($_SESSION["user_n"])) {
?>

<!-- Body starts here... -->

</br>
<div class="mt-10 mx-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          Your personal informations is safe with us.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                <input id="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="John">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                <input id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Wick">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="email_address" class="block  text-sm font-medium leading-5 text-gray-700">Email address</label>
                <input id="email_address" type="email" autocomplete="on"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="john@example.com">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Country / Region</label>
                <select id="country" default="India" class="mt-1 block form-select w-full py-3 px-4 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                  <option value="none" selected disabled hidden>Select Country</option> 
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Mexico</option>
                  <option>India</option>
                  <option>South Africa</option>
                </select>
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city" class="block text-sm font-medium leading-5 text-gray-700">City</label>
                <input id="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Mumbai">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-sm font-medium leading-5 text-gray-700">State / Province</label>
                <input id="state" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Maharashtra">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postal_code" class="block text-sm font-medium leading-5 text-gray-700">ZIP / Postal</label>
                <input id="postal_code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="400100">
              </div>

              <div class="col-span-6 sm:col-span-4">
                    <label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">Street address
                    </label>
                    <textarea rows="3" cols="10" id="street_address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Address"></textarea>
              </div>

            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Footer starts here... -->

<?php
    include("includes/footer.php");
    }else header("Location:/as_lib/login.php");
?>

</body>
</html>