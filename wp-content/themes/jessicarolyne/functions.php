<?php
require __DIR__ . '/vendor/autoload.php';

session_start();

load_theme_textdomain('jessicarolyne', TEMPLATEPATH . '/languages');

$locale = get_locale();

$locale_file = TEMPLATEPATH . "/languages/$locale.php";

if(is_readable($locale_file)){
    require_once($locale_file);
}

date_default_timezone_set('America/Sao_Paulo');

add_image_size('thumbinail', 500, 620, true);
add_image_size('medium', 800, 600, true);
add_image_size('large', 1500, 500, true);

add_filter('use_block_editor_for_post', '__return_false', 10);

add_theme_support('post-thumbnails');
add_theme_support('menus');

add_post_type_support('page', 'excerpt');

register_nav_menu('menu-header', 'Menu Principal');
register_nav_menu('menu-footer', 'Menu Footer');

register_sidebar(array(
    'name' => 'Footer 1',
    'id' => 'footer1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
));


?>