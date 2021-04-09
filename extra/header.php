
<script>
  
/* 
 This javaScript is to make drop down visible on click...
When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropDownF() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
} 
</script>
<?php
    SESSION_start();
    if(isset($_SESSION["user_n"]))
    {
    $username = $_SESSION["user_n"];
    }
?>

<header class="text-gray-700 bg-blue-500 body-font">
  <div class="container mx-auto py-3 flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="/index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">As Library</span>
    </a>

    <?php if(isset($_SESSION["user_n"])){ ?>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <div class="dropdown">
        
      <button onclick="dropDownF()" class="dropbtn inline-flex items-center bg-blue-400 border-0 py-1 px-3 focus:outline-none 
      hover:bg-blue-700 rounded text-base mt-4 md:mt-0"><?php echo $username; ?>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
      class="w-4 h-4 ml-1" viewBox="0 0 24 24">
      <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
      </button>

      <div id="myDropdown" class="dropdown-content">
      <a href="/profile.php" class="mr-5 hover:text-gray-900">Profile</a>
      <a href="/history.php" class="mr-5 hover:text-gray-900">History</a>
      <a href="/change_pass.php" class="mr-5 hover:text-gray-900">Change Password</a>
      <a href="/logout.php" class="mr-5 hover:text-gray-900">Log Out</a>
      </div>
      </div> 

    </nav>
    <?php } ?>
  </div>
</header>