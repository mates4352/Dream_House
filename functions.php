<?php

define('THEME_ROOT' get_template_directory_uri());
define('IMAGES_DIR', THEME_ROOT . '../dist/assets/images');
define('LIBRARY_DIR',THEME_ROOT . '../dist/library/')
define('SCRIPT_DIR', THEME_ROOT . '../dist/js/')

require get_template_directory_uri() . '/function/style.php';
require get_template_directory_uri() . '/function/scripts.php';
require get_template_directory_uri() . '/function/menu.php';

add_action('init','register_post_types');
function register_post_types(){
	add_theme_support('post-thumbnails') ;
	register_post_type('gallery',[
		'labels'                => [
			'name'              => 'Gallery',
			'singular_name'     => 'Gallery',
			'add_new'           => 'Добавить img',
			'all_items'         => 'Gallery',
			'add_new_item'      => 'Добавление img',
			'edit_item'         => 'Редоктирование Gallery',
			'new_item'          => 'Новый img',
			'view_item '        => 'Смотреть Gallery',
			'search_items'      => 'Искать img',
			'not_found'         => 'Не найдено',
			'not_found_in_trash'=> 'Не найдено в корзине',
			'menu_name'         => 'Gallery',
		],
		'public' => false,
		'show_ui'=>true,
		'menu_position'=> 100,
		'menu_icon'=>'dashicons-star-filled',
		'supports'=>['title','thumbnail'],
	]);
}