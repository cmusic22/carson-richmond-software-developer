<?php
//adds style sheets to head file
function load_stylesheets() {
	//adds bootsrtap css
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');
	

	//adds personal style sheet
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');
//add jquery to footer
function include_jquery() {
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
	add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

//adds scripts to the footer (true)
function loadjs(){
	wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


//add theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');


//menu support
register_nav_menus( 
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),

)
);

//image support
add_image_size('smallest', 300, 200, true);
add_image_size('largest', 800, 700, true);

