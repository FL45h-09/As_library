<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Toggle Menu CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <title>Library|Subscription</title>
</head>

<body>

  <!-- Header starts here... -->
  <?php
  include("extra/header.php");
  if (isset($_SESSION["user_n"])) {
  ?>

    <!-- Body starts here... -->
    <section class="text-gray-700 body-font overflow-hidden">
    <form method="POST" action="/extra/sub_varify.php">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Subscription Plans</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">The more you know, the smarter you grow..</p>

        </div>
        <div class="flex flex-wrap -m-4">
          <!-- 1st card starts here -->
          <?php
          include('extra/sessions.php');

          if ($freeCard == 1) {
          ?>
            <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
              <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                <h2 class="text-sm tracking-widest title-font mb-1 font-medium">START</h2>
                <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">Free<span class="text-lg ml-1 font-normal text-gray-500"> for 3 month</span>
                </h1>
                <p class="flex items-center text-gray-600 mb-2">
                  <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>Acess to limited books.
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                  <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>You can read anytime, anywhere.
                </p>
                <p class="flex items-center text-gray-600 mb-6">
                  <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>No acess to exclusive books.
                </p>
                <button class="flex items-center mt-auto text-white bg-gray-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded" name="free">Subscribe
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </button>
                <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
              </div>
            </div>
          <?php } ?>
          <!-- 2nd card starts here -->

          <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-blue-500 flex flex-col relative overflow-hidden">
              <span class="bg-blue-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
              <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PRO</h2>
              <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                <span>$38</span>
                <span class="text-lg ml-1 font-normal text-gray-500">/yr</span>
              </h1>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>Access to all Books.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>You can read anytime, anywhere.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>Single device login.
              </p>

              <button name="38" class="flex items-center mt-auto text-white bg-blue-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-blue-600 rounded">Subscribe
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </button>
              <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
            </div>
          </div>
          <!-- 3rd card starts here -->

          <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
              <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
              <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                <span>$56</span>
                <span class="text-lg ml-1 font-normal text-gray-500">/2 yrs</span>
              </h1>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>Access to all books.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>You can read anytime, anywhere.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>Two device login.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>You can get acess to exclusive book.
              </p>

              <button name="56" class="flex items-center mt-auto text-white bg-gray-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded">Subscribe
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </button>
              <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
            </div>
          </div>
          <!-- 4rd card starts here -->

          <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
              <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SPECIAL</h2>
              <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                <span>$72</span>
                <span class="text-lg ml-1 font-normal text-gray-500">/3 yrs</span>
              </h1>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>Access to all Books.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>You can read anytime, anywhere.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>Multiple device login.
              </p>
              <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>You can get acess to exclusive book.
              </p>
              <p class="flex items-center text-gray-600 mb-6">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>You will get hard copy of any two books of you choice.
              </p>
              <button name="72" class="flex items-center mt-auto text-white bg-gray-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded">Subscribe
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </button>
              <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
            </div>
          </div>
        </div>
      </div>
    </form>
    </section>


    <!-- Footer starts here... -->
  <?php
    include("extra/footer.php");
  } else header("Location:/login.php");
  ?>
</body>

</html>