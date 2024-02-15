<?php
defined( 'ABSPATH' ) || exit;
// Function adding a menu in the sidebar of the dashboard:
function jom_plugin_menu() {
    
    add_menu_page(
        'Jobs offert management',   
        'Jobs offert management',          
        'manage_options',         
        'jom-menu',              
        'callback_function',      
        'dashicons-admin-generic' 
    );
}

add_action('admin_menu', 'jom_plugin_menu');


function callback_function() {
    
    echo '<div class="wrap"><h1>Witaj w Panelu Wtyczki!</h1><p>To jest treść twojego panelu wtyczki.</p></div>';
}
