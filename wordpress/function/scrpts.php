<?php
add_action('wp_enqueue_scripts',"script");
function script(){
	wp_deregister_script('jquery');
	wp_register_script('jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('magnific-popup', LIBRARY_DIR 'magnific-popup.min.js',array(jquery),'null',true);
	wp_enqueue_script('script',         SCRIPT_DIR  'app.js',               array(jquery),'null',true);
	wp_enqueue_script('swiper-bundle',  LIBRARY_DIR 'swiper-bundle.min.js', array(jquery),'null',true);
	wp_enqueue_script('swiper',         LIBRARY_DIR 'swiper.js',            array(jquery),'null',true);
}

