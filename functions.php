<?php
add_action( 'init', 'mn_create_posttypes' );
add_filter( 'the_excerpt', 'mn_excerpt_shortener');

function mn_excerpt_shortener( $content ){
    if( strlen( $content ) > 60 ){
        $content = substr( $content, 0, 60).'.....';
        return $content;
    }
    else{
        return $content;
    }
}

function mn_create_posttypes() {
    add_theme_support('post-thumbnails');
    add_post_type_support( 'products', 'thumbnail' );
    add_post_type_support( 'services', 'thumbnail' );
    add_post_type_support( 'reviews', 'thumbnail' );

    //products
    register_post_type( 'products',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
            'public' => true,
            'hierarchical' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,

        )
    );

    //services
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
            'public' => true,
            'hierarchical' => false,
            'capability_type' => 'post',
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,

        )
    );

    //reviews
    /*
    register_post_type( 'reviews',
        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'Review' )
            ),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'reviews'),
            'show_in_rest' => true,

        )
    );
    */
}

?>
