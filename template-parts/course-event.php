<div class="blog__content">
  <div class="course__date">
    <p class="course__date__para">
      <?php $courseDate = new DateTime(get_field('course_date', false, false));
        echo $courseDate-> format('F d, Y ');
      ?>
    </p>
  </div>
  <h2 class="blog__post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="blog__post__text">
    <?php if (has_excerpt()) {
          echo get_the_excerpt();
        } else {
          echo wp_trim_words(get_the_content(), 18);
        } ?>
    <p><a class="blog__post__continue-reading" href="<?php the_permalink(); ?>">Learn more <span>&raquo;</span></a></p>
  </div>
</div>