<?php

/*
 * Plugin Name:       Jobs offert management
 * Description:       Handle the basics with this plugin.
 * Version:           0.0.1
 * Requires PHP:      7.2
 * Author:            Krystian Hettman
 * Author URI:        https://www.hettman.pl/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       jobs-offert-management
 */


$db_creator_file = plugin_dir_path( __FILE__ ) . 'jom-offerts/jom-db-creator.php';


if ( file_exists( $db_creator_file ) ) {
    require_once $db_creator_file;    
}


?>
