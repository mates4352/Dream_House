<?php
add_action('wp_enqueue_scripts',"style");
add_action('wp_enqueue_scripts',"script");

function style(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

function script(){
	wp_deregister_script('jquery');
	wp_register_script('jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/dist/library/magnific-popup.min.js',array(jquery),'null',true);
	wp_enqueue_script('script', get_template_directory_uri() . '/dist/js/app.js',array(jquery),'null',true);
	wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/dist/library/swiper-bundle.min.js',array(jquery),'null',true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/dist/library/swiper.js',array(jquery),'null',true);
}