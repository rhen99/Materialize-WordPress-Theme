<?php
require_once('class-materialize-navwalker.php');
//Function for loading the assets
function wp_importMyAssets(){
    wp_enqueue_style('materialize_styles', get_template_directory_uri().'/css/materialize.min.css');
    wp_enqueue_style('materialize_icons','//fonts.googleapis.com/icon?family=Material+Icons');

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery_script', get_template_directory_uri().'/js/jquery.js', [], null, true);
    wp_enqueue_script('materialize_script', get_template_directory_uri().'/js/materialize.min.js', [], null, true);
    wp_enqueue_script('script', get_template_directory_uri().'/js/main.js', [], null, true);
}
//Theme setup function
function wp_theme_setup(){
    register_nav_menus(['primary' => __('Primary Menu')]);

    add_theme_support('post-thumbnails');
}
// Init widgets function
function wp_init_widgets($id){

    register_sidebar([
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="center-align">',
        'after_title' => '</h5>'
    ]);
}

//Load all my assets
add_action('wp_enqueue_scripts', 'wp_importMyAssets');

//Load Theme Setup
add_action('after_setup_theme', 'wp_theme_setup');

//Load Widget Init
add_action('widgets_init', 'wp_init_widgets');