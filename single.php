<?php 
get_header(); 
while(have_posts()) {
  the_post();
?>

<div class="">
  <h2><?php the_title(); ?></h2>
  <div class="">
    <p>Posted by <?php the_author_posts_link();?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
  </div>
  <div class="">
    <?php the_content(); ?>
  </div>
</div>

<?php }
 get_footer(); ?>