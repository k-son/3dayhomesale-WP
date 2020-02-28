<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1"><?php the_title(); ?></h1>
      <a class="blog__back-to-blog" href="<?php echo site_url('/blog'); ?>">&larr; blog</a>
    </div>
  </header>

  <main class="blog__main" style="margin-top: 2rem;">
  <?php 
    while (have_posts()) {
    the_post();
  ?>
    <div class="blog__content">
      <div class="blog__post__meta" style="margin-bottom: 6rem;">
        <p>Posted by <span class="blog__post__meta__author"><?php the_author_posts_link();?></span> on <span class="blog__post__meta__time"><?php the_time('M j, Y'); ?></span> in <span class="blog__post__meta__category"><?php echo get_the_category_list(', '); ?></span></p>
      </div>
      <div class="blog__post__featured-image">
        <?php if (has_post_thumbnail()) the_post_thumbnail(array(600, 400)); ?>
      </div>
      <div class="blog__post__text">
        <?php the_content(); ?>
      </div>
    </div>
    <?php } ?>
    <div class="blog__more-posts">
      <div class="blog__previous-post">
          <?php
            previous_post_link('%link', '« %title' ,false); ?>
      </div>
      <div class="blog__next-post">
          <?php next_post_link('%link', '%title »', false); ?>
      </div>
    </div>
  </main>

</div>
<?php get_footer(); ?>