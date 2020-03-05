<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1"><?php if (is_category()) { ?>
        <span class="orange-color"><?php single_cat_title(); ?></span>
    <?php } if (is_author()) {
        echo 'Posts by '; ?><span class="orange-color"><?php the_author();
      } ?></h1>
      <h3 class="blog__h3"><?php the_archive_description(); ?></h3>
      <a class="blog__back-to-blog" href="<?php echo site_url('/blog'); ?>">&larr; blog</a>
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
