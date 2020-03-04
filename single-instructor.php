<?php 
  get_header(); 
  ?>
<div class="wrapper">
  <header class="blog__welcome">
    <div class="blog__welcome__txt-box">
      <h1 class="blog__h1"><?php the_title(); ?></h1>
      <h2 class="blog__h2 instructor__slogan"><?php echo get_field('slogan'); ?></h2>
      <button class="blog__back-to-blog" onclick="goBack()">&larr; Back to the event</button>
    </div>
  </header>

  <main class="blog__main" style="margin-top: 2rem;">

  <?php 
    while (have_posts()) {
    the_post();
  ?>
    <div class="blog__content">
      <div class="blog__post__meta" style="margin-bottom: 6rem;"></div>
      <div class="instructor__container">
        <img class="instructor__image" src="<?php the_post_thumbnail_url('instructorPortrait'); ?>">
        <div class="instructor__text"><?php the_content(); ?></div>
      </div>
      <p class="instructor__contact">Contact the instructor: <a href="mailto: #" class="instructor__contact__mail"><?php echo get_field('e-mail_address_instructor'); ?></a></p>
    </div>
    <?php } ?>
  </main>

</div>
<?php get_footer(); ?>
<script>
  function goBack() {
    window.history.back();
  }
</script>