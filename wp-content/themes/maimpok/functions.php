<?php

define('PADD_THEME_NAME','Maimpok');
define('PADD_THEME_VERS','1.0');
define('PADD_THEME_SLUG','maimpok');
define('PADD_GALL_THUMB_W',660);
define('PADD_GALL_THUMB_H',281);
define('PADD_HOME_THUMB_W',115);
define('PADD_HOME_THUMB_H',115);

define('PADD_THEME_PATH',get_theme_root() . DIRECTORY_SEPARATOR . PADD_THEME_SLUG);
define('PADD_FUNCT_PATH',PADD_THEME_PATH . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR);

automatic_feed_links();
remove_action('wp_head','wp_generator');
remove_action('wp_print_styles','pagenavi_stylesheets');

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><span>',
		'after_title' => '</span></h2><div class="box-interior"><div class="box-interior-wrapper">',
	));
}

require PADD_FUNCT_PATH . 'library.php';

require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'socialnetwork.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'advertisement.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'widgets.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-option.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-socialnetwork.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-advertisement.php';

require PADD_FUNCT_PATH . 'defaults.php';

require PADD_FUNCT_PATH . 'administration' . DIRECTORY_SEPARATOR . 'functions.php';










