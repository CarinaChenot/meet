<?php

function add_custom_type_single() {
  $post_type = 'single';

  $labels = array(
    'name'               => 'Célibataires',
    'singular_name'      => 'Célibataire',
    'all_items'          => 'Tous les célibataires',
    'add_new'            => 'Ajouter un célibataire',
    'add_new_item'       => 'Ajouter un nouveau célibataire',
    'edit_item'          => 'Modifier le célibataire',
    'new_item'           => 'Nouveau célibataire',
    'view_item'          => 'Voir le célibataire',
    'search_items'       => 'Find a model',
    'not_found'          => 'No result',
    'not_found_in_trash' => 'No result',
    'parent_item_colon'  => 'célibataire parent :',
    'menu_name'          => 'Célibataires',
  );

  $args = array(
    'labels'              => $labels,
    'hierarchical'        => false,
    'supports'            => array('title','thumbnail','editor', 'excerpt', 'revisions'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-heart',
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite'             => array( 'slug' => $post_type )
  );

  register_post_type($post_type, $args);
  // flush_rewrite_rules();

  $taxonomy = 'gender';
  $object_type = array('single');
  $args = array(
    'label' => __('Genre'),
    'rewrite' => array('slug' => 'gender'),
    'hierarchical' => false
  );

  register_taxonomy($taxonomy, $object_type, $args);
}

add_action('init', 'add_custom_type_single');
