
  <?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1">Welcome to our <span class="orange-color">blog!</span></h1>
      <h2 class="blog__h2">Check some of our latest buys!</h2>
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