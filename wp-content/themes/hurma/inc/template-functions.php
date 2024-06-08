<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package hurmaEducation
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hurma_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'hurma_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function hurma_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'hurma_pingback_header' );


//----------------------------------------------------
// Courses Post Type
//----------------------------------------------------
add_action('init', 'register_post_types');

function register_post_types(){

	register_post_type('courses', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Курсы', // основное название для типа записи
			'singular_name'      => 'Курс', // название для одной записи этого типа
			'add_new'            => 'Добавить курс', // для добавления новой записи
			'add_new_item'       => 'Добавление курса', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование курса', // для редактирования типа записи
			'new_item'           => 'Новый курс', // текст новой записи
			'view_item'          => 'Смотреть курс', // для просмотра записи этого типа.
			'search_items'       => 'Искать курс', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Курсы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_ui'             => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'menu_position'       => 8,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail', 'excerpt', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

}

/*-------------------------------------------------------------------------
** Taxonomy
-------------------------------------------------------------------------*/
//add_action('init', 'create_taxonomy');

function create_taxonomy(){

	register_taxonomy('catalog-category', array('catalog'), array(
		'label'     => '', // определяется параметром $labels->name
		'labels'    => array(
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Поиск категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Имя новой категории',
			'menu_name'         => 'Категории',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );

}