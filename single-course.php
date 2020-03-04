<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1"><?php the_title(); ?></h1>
      <h2 class="blog__h2"><?php echo get_field('slogan'); ?></h2>
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
      <div class="course__address">
        <p><?php echo get_field('venue_address'); ?></p>
      </div>
      </div>

      <div class="blog__post__text">
        <?php the_content(); ?>
      </div>
    <?php 
      $relatedInstructors = get_field('instructor');
      echo '<hr class="horizontal-rule">';
      echo '<h2 class="course__instructors__h2">Our instructor(s) will be:</h2>';
      echo '<ul class="course__instructors__list">';
      if ($relatedInstructors) {
        foreach($relatedInstructors as $instructor) { ?>
          <li class="course__instructor">
            <a class="course__instructor__link" href="<?php echo get_the_permalink($instructor); ?>">
              <img class="course__instructor__image" src="<?php echo get_the_post_thumbnail_url($instructor, 'instructorEvent'); ?>">
              <span class="course__instructor__name"><?php echo get_the_title($instructor); ?></span>
            </a>
          </li>
      <?php }
        echo '</ul>';
      }
    ?>
    </div>
    <?php } ?>

  </main>

</div>
<?php get_footer(); ?>