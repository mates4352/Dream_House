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

function getGallery(){
	$args = array(
		'orderby'     => 'date',
		'order'       => 'DESC',
		'numberposts' => '-1',
		'post_type'   => 'gallery',
	);
	$gallerys =[];

	foreach(get_posts($args) as $post){

		$gallery['img'] = get_the_post_thumbnail_url($post->ID,'post-thumbnail');

		$gallery['title'] = $post ->post_title;
		$gallery['text'] = $post -> post_content;

		$gallerys[] = $gallery;
	}
	return $gallerys;
}
