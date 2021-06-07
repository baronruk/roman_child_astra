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
// load dependencies
function load_custom_files() {
	// load bootstrap css
    wp_register_style( 'bootstrap-css', get_stylesheet_directory_uri(). '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap-css' );
	// load child theme css
	wp_register_style('custom_css', get_stylesheet_directory_uri(). '/assets/css/custom.css');
	wp_enqueue_style('custom_css');
	// load bootstrap js
	wp_register_style('bootstrap-js', get_stylesheet_directory_uri(). '/assets/js/bootstrap.bundle.js');
	wp_enqueue_style('bootstrap-js');
	// load child theme js
	wp_register_style('custom_js', get_stylesheet_directory_uri(). '/assets/js/custom.js');
	wp_enqueue_style('custom_js');
}
add_action('wp_enqueue_scripts', 'load_custom_files', 10);

// hero section populate 
function custom_hero_section () { 
	?>
	<section class="hero">
            <div class="container">
                <div class="row h-100 justify-content-center align-items-center">
                  <div class="col-12 text-center">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>Web Developer</p>
                  </div>
                </div>
            </div>
        </section>
	<?php 
}
add_action('roman_home_function', 'custom_hero_section', 5);