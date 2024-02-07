<?php  


function jom_user_jobs_table($atts) {
    global $wpdb;

    $user_id = get_current_user_id();

    $table_name = $wpdb->prefix . 'jom_users_personal'; 

    $query = $wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE user_id = %d", $user_id);
    $count = $wpdb->get_var($query);


    if ($count > 0) {
        $table_content = '<table class="jom-user-jobs-table">';

        $table_content .= '<tr><td>ID oferty pracy</td><td>Nazwa firmy</td><td>Stanowisko</td></tr>';

        $table_content .= '</table>';

        return $table_content;
    } else {
        
        return <<<HTML
                    <form class="max-w-[25em] remove-wp-limit mx-auto">
                        <div class="flex flex-col md:flex-row md:space-x-10">
                            <div class=" max-w-[15em]">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod fugiat ducimus accusamus iste laborum! Eligendi assumenda, quaerat quod sequi, alias beatae accusantium tempora blanditiis, omnis culpa est? Ad, nemo fugiat.</span>
                            </div>
                            <div class="flex space-x-10 max-sm:mt-[1em]">
                                <div class="flex flex-col space-y-6 w-full">
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="job_title">Job title</label>
                                            <input type="text" name="job_title" id="job_title" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="company_name">Company name</label>
                                            <input type="text" name="company_name" id="company_name" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="experience">Experience</label>
                                            <input type="text" name="experience" id="experience" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="operating_mode">Operating mode</label>
                                            <input type="text" name="operating_mode" id="operating_mode" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="type_of_work">Type of work</label>
                                            <input type="text" name="type_of_work" id="type_of_work" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="employment_type">Employment type</label>
                                            <input type="text" name="employment_type" id="employment_type" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="flex max-sm:flex-col md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <label for="salary">Salary</label>
                                            <input type="text" name="salary" id="salary" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <label for="location">Location</label>
                                            <input type="text" name="location" id="location" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <label for="short_description">Short description</label>
                                        <textarea name="short_description" id="short_description" class="w-full border rounded-md border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500"></textarea>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                HTML;
    }
}
add_shortcode('jom_user_jobs_table', 'jom_user_jobs_table');
