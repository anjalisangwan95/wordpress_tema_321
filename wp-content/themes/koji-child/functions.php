<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}


function wpb_adding_scripts() {
  wp_register_script('script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'),'1.1', true);
  wp_enqueue_script('script');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );


