<?php

add_action('after_setup_theme', 'thumbnails_theme_support');

function thumbnails_theme_support() {
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'create_image_size');

function create_image_size() {
  add_image_size('hub_single_thumbnail', 350, 140, true);
  add_image_size('hub_carousel_thumbnail', 200, 200, true);
}
