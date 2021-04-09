<div class="p-3 m-auto">
    <div class="">
        <label for="state" class="block text-sm font-medium leading-5 text-gray-900 font-semibold">Plan Details</label>
        <div class="flex border-t border-gray-500 py-2">
            <span class="text-gray-600 font-semibold">Registration Date</span>
            <span class="ml-auto text-gray-900"><?php echo date_format($regSub, "d-M-Y"); ?> </span>
        </div>
        <div class="flex border-t border-gray-200 py-2">
            <span class="text-gray-600 font-semibold">Expiry Date</span>
            <span class="ml-auto text-gray-900"><?php echo date_format($expSub, "d-M-Y"); ?></span>
        </div>
        <div class="flex border-t border-gray-200 py-2">
            <span class="text-gray-600 font-semibold">Duration</span>
            <span class="ml-auto text-gray-900"><?php echo $durationM; ?> Months</span>
        </div>
        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
            <span class="text-gray-600 font-semibold">Auto renew</span>
            <span class="ml-auto text-gray-900">
                <form method="POST" action="extra/update_autoR.php">
                    <div class="bg-white border-2 rounded border-gray-700 w-5 h-5 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                        <input type="checkbox" class="opacity-0 absolute cursor-pointer" name="yesno" value="1" <?php echo $checked; ?> />
                        <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20">
                            <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                        </svg>
                    </div>

                    <style>
                        input:checked+svg {
                            display: block;
                        }
                    </style>
            </span>
        </div>
        <div class="flex float-right">
            <button onclick="return confirm('Are you sure you want to proceed?');" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">Save </button>

        </div>
        </br>
        </br>
    </div>
</div>