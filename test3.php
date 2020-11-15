

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Tailwind CSS Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="/css/style.css"> 
	
</head>

<body class="bg-gray-200 flex items-center justify-center h-screen">
  
  <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Modal</button>
  
  <?php
    include("includes/modal.php");
  ?>

  <script src="\js\main.js">
    
  </script>
</body>
</html>

