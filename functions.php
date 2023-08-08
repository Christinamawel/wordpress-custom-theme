<?php

function load_css() {

  wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/styles.css', array(), false, 'all');
  wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_css');

add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )
);

?>