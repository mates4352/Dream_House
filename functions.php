<?php

define('THEME_ROOT' get_template_directory_uri());
define('IMAGES_DIR', THEME_ROOT . '../dist/assets/images');
define('LIBRARY_DIR',THEME_ROOT . '../dist/library/')
define('SCRIPT_DIR', THEME_ROOT . '../dist/js/')

require get_template_directory_uri() . '/function/style.php';
require get_template_directory_uri() . '/function/scripts.php';
require get_template_directory_uri() . '/function/menu.php';
