<?php
/*
Template Name: About
*/
get_header();

?>

<<<<<<< HEAD
=======
	<main id="primary" class="site-main about">
		<?php the_content();?>
	</main>
>>>>>>> main

<section class="hero-banner">
  <?php the_post_thumbnail('full'); ?>

  <div class="hero-banner__text-container container">
    <div class="hero-banner__text-inner-container">
      <h2 class="hero-banner__contact-page-title">About Us</h2>
    </div>3
  </div>
</section>

<main id="primary" class="site-main about">
  <?php
  while ( have_posts() ) :
    the_post();
    the_content();
  endwhile;
  ?>
</main>

<?php get_footer(); ?>