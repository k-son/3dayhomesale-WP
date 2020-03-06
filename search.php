<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1">Search results for: <span class="orange-color"><?php the_search_query(); ?></span></h1>
      <h3 class="blog__h3"><?php the_archive_description(); ?></h3>
    </div>
  </header>

  <main class="blog__main">
  <?php 
    while (have_posts()) {
      the_post();
      get_template_part('template-parts/blog', 'entry');
    } ?>
      <div class="pagination">
      <?php echo paginate_links(); ?>
      </div>
    </main>
  </div>
  <?php get_footer(); ?>
