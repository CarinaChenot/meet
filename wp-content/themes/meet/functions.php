<?php

define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('CSS_URL', THEME_URL . '/assets/css');
// define('IMG_URL', THEME_URL . '/assets/img');
define('JS_URL', THEME_URL . '/assets/js');

foreach (glob(THEME_PATH . '/inc/*.php') as $file) {
  include_once $file;
}
