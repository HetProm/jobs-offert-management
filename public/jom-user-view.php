<?php  

defined( 'ABSPATH' ) || exit;
function jom_user_jobs_table($atts) {
    global $wpdb;

    $user_id = get_current_user_id();

    $table_name = $wpdb->prefix . 'jom_users_personal'; 

    $query = $wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE user_id = %d", $user_id);
    $count = $wpdb->get_var($query);


if ($count > 0) {
    $query = $wpdb->prepare("SELECT * FROM $table_name WHERE user_id = %d", $user_id);
    $results = $wpdb->get_results($query, ARRAY_A);
    
    $content = '<table class="table-auto w-full">
            <thead class="bg-gray-300">
                <tr class="rounded-lg">
                    <th class="px-4 py-2 rounded-tl-lg">ID oferty pracy</th>
                    <th class="px-4 py-2">Nazwa firmy</th>
                    <th class="px-4 py-2">Stanowisko</th>
                    <th class="px-4 py-2">Doświadczenie</th>
                    <th class="px-4 py-2">Tryb pracy</th>
                    <th class="px-4 py-2">Rodzaj pracy</th>
                    <th class="px-4 py-2">Typ zatrudnienia</th>
                    <th class="px-4 py-2">Pensja od</th>
                    <th class="px-4 py-2">Pensja do</th>
                    <th class="px-4 py-2">Lokalizacja</th>
                    <th class="px-4 py-2">Krótki opis</th>
                    <th class="px-4 py-2 rounded-tr-lg">Data zgłoszenia</th>
                </tr>
            </thead>
        <tbody>';

    foreach ($results as $row) {
        $formatted_date = date('Y-m-d', strtotime($row['application_date']));
        $content .= '<tr>
                <td class="border px-4 py-2">' . $row['user_id'] . '</td>
                <td class="border px-4 py-2">' . $row['job_title'] . '</td>
                <td class="border px-4 py-2">' . $row['company_name'] . '</td>
                <td class="border px-4 py-2">' . $row['experience'] . '</td>
                <td class="border px-4 py-2">' . $row['operating_mode'] . '</td>
                <td class="border px-4 py-2">' . $row['type_of_work'] . '</td>
                <td class="border px-4 py-2">' . $row['employment_type'] . '</td>
                <td class="border px-4 py-2">' . $row['salary_from'] . '</td>
                <td class="border px-4 py-2">' . $row['salary_to'] . '</td>
                <td class="border px-4 py-2">' . $row['location'] . '</td>
                <td class="border px-4 py-2">' . $row['short_description'] . '</td>
                <td class="border px-4 py-2">' . $formatted_date . '</td>
            </tr>';

    }

    $content .= '</tbody>
    </table>';

    return $content;
} else {

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit-button'])) {
     
            
            $job_title = sanitize_text_field($_POST['job_title']);
            $company_name = sanitize_text_field($_POST['company_name']);
            $experience = sanitize_text_field($_POST['experience']); 
            $operating_mode = sanitize_text_field($_POST['operating_mode']); 
            $type_of_work = sanitize_text_field($_POST['type_of_work']); 
            $employment_type = sanitize_text_field($_POST['employment_type']); 
            $salary_from = sanitize_text_field($_POST['salary-from']); 
            $salary_to = sanitize_text_field($_POST['salary-to']); 
            $location = sanitize_text_field($_POST['location']); 
            $short_description = sanitize_text_field($_POST['short_description']); 
            $data = sanitize_text_field( $_POST['datepicker'] );

            
            $wpdb->insert(
                $table_name,
                array(
                    'user_id' => $user_id,
                    'job_title' => $job_title,
                    'company_name' => $company_name,
                    'experience' => $experience, 
                    'operating_mode' => $operating_mode, 
                    'type_of_work' => $type_of_work, 
                    'employment_type' => $employment_type, 
                    'salary_from' => $salary_from, 
                    'salary_to' => $salary_to, 
                    'location' => $location, 
                    'short_description' => $short_description, 
                    'application_date' => $data
                ),
                array('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s') 
            );

            
        }
        
        return include("user_panel/jom-user-form.php");
    }
}
add_shortcode('jom_user_jobs_table', 'jom_user_jobs_table');
