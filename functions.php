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
    add_theme_support('post-thumbnails');
    add_image_size('instructorPortrait', 260, 400, true);
    add_image_size('instructorEvent', 300, 200, true);
    add_image_size('instructorBanner', 1500, 200, true);
  }

  add_action('after_setup_theme', 'homesales_features');
/*
  function homesales_adjust_query($query) {

    // Handled by queries in archive-course.php and page-past-courses.php
    if (!is_admin() && is_post_type_archive('course') && $query->is_main_query()) {
      $today = date('F d, Y ');
      $query -> set('meta_key', 'course_date');
      $query -> set('orderby', 'meta_value_num');
      $query -> set('order', 'ASC');
      $query -> set('meta_query', array(
        array(
          'key' => 'course_date',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numeric'
        )
        ));
    }
  }

  add_action('pre_get_posts', 'homesales_adjust_query');
  */
?>