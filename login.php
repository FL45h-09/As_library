<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Library</title>
</head>
<body>


<?php
    include("includes/header.php");
    if(!isset($_SESSION["user_n"])) {
?>
    <section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Accelerating your knowledge to shape a better future</h1>
      <p class="leading-relaxed mt-4">A great book should leave you with many experiences, and slightly exhausted at the end. You live several lives while reading.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Log in</h2>
      <form name="login_frm" method="POST" action="includes\verify.php">

      <input name="u_name" class="bg-white rounded border border-gray-400 focus:outline-none focus:border-blue-500 text-base px-4 py-2 mb-4" placeholder="User id / Email" type="text" required>
      <input name="u_pass" class="bg-white rounded border border-gray-400 focus:outline-none focus:border-blue-500 text-base px-4 py-2 mb-4" placeholder="Password" type="password" required>
      <?php
        if(isset($_SESSION["error"]))
        {
          include("includes/error.php");
          unset($_SESSION["error"]);
        }elseif(isset($_SESSION["error3"]))
        {
          include("includes/error.php");
          unset($_SESSION["error3"]);
        }
      ?>
      <button class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Log in</button>
      <p class="text-xs text-gray-700 mt-3">You are not an user then register <a href="signup.php" class="text-blue-600 hover:text-gray-900" href="register.php"><u>here.</u></a></p>
      </form>
    </div>
  </div>
</section>
   


<?php
    include("includes/footer.php");
    }elseif(isset($_SESSION["user_n"])){
      header("Location:/index.php");
    }     
?>
</body>
</html>