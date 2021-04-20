<?php
add_action('wp_enqueue_scripts',"style");
function style(){
	wp_enqueue_style('style',get_stylesheet_uri());
}
