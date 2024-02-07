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

 function plugin_enqueue_styles(){

    wp_enqueue_style( 'tailwind-style', plugins_url( '/public/css/output_tailwind.css', __FILE__ ), array(), '1.0' );

}

add_action( 'wp_enqueue_scripts', 'plugin_enqueue_styles' );

$db_creator_file = plugin_dir_path( __FILE__ ) . 'jom-offerts/jom-db-creator.php';


if ( file_exists( $db_creator_file ) ) {
    require_once $db_creator_file;    
}


$admin_menu_file = plugin_dir_path(__FILE__) . 'admin/jom-admin-menu.php';


if ( file_exists( $admin_menu_file ) ) {
    require_once $admin_menu_file;
}


$user_view_shortcode = plugin_dir_path( __FILE__ ) . 'public/jom-user-view.php';

if ( file_exists( $user_view_shortcode)) {
    require_once $user_view_shortcode;
}



?>
