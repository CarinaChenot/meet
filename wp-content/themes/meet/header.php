<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <a class="header-logo" href="<?php bloginfo('url'); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/meet_logo.svg">
      <?php bloginfo('name'); ?>
    </a>
    <nav class="main-nav">
      <a href="" class="nav-link">Découvrir</a>
    </nav>
  </header>
  <section class="hero">
  <img src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?dpr=1&auto=format&fit=crop&w=2250&q=60&cs=tinysrgb" alt="">
  </section>
