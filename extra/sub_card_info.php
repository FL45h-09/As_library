<!-- Body starts here... -->
<section class="text-gray-700 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">

        <div class="flex flex-wrap -m-4">
            <!-- 1st card starts here -->
            <?php
            include('extra/sessions.php');

            if ($_SESSION["card_v"] == 0) {
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
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>

                        <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                    </div>
                </div>
                <!-- 2nd card starts here -->
            <?php
            } elseif ($_SESSION["card_v"] == 38) {
            ?>
                <div class="p-4 xl:w-auto md:w-auto w-full">
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
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>

                        <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                    </div>
                </div>

            <?php
            } elseif ($_SESSION["card_v"] == 56) {
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
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>

                        <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                    </div>
                </div>

            <?php
            } elseif ($_SESSION["card_v"] == 72) {
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
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>

                        <p class="text-xs text-gray-500 mt-3">We realized the best way to monetize content was through a subscription model.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>