<?php
function morse_wp_template_register_menus()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'navbar' => __('Navbar Menu'),
        'footer' => __('Footer Menu')
    ));
}

add_action('init', 'morse_wp_template_register_menus');