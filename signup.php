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
    if(isset($_SESSION["user_n"])) {
    unset($_SESSION["user_n"]);
    header("Refresh:0");
    }
?>
<div class="container mx-auto px-8 my-8 flex flex-wrap h-screen items-center justify-center">
    <section class="text-gray-700 body-font">
  <div class="container px-0 py-14 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/6 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Accelerating your knowledge to shape a better future</h1>
      <p class="leading-relaxed mt-4">A great book should leave you with many experiences, and slightly exhausted at the end. You live several lives while reading.</p>
    </div>

    <!-- Right side of tghe page -->
    <div class=" flex lg:w-3/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign up</h2>
      
      <div class="rounded text-black w-full items-center">

        <form method="POST" action="/includes/signUP.php">
                    
                    <input type="text" class="appearance-none block w-1/2 bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 float-left leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="fname" placeholder="First Name" required />

                    <input type="text" class="appearance-none block w-1/2 bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="lname" placeholder="Last Name" required />

                    <input type="text" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" placeholder="Email" required />

                    <input type="text" class="appearance-none block w-1/2 bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 float-left leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="uname" placeholder="User Id" required />

                    <input type="date" class="appearance-none block w-1/2 bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="dob" placeholder="Date of birth" required />

                    <input type="password" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="passwd" placeholder="Password" required />
                    <input type="password" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="passwd2" placeholder="Confirm Password" required />

                    <?php
                          if(isset($_SESSION["error"]))
                          {
                            include("includes/error.php");
                            unset($_SESSION["error"]);
                          }
                    ?>

                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-blue-500 text-white hover:bg-blue-300 focus:outline-none my-1 hover:text-gray-700"
                    >Create Account</button>

                    <div class="text-center text-sm mx-auto text-grey-dark mt-4">
                        By signing up, you agree to the 
                        <a class="no-underline border-b border-grey-dark text-blue-500" href="#">
                            Terms of Service
                        </a> and 
                        <a class="no-underline border-b border-grey-dark text-blue-500" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>
                </form>

                <div class="items-center text-sm mx-auto text-grey-700 mt-3">
                    Already have an account? 
                    <a class="no-underline  border-b border-blue text-blue-500" href="login.php">
                       <u> Log in </u>
                    </a>.
                </div>
                
      </div>
    </div>
  </div>
</section>
</div> 
</br>
</br></br>

<?php
    include("includes/footer.php")
?>
</body>
</html>