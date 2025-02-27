<?php
// Theme Setup - register-navigation-menu
function gifton_theme_setup_rn_menu() {

     // Register navigation menu
     register_nav_menus(array(
        'primary' => __('Primary Menu', 'gifton-theme')
    ));
}
add_action('after_setup_theme', 'gifton_theme_setup_rn_menu');
?>