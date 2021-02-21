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

	<title>Library</title>
	<script src="/js/main.js"></script>
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover">

	<?php
	include("includes/header.php");
	include("includes/personal_info.php");
	if (isset($_SESSION["user_n"])) {
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

							<h1 class="text-3xl text-blue-500 font-bold pt-8 lg:pt-0"> <?php echo $dbfname . " " . $dblname; ?></h1>
							<div class="mx-auto lg:mx-0 w-full pt-3 border-b-2 border-green-500 opacity-25"></div>
							<?php include("includes/profile_info.php"); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>

		<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
		<script src="https://unpkg.com/tippy.js@4"></script>

	<?php
		include("includes/footer.php");
	} else header("Location:/login.php");
	?>
</body>

</html>