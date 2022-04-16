<?php

//adding functionality support
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}


function mn_register_nav_menus() {
    register_nav_menus(array(
        'home' => __( 'Home navigation' ),
        'blog' => __( 'Blog navigation' ),
        'products' => __( 'Products page navigation' ),
        'services' => __( 'Services page navigation' ),
        'more_pages' => __( 'List of all other pages' ),
    ));
}

add_action( 'init', 'mn_register_nav_menus' );

?>
