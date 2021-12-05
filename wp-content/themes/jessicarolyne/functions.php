<?php
require __DIR__ . '/vendor/autoload.php';
require_once TEMPLATEPATH . '/app/head-footer.php';


add_theme_support('menus');
register_nav_menu('menu-principal', 'Menu Principal');
register_nav_menu('menu-footer', 'Menu Footer');

?>