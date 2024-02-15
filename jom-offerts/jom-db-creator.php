<?php

defined( 'ABSPATH' ) || exit;
function jom_create_table() {

 global $wpdb;
 
 
 $table_name = $wpdb->prefix . 'jom_users_personal';


 if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id mediumint(9) NOT NULL,
        job_title varchar(100) NOT NULL,
        company_name varchar(100) NOT NULL,
        experience varchar(50),
        operating_mode varchar(50),
        type_of_work varchar(50),
        employment_type varchar(50),
        salary_from varchar(50),
        salary_to varchar(50),
        location varchar(100),
        short_description varchar(255),
        application_status varchar(20) NOT NULL,
        application_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

}

register_activation_hook( dirname(plugin_dir_path( __FILE__ )).'/jobs-offert-management.php', 'jom_create_table' );
?>
