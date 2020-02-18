<?php

function custom_post_types() {

  // Apartment post type
  register_post_type('apartment', array(
    'supports' => array('thumbnail'),
    'rewrite' => array('slug' => 'apartments'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Apartments',
      'add_new_item' => 'Add New Apartment',
      'edit_item' => 'Edit Apartment',
      'all_items' => 'All Apartments',
      'singular_name' => 'Apartment'
    ),
    'menu_icon' => 'dashicons-building'
  ));

}

add_action('init', 'custom_post_types');