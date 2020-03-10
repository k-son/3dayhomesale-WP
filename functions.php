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


  function redirectSubsToFrontend() {
    $ourCurrentUser = wp_get_current_user();
    if (count($ourCurrentUser->roles) == 1 && $ourCurrentUser->roles[0] == 'subscriber') {
      wp_redirect(site_url('/'));
      exit;
    }
  }

  add_action('admin_init', 'redirectSubsToFrontend');


  function noSubsAdminBar() {
    $ourCurrentUser = wp_get_current_user();
    if (count($ourCurrentUser->roles) == 1 && $ourCurrentUser->roles[0] == 'subscriber') {
      show_admin_bar(false);
    }
  }

  add_action('wp_loaded', 'noSubsAdminBar');


  /// Customize login screen

  function ourLoginCSS() {
    wp_enqueue_style('blog_styles', get_theme_file_uri('/css/blog.css'));
    wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css?family=Lato|Montserrat:400,500,700&display=swap', false);
  }

  add_action('login_enqueue_scripts', 'ourLoginCSS');


  function ourHeaderUrl() {
    return esc_url(site_url('/'));
  }

  add_filter('login_headerurl', 'ourHeaderUrl');


  function ourLoginTitle() {
    return get_bloginfo('name');
  }

  add_filter('login_headertitle', 'ourLoginTitle');
?>