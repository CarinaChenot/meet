<?php

function add_assets() {
  wp_register_script('main_script', JS_URL . '/main.js', true);
  wp_enqueue_script('main_script');

  wp_register_style('main_font', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700');
  wp_enqueue_style('main_font');

  wp_register_style('main_style', CSS_URL . '/main.min.css');
  wp_enqueue_style('main_style');
}

add_action('wp_enqueue_scripts', 'add_assets');
