<?php
// Theme Setup - register-navigation-menu
function myTM_theme_setup_rn_menu() {

     // Register navigation menu
     register_nav_menus(array(
        'primary' => __('Primary Menu', 'myTM-theme')
    ));
}
add_action('after_setup_theme', 'myTM_theme_setup_rn_menu');
?>