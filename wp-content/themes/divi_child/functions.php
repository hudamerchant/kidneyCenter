<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',array() , $theme->parent()->get('Version'));
    wp_enqueue_style( 'child-style', get_stylesheet_uri().'?v=1',array( $parenthandle ) ,$theme->get('Version'));
    

    // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    // wp_enqueue_script('slick-js', get_stylesheet_directory_uri().'/js/slick.min.js');
    // wp_enqueue_script('child-script', get_stylesheet_directory_uri().'/js/script.js?v=1', 
    // ['jquery', 'slick-js']
    
    wp_enqueue_script('child-script', get_stylesheet_directory_uri().'/js/script.js?v=1');

}