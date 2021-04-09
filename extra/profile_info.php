<div class="py-4 rounded">
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-2 overflow-x-auto rounded">
        <div class="inline-block min-w-full shadow-lg rounded-lg overflow-hidden">
            <div class="min-w-full leading-normal">
                <div>

                    <div class="px-5 py-3 border-b-2 border-gray-200 bg-blue-500 text-left text-ms font-semibold text-gray-300 uppercase tracking-wider"> Profile </div>

                </div>

                <div class=" overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">Full Name :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbfname . " " . $dblname; ?></p>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">User ID :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbusr; ?></p>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">Email ID :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbmail; ?></p>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">Contact :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbNo; ?></p>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">Date Of Birth :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $for_DoB; ?></p>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">Street :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbstreet; ?></p>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">City :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbcity; ?></p>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">State :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbstate; ?></p>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">Country :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbcountry; ?></p>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="bg-white text-sm">Pincode / Zip :</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <p class="text-gray-700 whitespace-no-wrap"><?php echo $dbZip; ?></p>
                                </select>
                            </div>
                            <div class="flex items-center col-span-6 sm:col-span-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    </br>
                                    </br>
                                    </br>
                                    <button onclick="editProfile()" id="edit" class="bg-indigo-600 shadow-sm hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded-full">Edit Profile</button>
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>