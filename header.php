<?php wp_head();?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <div class="navbar">
      <nav class="nav">
        <div>
          <a href="<?php echo site_url('/index.php'); ?>" class="nav__logo">
            <span class="nav__logo__svg-box">
              <svg class="nav__logo__svg orange-color" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
              </svg>
            </span>
            <h1 class="nav__logo__txt">
              <span class="orange-color">3day</span>
              <span>homesale</span>
            </h1>
          </a>
        </div>
        <ul class="nav__list">
          <li class="nav__list__item"><a href="<?php echo site_url('/index.php/'); ?>" class="nav__list__link">Home</a></li>
          <li class="nav__list__item"><a href="<?php echo site_url('/index.php/#whoarewe'); ?>" class="nav__list__link">Who are we</a></li>
          <li class="nav__list__item"><a href="<?php echo site_url('/index.php/#howitworks'); ?>" class="nav__list__link">How it works</a></li>
          <li class="nav__list__item"><a href="<?php echo site_url('/blog'); ?>" class="nav__list__link">Blog</a></li>
          <li class="nav__list__item"><a href="<?php echo site_url('/courses'); ?>" class="nav__list__link">We Educate</a></li>
        </ul>
        <button class="hamburger hamburger--collapse" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </nav>
    </div>