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
