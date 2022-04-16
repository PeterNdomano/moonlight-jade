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
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,

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
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,

        )
    );

    //reviews
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
}

?>
