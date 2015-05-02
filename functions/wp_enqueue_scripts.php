<?php

add_action('wp_enqueue_scripts', 'enqueue');
function enqueue(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');

	//Bootstrap
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', NULL, '3.3.4');

	//Fancybox
	wp_register_script('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.js', NULL, '2.1.4');

	//Sticky (menu)
	wp_register_script('sticky', get_stylesheet_directory_uri().'/js/jquery.sticky.js');

	//Theme Functions
	wp_register_script('functions', get_stylesheet_directory_uri() . '/js/functions.js', NULL, NULL);

//enqueue scripts
	wp_enqueue_script(array('jquery','bootstrap','fancybox2','sticky','functions'));

	//styles
	//Bootstrap Core CSS
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', NULL, '3.3.4');

	//Custom Fonts
	//wp_register_style('font-awesome', get_stylesheet_directory_uri().'/font-awesome/css/font-awesome.min.css');

	wp_register_style('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.css', NULL, '2.1.4');

	//Theme stylesheet
	wp_register_style('styles', get_stylesheet_directory_uri().'/style.css', NULL, NULL);


//enqueue styles
	wp_enqueue_style(array('bootstrap','fancybox2','styles'));


}

//home
if (is_home() || is_front_page()){
	wp_register_script('slider', get_stylesheet_directory_uri() . '/js/slides.js', array('jquery'),'1.0' );
	wp_enqueue_script('slider');

	wp_register_script('ease', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'),'1.3' );
	wp_enqueue_script('ease');
}