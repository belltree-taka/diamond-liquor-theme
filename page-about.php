<?php
get_header();

while ( have_posts() ) : the_post();
?>

<section class="hero-banner">
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } ?>

  <div class="hero-banner__text-container container">
    <div class="hero-banner__text-inner-container">
      <h2 class="hero-banner__contact-page-title">About Us</h2>
    </div>
  </div>
</section>

<?php the_content(); ?>

<?php
endwhile;

get_footer();