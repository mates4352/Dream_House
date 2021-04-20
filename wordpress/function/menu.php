<?php
add_action('after_setup_theme', 'nav_menu');

function nav_menu(){
	register_nav_menus([
		'header_menu' => 'Меню в шепке',
		'footer_menu' => 'Меню в подвале',
	]);
}

add_filter('nav_menu_item_id', 'header_item_id',10,4);
function header_item_id($menu_id, $item, $args, $depth){
	if($args -> theme_location === "header_menu"){
		return '';
	}
	
	else if ($args -> theme_location === "footer_menu"){
		return '';
	}else{
		return $menu_id;
	}
}

add_filter( 'nav_menu_css_class', 'header_item_class', 10, 4 );
function header_item_class( $classes, $item, $args, $depth ) {
	if ($args->theme_location === 'header_menu') {
		$classes = [
			 'header__item',
			 'header__item--' . ($depth + 1),
		];
	} 
	else if ($args -> theme_location === 'footer_menu'){
		$classes = [
			'footer__item',
			'footer__item--' . ($depth + 1),
	  ];
	}
	else {
		$classes = [];
	}

	return $classes;
}

add_filter('nav_menu_link_attributes', 'header_link_class',10,4);
function header_link_class($atts, $item, $args, $depth){
	if($args->theme_location === "header_menu")	{
		$atts['class'] = 'header__link';
	}

	else if ($args ->theme_location === "footer_menu"){
		$atts['class'] = 'footer__link';
	}

	return $atts;
}