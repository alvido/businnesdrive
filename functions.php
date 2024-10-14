<?php

include_once(dirname(__FILE__) . '/inc/acf-settings.php');
/**
 * businnesdrive functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package businnesdrive
 */

if (!defined('_S_VERSION')) {
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
function businnesdrive_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on businnesdrive, use a find and replace
	 * to change 'businnesdrive' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('businnesdrive', get_template_directory() . '/languages');

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
			'header-menu' => esc_html__('Primary', 'businnesdrive'),
			'footer-menu' => esc_html__('Footer', 'businnesdrive'),
			// 'language-menu' => esc_html__('Language', 'businnesdrive'),
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
			'businnesdrive_custom_background_args',
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
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'businnesdrive_setup');

// custom logo//
function businnesdrive_customize_logo_register($wp_customize)
{
	// Настройка для логотипа хедера
	$wp_customize->add_setting('header_logo');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
		'label' => __('Header Logo', 'businnesdrive'),
		'section' => 'title_tagline',
		'settings' => 'header_logo',
	)));

	// Настройка для логотипа футера
	$wp_customize->add_setting('footer_logo');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
		'label' => __('Footer Logo', 'businnesdrive'),
		'section' => 'title_tagline',
		'settings' => 'footer_logo',
	)));
}
add_action('customize_register', 'businnesdrive_customize_logo_register');
// custom logo//

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function businnesdrive_content_width()
{
	$GLOBALS['content_width'] = apply_filters('businnesdrive_content_width', 640);
}
add_action('after_setup_theme', 'businnesdrive_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function businnesdrive_widgets_init()
{
	// register_sidebar(
	// 	array(
	// 		'name' => esc_html__('Sidebar', 'businnesdrive'),
	// 		'id' => 'sidebar-1',
	// 		'description' => esc_html__('Add widgets here.', 'businnesdrive'),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget' => '</section>',
	// 		'before_title' => '<h2 class="widget-title">',
	// 		'after_title' => '</h2>',
	// 	)
	// );
	register_sidebar(array(
		'name' => __('Footer First  column', 'businnesdrive'),
		'id' => 'footer-1',
		'description' => __('Widgets for the footer', 'businnesdrive'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => ' </h4>',
	));
}
add_action('widgets_init', 'businnesdrive_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function businnesdrive_scripts()
{

	wp_enqueue_style('googleapis-style', 'https://fonts.googleapis.com');
	wp_enqueue_style('gstatic-style', 'https://fonts.gstatic.com');
	wp_enqueue_style('Inter-style', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap');

	wp_enqueue_style('select2-style', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css');
	wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11.1.4/swiper-bundle.min.css');
	wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/css/style.css');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script('select2-script', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array('jquery'), null, true);
	wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11.1.4/swiper-bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('crm-integration', get_stylesheet_directory_uri() . 'assets/js/crm-integration.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'businnesdrive_scripts');

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

// Отображение SVG
add_filter('upload_mimes', 'svg_upload_allow');
# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
	// WP 5.1 +
	if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
		$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
	} else {
		$dosvg = ('.svg' === strtolower(substr($filename, -4)));
	}
	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if ($dosvg) {
		// разрешим
		if (current_user_can('manage_options')) {
			$data['ext'] = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = false;
			$data['type'] = false;
		}
	}
	return $data;
}
// Отображение SVG


// Custom post
function create_custom_post_type()
{
	register_post_type(
		'news',
		array(
			'labels' => array(
				'name' => __('News'),
				'singular_name' => __('News'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
			'pll_the_language' => true, // Добавляем поддержку Polylang
		)
	);

	// register_post_type(
	// 	'quiz',
	// 	array(
	// 		'labels' => array(
	// 			'name' => __('Quiz'),
	// 			'singular_name' => __('Quiz'),
	// 		),
	// 		'public' => true,
	// 		'has_archive' => true,
	// 		'rewrite' => array('slug' => 'quiz'),
	// 		'show_in_rest' => true,
	// 		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	// 		'pll_the_language' => true, // Добавляем поддержку Polylang
	// 	)
	// );
}
add_action('init', 'create_custom_post_type');

// Custom post

function create_custom_taxonomy()
{
	$labels = array(
		'name' => __('Categories News', 'businnesdrive'), // Назва таксономії в адмінці
		'singular_name' => __('Category News', 'businnesdrive'), // Назва одного терміну
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true, // Це робить таксономію ієрархічною, схожою на категорії
		'rewrite' => array('slug' => 'news_category'), // Власний slug для URL
		'show_admin_column' => true, // Показувати колонку "Категорія" в адмінці
		'show_in_rest' => true,
		'pll_the_language' => true, // Добавляем поддержку Polylang
	);

	register_taxonomy('news_category', 'news', $args);
}

add_action('init', 'create_custom_taxonomy');

// отключение обертки <p> в Contact Gorm 7
add_filter('wpcf7_autop_or_not', '__return_false');
// отключение обертки <p> в Contact Gorm 7


add_filter('wpcf7_form_elements', function ($content) {
	// Удаляем <span class="wpcf7-form-control-wrap">
	$content = preg_replace('/<span class="wpcf7-form-control-wrap[^>]*>/', '', $content);
	// Удаляем закрывающий </span>
	$content = str_replace('</span>', '', $content);
	return $content;
});

add_filter('wpcf7_form_elements', function ($content) {
	// Заменяем aria-required="true" на required
	$content = str_replace('aria-required="true"', 'required', $content);
	return $content;
});


// Регистрация строки для перевода
function my_register_strings()
{
	pll_register_string('post_name', 'Новина', 'Theme Texts');
	pll_register_string('news_name', 'Стаття', 'Theme Texts');
	pll_register_string('see_more', 'Дізнатися більше', 'Theme Texts');
	pll_register_string('no_category', 'Без категорії', 'Theme Texts');
	pll_register_string('published', 'Опубліковано', 'Theme Texts');
	pll_register_string('privacy-policy', 'Політика конфіденційності:', 'Theme Texts');
	pll_register_string('terms-of-use', 'Умови використання:', 'Theme Texts');
	pll_register_string('legal-document', 'Юридичний документ', 'Theme Texts');
	pll_register_string('search', 'Пошук', 'Theme Texts');
	// pll_register_string('seatch-results', 'Пошук Результатів за:', 'businnesdrive');
	pll_register_string('Please choose an option', 'Please choose an option', 'Contact Form 7');
}
add_action('init', 'my_register_strings');

function register_strings_for_translation()
{
	if (function_exists('pll_register_string')) {
		pll_register_string('search_results_label', 'Пошук Результатів за:', 'Your Theme or Plugin Name');
	}
}
add_action('init', 'register_strings_for_translation');


add_filter('wpcf7_form_elements', function ($content) {
	$content = str_replace('Please choose an option', pll__('Please choose an option'), $content);
	return $content;
});
// Регистрация строки для перевода


function add_custom_query_vars($vars)
{
	$vars[] = 'paged_news';
	$vars[] = 'paged_posts';
	return $vars;
}
add_filter('query_vars', 'add_custom_query_vars');


function add_excerpt_to_pages()
{
	add_post_type_support('page', 'excerpt');
}
add_action('init', 'add_excerpt_to_pages');


//
function search_filter($query) {
    if ($query->is_search && !is_admin() && $query->is_main_query()) {
        // Ограничиваем поиск только кастомным типом постов 'games'
        $query->set('post_type', 'games');
    }
    return $query;
}
add_filter('pre_get_posts', 'search_filter');

//