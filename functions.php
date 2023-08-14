<?php

function load_css() {

  wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/styles.css', array(), false, 'all');
  wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_css');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )
);

add_image_size('blog-large', 9999, 400, false);
add_image_size('blog-small', 150, 150, true);

function my_sidebars(){

  register_sidebar(
    array(
      'name' => 'Page Sidebar',
      'id' => 'page-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'name' => 'Blog Sidebar',
      'id' => 'blog-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

}

add_action('widgets_init', 'my_sidebars')

?>