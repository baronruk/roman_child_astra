<?php
/**
 * Astra Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function load_custom_files() {
	// load child theme css
	wp_register_style('custom_css', get_stylesheet_directory_url(). '/assets/css/custom.css');
	wp_enqueue_style('custom_css');
	// Add bootstrap css
    wp_register_style( 'bootstrap-css', get_stylesheet_directory_url(). '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap-css' );
	// load child theme js
	wp_register_style('custom_js', get_stylesheet_directory_url(). '/assets/js/custom.js');
	wp_enqueue_style('custom_js');
	// add bootstrap js
	wp_register_style('bootstrap-js', get_stylesheet_directory_url(). '/assets/js/bootstrap.bundle.js');
	wp_enqueue_style('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'load_custom_files', 10);

