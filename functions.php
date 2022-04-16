<?php

//adding functionality support
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}


function mn_register_nav_menus() {
    register_nav_menus(array(
        'main_menu' => __( 'Main Menu' ),
    ));
}

add_action( 'init', 'mn_register_nav_menus' );

?>
