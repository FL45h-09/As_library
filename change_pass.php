<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Toggle Menu CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <title>Change Password</title>
</head>
<body>
 
<!-- Header starts here... -->
<?php
    include("extra/header.php");
    if(isset($_SESSION["user_n"])) {
?>

<!-- Body starts here... -->

<div class="container mx-auto px-8 my-8 md:flex h-screen items-center justify-center">
<form method="POST" action="/extra/changeP.php" class="w-full max-w-lg">

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Current Password
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" name="cPasswd" type="password" placeholder="******************"  required>
      <?php
        if(isset($_SESSION["error"]))
        {
          include("extra/error.php");
          unset($_SESSION["error"]);
        }else{echo '<p class="text-gray-600 text-xs italic">Please type your current password.</p>';}
      ?>
      
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        New Password
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="password" name="nPasswd1" placeholder="New Password" required>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Retype Password
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="password" name="nPasswd2" placeholder="New password" required>
    </div>

     <?php
        if(isset($_SESSION["error2"]))
        {
          include("extra/error.php");
          unset($_SESSION["error2"]);
        }
      ?>
  </div>

  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-500 shadow-sm hover:bg-blue-400 focus:outline-none focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out">
              Save
            </button>
          </div>

  </div>
</form>

</div>

<!-- Footer starts here... -->

<?php
    include("extra/footer.php");
    }else header("Location:/as_lib/login.php");
?>

   
</body>
</html>