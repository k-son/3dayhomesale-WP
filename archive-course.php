<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1">Upcoming educational events</h1>
      <h3 class="blog__h3">We teach how to prepare houses for sale to get the best offer</h3>
    </div>
  </header>

  <main class="blog__main">
  <?php 
    $today = date('Ymd'); 
    $courses = new WP_Query(array(
      'paged' => get_query_var('paged', 1),
      'post_type' => 'course',
      'meta_key' => 'course_date',
      'orderby' => 'meta_value_num', 
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' => 'course_date',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numeric'
        )
      )
    ));

    while ($courses->have_posts()) {
      $courses->the_post(); ?>
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
      <?php } ?>
      <div class="pagination">
      <?php echo paginate_links(array(
          'total' => $courses -> max_num_pages
        )); ?>
      </div>
      <p class="course__go-to-archive">Looking for a recap of past events? <a class="course__go-to-archive__link" href="<?php echo site_url('/past-courses'); ?>">Check out our <strong>past events archive</strong>.</a></p>
    </main>
  </div>
  <?php get_footer(); ?>
