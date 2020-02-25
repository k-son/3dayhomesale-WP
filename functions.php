<?php 
  function homesales_files() {
    wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css?family=Lato|Montserrat:400,500,700&display=swap', false);
    wp_enqueue_style('hamburger_menu_styles', get_theme_file_uri('/css/hamburgers.css'));
    wp_enqueue_style('blog_styles', get_theme_file_uri('/css/blog.css'));
    wp_enqueue_style('homesales_main_styles', get_stylesheet_uri());
    wp_enqueue_script('homesales_main_script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
  }

  add_action('wp_enqueue_scripts', 'homesales_files');

  function homesales_features() {
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'homesales_features')

?>