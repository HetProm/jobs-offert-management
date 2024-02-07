<?php
// Funkcja dodająca menu w panelu bocznym kokpitu
function jom_plugin_menu() {
    // Dodaj menu
    add_menu_page(
        'Jobs offert management',   // Tytuł menu
        'Jobs offert management',          // Tekst menu w panelu bocznym
        'manage_options',         // Uprawnienia wymagane do zobaczenia menu
        'jom-menu',              // Unikalny identyfikator menu
        'callback_function',      // Funkcja wywoływana po kliknięciu menu
        'dashicons-admin-generic' // Ikona menu (opcjonalnie)
    );
}
// Dodaj hook akcji, aby funkcja została uruchomiona podczas inicjalizacji panelu administracyjnego
add_action('admin_menu', 'jom_plugin_menu');

// Funkcja callback wywoływana po kliknięciu menu
function callback_function() {
    // Tutaj możesz dodać treść, która zostanie wyświetlona po kliknięciu na menu
    echo '<div class="wrap"><h1>Witaj w Panelu Wtyczki!</h1><p>To jest treść twojego panelu wtyczki.</p></div>';
}
