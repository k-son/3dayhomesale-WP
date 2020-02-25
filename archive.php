<?php 
  get_header(); 
  ?>

<header class="blog__welcome">
  <div class="blog__welcome__txt-box">
    <h1 class="blog__h1"><?php if (is_category()) { ?>
      <span class="orange-color"><?php single_cat_title(); ?></span>
   <?php } if (is_author()) {
      echo 'Posts by '; ?><span class="orange-color"><?php the_author();
    } ?></h1>
    <h3 class="blog__h3"><?php the_archive_description(); ?></h3>
    <a class="blog__back-to-blog" href="/blog">&larr; blog</a>
  </div>
</header>

<main class="blog__main">
<?php 
  while (have_posts()) {
    the_post();
    ?>
    <div class="blog__content">
      <h2 class="blog__post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="blog__post__meta">
        <p>Posted by <span class="blog__post__meta__author"><?php the_author_posts_link();?></span> on <span class="blog__post__meta__time"><?php the_time('M j, Y'); ?></span> in <span class="blog__post__meta__category"><?php echo get_the_category_list(', '); ?></span></p>
      </div>
      <div class="blog__post__excerpt">
        <?php the_excerpt(); ?>
        <p><a class="blog__post__continue-reading" href="<?php the_permalink(); ?>">Continue reading <span>&raquo;</span></a></p>
      </div>
    </div>
    <?php } ?>
    <div class="pagination">
    <?php echo paginate_links(); ?>
    </div>
  </main>

<?php get_footer(); ?>