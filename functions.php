<?php

function syntra_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/syntra.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/syntra.js', array(), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'syntra_script_enqueue');

function syntra_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Menu');
	register_nav_menu('secondary', 'Footer Menu');

}
add_action('init', 'syntra_theme_setup');

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array( 'image', 'video', 'gallery' ));


function syntra_widget_setup() {

  register_sidebar(
    array(
      'name'  => 'Sidebar',
      'id'  => 'sidebar-1',
      'class' => 'custom',
      'description' => 'Standard Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    )
  );

}
add_action('widgets_init','syntra_widget_setup');

function syntra_custom_post_type (){

  $labels = array(
    'name' => 'Portfolio',
    'singular_name' => 'Portfolio',
    'add_new' => 'Add Item',
    'all_items' => 'All Items',
    'add_new_item' => 'Add Item',
    'edit_item' => 'Edit Item',
    'new_item' => 'New Item',
    'view_item' => 'View Item',
    'search_item' => 'Search Portfolio',
    'not_found' => 'No items found',
    'not_found_in_trash' => 'No items found in trash',
    'parent_item_colon' => 'Parent Item'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
    ),
    'menu_position' => 5,
    'exclude_from_search' => false
  );
  register_post_type('portfolio',$args);
}
add_action('init','syntra_custom_post_type');
