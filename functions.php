<?php

function load_stylesheets()
{
    wp_register_style('normalize', get_template_directory_uri() . '/styles/normalize.css', array(), 1, 'all');
    wp_enqueue_style('normalize');

    wp_register_style('styles', get_template_directory_uri() . '/styles/styles.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@500&family=Josefin+Sans:wght@400;600&display=swap', false );
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function wpb_adding_scripts() {
    wp_register_script('my_amazing_script', get_template_directory_uri() . '/scripts/nav.js', array(),'1.0', false);
    wp_enqueue_script('my_amazing_script');
} 

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts', 999 ); 

add_theme_support('menus');

?>