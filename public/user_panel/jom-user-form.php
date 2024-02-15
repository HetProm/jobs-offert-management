<?php
defined( 'ABSPATH' ) || exit;
return <<<HTML
                    <form method="post" class="max-w-[25em] remove-wp-limit mx-auto" id="jom-add-form" novalidate >
                        <div class="flex flex-col md:flex-row md:space-x-10">
                            <div class=" max-w-[15em]">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod fugiat ducimus accusamus iste laborum! Eligendi assumenda, quaerat quod sequi, alias beatae accusantium tempora blanditiis, omnis culpa est? Ad, nemo fugiat.</span>
                            </div>
                            <div class="flex space-x-10 max-sm:mt-[1em]">
                                <div class="flex flex-col space-y-6 w-full">
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="job_title">Job title</label>
                                            <input type="text" name="job_title" id="job_title" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500" required>
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="company_name">Company name</label>
                                            <input type="text" name="company_name" id="company_name" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500" required>
                                        </div>
                                    </div>
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="experience">Experience</label>
                                            <select name="experience" id="experience" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                                <option value="" selected>-</option>
                                                <option value="Junior">Junior</option>
                                                <option value="Mid">Mid</option>
                                                <option value="Senior">Senior</option>
                                            </select>

                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="operating_mode">Operating mode</label>
                                            <select name="operating_mode" id="operating_mode" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                                <option value="" selected>-</option>
                                                <option value="Office">Office</option>
                                                <option value="Hybride">Hybride</option>
                                                <option value="Remote">Remote</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="type_of_work">Type of work</label>
                                            <select name="type_of_work" id="type_of_work" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                                <option value="" selected>-</option>
                                                <option value="Part-time">Part-time</option>
                                                <option value="Full-time">Full-time</option>
                                            </select>
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="employment_type">Employment type</label>
                                            <select name="employment_type" id="employment_type" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                                <option value="" selected>-</option>
                                                <option value="B2B">B2B</option>
                                                <option value="Contract">Contract</option>
                                                <option value="Permanent">Permanent</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="salary">Salary <span class=" opacity-60">(netto)</span></label>
                                            <div class=" flex w-full items-center">
                                                <input type="text" name="salary-from" id="salary-from" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500" >
                                                <span class="mx-2">-</span>
                                                <input type="text" name="salary-to" id="salary-to" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500" >
                                            </div>
                                            <p id="salary-error" class="text-red-500 mt-1"></p>
                                            
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="location">Location</label>
                                            <input type="text" name="location" id="location" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full"> 
                                            <label for="short_description">Short description</label>
                                            <textarea name="short_description" id="short_description" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500"></textarea>
                                        </div>
                                        <div class="flex flex-col w-full"> 
                                            <label for="datepicker">Data</label>
                                            <input type="text" id="datepicker" name="datepicker" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                      
                                        
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit" id="submit-button" name="submit-button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                HTML;