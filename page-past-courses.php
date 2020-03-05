<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1">Past educational events</h1>
      <h3 class="blog__h3">A recap of our past events</h3>
      <a class="blog__back-to-blog" href="<?php echo site_url('/courses'); ?>">&larr; Check all <strong>upcoming events</strong></a>
    </div>
  </header>

  <main class="blog__main">
  <?php 
    $today = date('Ymd'); 
    $pastCourses = new WP_Query(array(
      'paged' => get_query_var('paged', 1),
      'post_type' => 'course',
      'meta_key' => 'course_date',
      'orderby' => 'meta_value_num', 
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'key' => 'course_date',
          'compare' => '<',
          'value' => $today,
          'type' => 'numeric'
        )
      )
    ));

    while ($pastCourses->have_posts()) {
      $pastCourses->the_post();
      get_template_part('template-parts/course', 'event');
      } ?>
      <div class="pagination">
      <?php echo paginate_links(array(
          'total' => $pastCourses -> max_num_pages
        )); ?>
      </div>
    </main>
  </div>
  <?php get_footer(); ?>
