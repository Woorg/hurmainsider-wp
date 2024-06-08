<?php
/**
 * hurmaEducation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hurmaEducation
 */

if ( ! function_exists( 'hurma_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hurma_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hurmaEducation, use a find and replace
		 * to change 'hurma' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hurma', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'hurma' ),
			'menu-top' => esc_html__( 'Menu Top', 'hurma' ),
			'menu-2' => esc_html__( 'Secondary', 'hurma' ),
			'menu-3' => esc_html__( 'Secondary', 'hurma' ),
			'menu-4' => esc_html__( 'Secondary', 'hurma' ),
			'menu-5' => esc_html__( 'Secondary', 'hurma' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hurma_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'hurma_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hurma_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hurma_content_width', 640 );
}
add_action( 'after_setup_theme', 'hurma_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hurma_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hurma' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hurma' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hurma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hurma_scripts() {

	#bootstrap
	wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/assets/styles/bootstrap.min.css', array(),
		'', 'all' );

	#bootstrap-theme
	wp_enqueue_style( 'boostrap-theme', get_template_directory_uri() . '/assets/styles/bootstrap-theme.min.css', array(),
		'', 'all' );


	#bootstrap theme
	wp_enqueue_style( 'boostrap-reboot', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap-reboot.min.css', array(),
		'4.0.0-beta.3', 'all' );

	#font-awesome css
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendors/font-awesome/font-awesome.min.css', array(),
		'4.7.0', 'all' );


	#slick css
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendors/slick/slick.css', array(),
		'1.4', 'all' );

	#slick theme css
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/vendors/slick/slick-theme.css', array(),
		'1.4', 'all' );

	wp_enqueue_style( 'hurma-style', get_stylesheet_uri() );

	#app theme css
	wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/styles/app.min.css' );

	#modal style
	wp_enqueue_style( 'arcticmodal-css', get_template_directory_uri() . '/js/arcticmodal/jquery.arcticmodal-0.3.css' );
	wp_enqueue_style( 'arcticmodal-css-simple', get_template_directory_uri() . '/js/arcticmodal/themes/simple.css' );


	#maps
	wp_enqueue_script( 'map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCWvsMQjEMAx7tT2jnMykNF7_gAUpS3-g4',
		array( 'jquery' ), '1.4', true );

	#slick js
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/vendors/slick/slick.min.js',
		array( 'jquery' ), '1.4', true );


	#common js
	wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js',
		array( 'jquery' ), '1.0.0', true );

	#app js
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/scripts/app.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'hurma-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );


	wp_enqueue_script( 'hurma-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	#modal form
	wp_enqueue_script( 'arcticmodal-js', get_template_directory_uri() . '/js/arcticmodal/jquery.arcticmodal-0.3.min.js', array(), '1.0' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hurma_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Custom walker nav menu.
 */

require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


//----------------------------------------------------
// ACF Option Pages
//----------------------------------------------------
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Настройки темы',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'icon_url'      => 'dashicons-admin-settings',
		'redirect'	=> false
	));

//	acf_add_options_sub_page(array(
//		'page_title' 	=> 'Преимущества',
//		'menu_title'	=> 'Преимущества',
//		'menu_slug' 	=> 'theme-benefits',
//		'parent_slug'	=> 'theme-settings',
//		'capability'	=> 'edit_posts',
//		'redirect'	=> false
//	));

}



define('WPCF7_LOAD_JS', false);
define('WPCF7_LOAD_CSS', false);


add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});


add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});


	 /*
	    Remove width & height wordpress
	*/

	function remove_img_attributes( $html ) {
		$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
		return $html;
	}
	add_filter( 'post_thumbnail_html', 'remove_img_attributes', 10 );
	add_filter( 'image_send_to_editor', 'remove_img_attributes', 10 );



	/**
		*  Allow SVG
		*
	*/

    add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

        global $wp_version;

        if ( $wp_version !== '4.7.1' ) {
            return $data;
        }

        $filetype = wp_check_filetype( $filename, $mimes );

        return [
            'ext'             => $filetype['ext'],
            'type'            => $filetype['type'],
            'proper_filename' => $data['proper_filename']
        ];

    }, 10, 4 );

    function webjeb_mime_types( $mimes ){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter( 'upload_mimes', 'webjeb_mime_types' );

    function fix_svg() {
        echo '<style type="text/css">
            .attachment-266x266, .thumbnail img {
                width: 100% !important;
                height: auto !important;
            }
            </style>';
    }
    add_action( 'admin_head', 'fix_svg' );
