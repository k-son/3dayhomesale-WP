<div class="blog__content">
  <h2 class="blog__post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php if (has_category()) { ?>
  <div class="blog__post__meta">
      <p>Posted by <span class="blog__post__meta__author"><?php the_author_posts_link(); ?></span> on <span class="blog__post__meta__time"><?php the_time('M j, Y'); ?></span> in <span class="blog__post__meta__category"><?php echo get_the_category_list(', '); ?></span></p>
  </div>
  <?php } ?>
  <div class="blog__archive__featured-image">
    <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) the_post_thumbnail(array(300, 300)); ?></a>   
  </div>
  <div class="blog__post__text">
    <?php the_excerpt(); ?>
    <p><a class="blog__post__continue-reading" href="<?php the_permalink(); ?>">Continue reading <span>&raquo;</span></a></p>
    <?php if (get_comments_number()) { ?>
      <a class="comments__blog-link" href="<?php echo (get_the_permalink() . '#comments'); ?>">View comments (<?php echo get_comments_number(); ?>) </a> 
    <?php } ?>
  </div>
</div>