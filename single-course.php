<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1"><?php the_title(); ?></h1>
      <a class="blog__back-to-blog" href="<?php echo get_post_type_archive_link('course'); ?>">&larr; All events</a>
    </div>
  </header>

  <main class="blog__main" style="margin-top: 2rem;">
  <?php 
    while (have_posts()) {
    the_post();
  ?>
    <div class="blog__content">
      <div class="blog__post__meta" style="margin-bottom: 6rem;">
      <div class="course__date--single-course">
        <p class="course__date--single-course__para">
          <?php $courseDate = new DateTime(get_field('course_date', false, false));
            echo $courseDate-> format('F d, Y ');
          ?>
        </p>
      </div>
      </div>
      <div class="blog__post__text">
        <?php the_content(); ?>
      </div>
    </div>
    <?php } ?>
  </main>

</div>
<?php get_footer(); ?>