<!-- Body starts here... -->
<?php
include("extra/sub_plan_info.php");

if ($subRowCount > 0) {
?>

    <section class="text-gray-700 body-font overflow-hidden">
        <div class="container px-3 py-10 mx-auto">

            <div class="flex flex-wrap -m-4">
                <!-- 1st card starts here -->
                <?php
                if ($card_v === 0) {
                ?>
                    <div class="p-4 xl:w-auto md:w-audo w-full">
                        <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">START</h2>
                            <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">Free<span class="text-lg ml-1 font-normal text-gray-500"> for 3 months</span>
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

                            <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                        </div>
                    </div>
                    <!-- 2nd card starts here -->
                <?php
                } elseif ($card_v == 38) {
                ?>
                    <div class="p-3 xl:w-auto md:w-auto w-full">
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
                                </span> Acess to all books.
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

                            <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                        </div>
                    </div>

                <?php
                } elseif ($card_v == 56) {
                ?>
                    <!-- 3rd card starts here -->

                    <div class="p-4 xl:w-auto md:w-auto w-full">
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

                            <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                        </div>
                    </div>

                <?php
                } elseif ($card_v == 72) {
                ?>
                    <!-- 4rd card starts here -->

                    <div class="p-4 xl:w-auto md:w-auto w-full">
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

                            <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php
} else {
?>

    <section class="text-gray-700 body-font overflow-hidden">
        <div class="container px-3 py-10 mx-auto">

            <div class="flex flex-wrap -m-4">
                <div class="p-4 xl:w-auto md:w-auto w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">No Plan<br>
                            <span class="text-lg ml-1 font-normal text-gray-500">Haven't subscribed to any plan.</span>
                        </h1>

                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">You will get some follwing features</h2>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Acess to unlimited books.
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
                            </span>Full acess to exclusive books.
                        </p>
                        <button onclick="javascript:window.location='../subscription.php';" class="flex items-center mt-auto text-white bg-blue-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded" name="free">Subscribe
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>

                        <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>