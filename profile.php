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
<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover">

<?php
	include("includes/header.php");
	include("includes/personal_info.php");
    if(isset($_SESSION["user_n"])) {
?>

<div class="mx-10 sm:mt-10 sm:mb-10 lg:mt-20 lg:mb-20 rounded-lg lg:rounded-l-lg shadow-2xl border">
  <div class="px-10 md:grid md:grid-cols-3 md:gap-6">
  <!--Left side starts here-->
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900 mt-10">Personal Information</h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          Your personal informations is safe with us.
        </p>
      </div>
    </div>

	<!--Right side starts here-->

    <div class="md:mt-0 md:col-span-2">
        <div class=" overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
				<!-- Image for mobile view-->
				<!--
				<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div> -->
				
				<h1 class="text-3xl text-blue-500 font-bold pt-8 lg:pt-0"><?php echo $dbfname." ".$dblname; ?></h1>
				<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg> What you do</p>
				<p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/></svg> Your Location - 25.0000° N, 71.0000° W</p>
				<p class="pt-8 text-sm">Totally optional short description about yourself, what you do and so on.</p>

				<div class="pt-12 pb-8">
					<button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
					Get In Touch
					</button> 
				</div>

				
				
				<!-- Use https://simpleicons.org/ to find the svg for your preferred product --> 
			</div>
		</div>
		</div>
		
		<!-- Pin to top right corner 
		<div class="absolute top-0 right-0 h-12 w-18 p-4">
			<button class="js-change-theme focus:outline-none">🌙</button>
		</div> -->

</div>
</div>
</div>
</div>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.link',{
		  placement: 'bottom'
		})

		//Toggle mode
		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');
		
		
		toggle.addEventListener('click', () => {

		  if (body.classList.contains('text-gray-900')) {
			toggle.innerHTML = "☀️";
			body.classList.remove('text-gray-900');
			body.classList.add('text-gray-100');
			profile.classList.remove('bg-white');
			profile.classList.add('bg-gray-900');
		  } else
		  {
			toggle.innerHTML = "🌙";
			body.classList.remove('text-gray-100');
			body.classList.add('text-gray-900');
			profile.classList.remove('bg-gray-900');			
			profile.classList.add('bg-white');
			
		  }
		});
		
    </script>
	
<?php
    include("includes/footer.php");
    }else header("Location:/login.php");
?>
</body>

</html>
