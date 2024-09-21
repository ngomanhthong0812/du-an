<?php

/**
 * thongdev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thongdev
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function theme_enqueue_styles()
{
	// Bootstrap CSS
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	//main CSS file
	wp_enqueue_style('main-styles-custom', get_template_directory_uri() . '/custom.css');
	// Bootstrap JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function web_com_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on thongdev, use a find and replace
		* to change 'web-com' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('web-com', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'web-com'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'web_com_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'web_com_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function web_com_content_width()
{
	$GLOBALS['content_width'] = apply_filters('web_com_content_width', 640);
}
add_action('after_setup_theme', 'web_com_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function web_com_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'web-com'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'web-com'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'web_com_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function web_com_scripts()
{
	wp_enqueue_style('web-com-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('web-com-style', 'rtl', 'replace');

	wp_enqueue_script('web-com-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'web_com_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


add_post_type_support('page', 'excerpt');


function quy_trinh()
{
	$label = array(
		'01' => 'TIẾP NHẬN THÔNG TIN TƯ VẤN SƠ BỘ',
		'02' => 'TIẾN HÀNH KHẢO SÁT ĐỊA ĐIỂM',
		'03' => 'LÊN PHƯƠNG ÁN THIẾT KẾ CƠ SỞ THEO THÔNG TIN KHÁCH HÀNG',
		'04' => 'KÝ HỢP ĐỒNG',
		'05' => 'HỖ TRỢ CHỈNH SỬA PHƯƠNG ÁN THEO YÊU CẦU KHÁCH HÀNG',
		'06' => 'LÊN PHỐI CẢNH MẶT TIỀN',
		'07' => 'BÀN GIAO HỒ SƠ THIẾT KẾ THI CÔNG',
		'08' => 'BÀN GIAO VÀ GIÁM SÁT QUYỀN TÁC GIẢ',
	);
	foreach ($label as $keys => $value) { ?>
		<div class="col-3">
			<span><?php echo $keys ?></span>
			<p><?php echo $value ?></p>
		</div>
<?php
	}
}

function tao_custom_post_type_du_an()
{
	$labels = array(
		'name'               => _x('Dự án', 'Post Type General Name', 'text_domain'),
		'singular_name'      => _x('Dự án', 'Post Type Singular Name', 'text_domain'),
		'menu_name'          => __('Dự án', 'text_domain'),
		'name_admin_bar'     => __('Dự án', 'text_domain'),
		'archives'           => __('Lưu trữ dự án', 'text_domain'),
		'attributes'         => __('Thuộc tính dự án', 'text_domain'),
		'parent_item_colon'  => __('Dự án cha:', 'text_domain'),
		'all_items'          => __('Tất cả dự án', 'text_domain'),
		'add_new_item'       => __('Thêm mới dự án', 'text_domain'),
		'add_new'            => __('Thêm dự án', 'text_domain'),
		'new_item'           => __('Dự án mới', 'text_domain'),
		'edit_item'          => __('Chỉnh sửa dự án', 'text_domain'),
		'update_item'        => __('Cập nhật dự án', 'text_domain'),
		'view_item'          => __('Xem dự án', 'text_domain'),
		'view_items'         => __('Xem các dự án', 'text_domain'),
		'search_items'       => __('Tìm kiếm dự án', 'text_domain'),
		'not_found'          => __('Không tìm thấy', 'text_domain'),
		'not_found_in_trash' => __('Không tìm thấy trong thùng rác', 'text_domain'),
	);

	$args = array(
		'label'              => __('Dự án', 'text_domain'),
		'description'        => __('Chứa các dự án của bạn', 'text_domain'),
		'labels'             => $labels,
		'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions'),
		'hierarchical'       => false,
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_position'      => 5,
		'show_in_admin_bar'  => true,
		'show_in_nav_menus'  => true,
		'can_export'         => true,
		'has_archive'        => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-portfolio', // Biểu tượng trên menu quản trị
		'rewrite'            => array('slug' => 'du-an'), // Đường dẫn cho custom post type
	);

	register_post_type('du-an', $args);
}

add_action('init', 'tao_custom_post_type_du_an', 0);


function tao_taxonomy_danh_muc_du_an()
{
	$labels = array(
		'name'              => _x('Danh mục dự án', 'taxonomy general name', 'text_domain'),
		'singular_name'     => _x('Danh mục dự án', 'taxonomy singular name', 'text_domain'),
		'search_items'      => __('Tìm kiếm danh mục dự án', 'text_domain'),
		'all_items'         => __('Tất cả danh mục dự án', 'text_domain'),
		'parent_item'       => __('Danh mục dự án cha', 'text_domain'),
		'parent_item_colon' => __('Danh mục dự án cha:', 'text_domain'),
		'edit_item'         => __('Chỉnh sửa danh mục dự án', 'text_domain'),
		'update_item'       => __('Cập nhật danh mục dự án', 'text_domain'),
		'add_new_item'      => __('Thêm mới danh mục dự án', 'text_domain'),
		'new_item_name'     => __('Tên danh mục dự án mới', 'text_domain'),
		'menu_name'         => __('Danh mục dự án', 'text_domain'),
	);

	$args = array(
		'hierarchical'      => true, // Cho phép phân cấp như categories
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'danh-muc-du-an'),
	);

	register_taxonomy('danh-muc-du-an', array('du-an'), $args);
}

add_action('init', 'tao_taxonomy_danh_muc_du_an', 0);


function my_theme_archive_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	}

	return $title;
}

add_filter('get_the_archive_title', 'my_theme_archive_title');


function devtest()
{
	echo '<h1>XIn chao </h1>';
}
add_shortcode('dev-test', 'devtest');
