<?php

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Function to add the CSS and JS files
function menu_kschool_scripts() {
    wp_enqueue_style('menu_kschool_style', get_stylesheet_uri());
    wp_enqueue_script('menu_kschool_script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'menu_kschool_scripts');

// Function to register navigation menus
function add_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'menu_kschool')
    ));
}
add_action('init', 'add_menus');

// Disable Gutemberg for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// Disable Gutemberg for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

require_once get_stylesheet_directory() . '/shortcode/menu.php';

// Add logo to admin
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );