<?php

/**
 * craftsales functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package craftsales
 */

 $hp_dir = "template-parts";
 $hp_path = get_template_directory_uri() . "/" . $hp_dir;

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
function cs_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on craftsales, use a find and replace
		* to change 'cs' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('cs', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'cs'),
			'global' => 'グローバル',
			'side'   => 'サイド',
			'footer' => 'フッター'
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
			'cs_custom_background_args',
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
add_action('after_setup_theme', 'cs_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cs_content_width()
{
	$GLOBALS['content_width'] = apply_filters('cs_content_width', 640);
}
add_action('after_setup_theme', 'cs_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cs_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'cs'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'cs'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'cs_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function cs_scripts()
{
	wp_enqueue_style('cs-style', get_stylesheet_uri(), array(), _S_VERSION);
	/*
	もともと入っていたJS入らないので削除して、代わりに安西君がコーディングしたファイルを読み込むように変更
	同じ要領で残りのJSも読み込んでみて下さい。
	『WP　JS読み込み』とか検索すればいいでしょう。
	wp_enqueue_script( 'cs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	*/
	wp_enqueue_script('cs-jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), _S_VERSION);
	wp_enqueue_script('cs-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'cs_scripts');

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

function create_post_type_news(){
 register_post_type( 
  'news',
  array(
   'labels' => array(
    'name' => 'NEWS'
   ),
   'public' => true,
   'has_archive' => true,
   'supports' => array('title','editor','thumbnail','author'),
   'show_in_rest' => true,
  )
 );
}
add_action( 'init', 'create_post_type_news' );

//TOPページに3件記載するショートコード
function shortcode_news_list() {
 global $post;
 $args = array(
  'posts_per_page' => 3,  // 一覧に表示させる件数
  'post_type' => 'news',  // お知らせのスラッグ
  'post_status' => 'publish'
 );
 $the_query = new WP_Query( $args );
 $html = ''; // ← ここで初期化！
 // お知らせ一覧用HTMLコード作成
 if ( $the_query->have_posts() ) {
  $html .= '<ul>';
  while ( $the_query->have_posts() ) :
  $the_query->the_post();
  $url = get_permalink();
  $title = get_the_title();
  $date = get_the_date('Y/m/d');
  $html .= '<li>';
  $html .= '<a href="'.$url.'">';
  $html .= '<p class="news_date">'.$date.'</p>';
  $html .= '<h3 class="news_title">'.$title.'</h3>';
  $html .= '</a></li>';
  endwhile;
  $html .= '</ul>';
  wp_reset_postdata(); // ← クエリのリセットも忘れずに
 }
 return $html;
}
add_shortcode("news_list", "shortcode_news_list");

//NEWSページに全件記載するショートコード
function shortcode_news_list_all() {
    global $post;

    // 現在のページ番号を取得（クエリ変数 'paged' を参照）
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // WP_Query パラメータ
    $args = array(
        'posts_per_page' => 10,       // 1ページに表示する件数
        'post_type' => 'news',        // 投稿タイプ
        'post_status' => 'publish',
        'paged' => $paged             // ページネーション対応
    );
    $the_query = new WP_Query($args);

    $html = '';

    if ($the_query->have_posts()) {
        $html .= '<ul class="news-list">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $url = get_permalink();
            $title = get_the_title();
            $date = get_the_date('Y/m/d');
            $html .= '<li>';
            $html .= '<a href="'.$url.'">';
            $html .= '<p class="news_date">'.$date.'</p>';
            $html .= '<h3 class="news_title">'.$title.'</h3>';
            $html .= '</a></li>';
        }
        $html .= '</ul>';

        // ページネーション表示
        $big = 999999999; // 必須：仮の大きな数値
        $html .= paginate_links(array(
            'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'  => '?paged=%#%',
            'current' => max(1, $paged),
            'total'   => $the_query->max_num_pages,
            'type'    => 'list',
            'prev_text' => '« 前へ',
            'next_text' => '次へ »'
        ));

        wp_reset_postdata();
    }

    return $html;
}
add_shortcode("news_list_all", "shortcode_news_list_all");

// "news" 投稿タイプにもテンプレート選択メタボックスを表示する
add_action('add_meta_boxes', 'add_template_to_news_post_type');
function add_template_to_news_post_type() {
    add_meta_box(
        'pageparentdiv',               // メタボックスID（固定ページと同じでOK）
        __('Template'),                // 表示タイトル
        'post_parent_meta_box',        // 中身の関数（WordPressコアのテンプレート選択）
        'news',                        // 対象の投稿タイプ ← ここを"news"に
        'side',
        'core'
    );
}