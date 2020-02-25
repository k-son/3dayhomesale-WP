<?php 
  get_header(); 
  while(have_posts()) {
    the_post();
  ?>

<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1"><?php the_title(); ?></h1>
    </div>
  </header>
  <div class="blog__content page__content">
    <div class="blog__post__text">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php 
  }
  get_footer(); ?>