# Enabling Menu option in Customize Section

## Version 1 (v1)

Ths `functions.php` is given in **v1** folder

if we add below function in `functions.php`.

```ruby
<?php
// Theme Setup - navigation-menu
function gifton_theme_setup_nav_menu() {

     // Register navigation menu
     register_nav_menus(array(
        'primary' => __('Primary Menu', 'gifton-theme')
    ));
}
add_action('after_setup_theme', 'gifton_theme_setup_nav_menu');
?>
```

## output before above code

![Before our code](/images/before_menu_1.jpg)

## output After above code

![Before our code](/images/after_menu_1.jpg)
